<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
 
class AuthController extends Controller
{
 
    public function index()
    {
        return view('login');
    }  
 
    public function registration()
    {
        return view('registration');
    }
     
    public function postLogin(Request $request)
    {
        request()->validate([
        'name' => 'required',
        'password' => 'required',
        ]);
 		
        $credentials = $request->only('name', 'password', );
        if (Auth::attempt($credentials)) {
            // Authentication passed...
          return redirect()->intended('dashboard');
        }
        return Redirect::to("login")
        ->withSuccess('Oppes! You have entered invalid credentials');

    }
 
    public function postRegistration(Request $request)
    {  
        request()->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        'nama_level' => 'required',
        ]);
         
        $data = $request->all();
 
        $check = $this->create($data);
       
        return Redirect::to("login")->withSuccess('Great! You have Successfully logged 	in');
    }
     
    public function dashboard()
    {
 
      if(Auth::check()){
        return view('dashboard');
      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }
 
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'nama_level' => $data['nama_level'],
      ]);
    }
     
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}