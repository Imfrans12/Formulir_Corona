<?php

  

namespace App\Http\Controllers;

  

use App\Data;

use Illuminate\Http\Request;

  

class DataController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {
  
        return view('Datas.index');

    }

   

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('Datas.create');

    }

  

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {   $radio1 =  $request->input('radio1');
        $radio2 =  $request->input('radio2');
        $radio3 =  $request->input('radio3');
        $radio4 =  $request->input('radio4');
        $radio5 =  $request->input('radio5');
        $radio6 =  $request->input('radio6');
        $radio7 =  $request->input('radio7');
        $radio8 =  $request->input('radio8');
        $radio9 =  $request->input('radio9');
        $radio10 = $request->input('radio10');
        $radio11 = $request->input('radio11');
        $radio12 = $request->input('radio12');
        $radio13 = $request->input('radio13');
        $radio14=  $request->input('radio14');
        $radio15 = $request->input('radio15');
        $radio16 = $request->input('radio16');
        $radio17 = $request->input('radio17');
        $radio18 = $request->input('radio18');
        $radio19 = $request->input('radio19');
        $radio20 = $request->input('radio20');
        $radio21 = $request->input('radio21');
        $totaly = $radio1 + $radio2 + $radio3 + $radio4 + $radio5  + $radio6 + $radio7  + $radio8 + $radio9  + $radio10 +      $radio11 + $radio12 + $radio13  + $radio14 + $radio15  + $radio16 + $radio17  + $radio18 + $radio19  +      $radio20 + $radio21;
        $totaln = 21 - $totaly;
        if ($totaly >= 15 ) {
            $status = "Tinggi";
        } elseif($totaly >= 8) {
            $status = "Sedang";
        } else{
            $status = "Rendah";
        }
        

        $data = \App\Data::create([
        'nama'=> $request->nama,
        'alamat'=>$request->alamat,
        'umur' => $request->umur,
        'no_handphone' => $request->no_handphone,
        'ya' => $totaly,
        'tidak' => $totaln,
        'status' => $status,

 ]);    


        return view('datas.status',compact('status'));

                      
   }
   

    /**

     * Display the specified resource.

     *

     * @param  \App\Data  $Data

     * @return \Illuminate\Http\Response

     */

    public function show(Data $Data)

    {

        return view('Datas.show',compact('Data'));

    }

   

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Data  $Data

     * @return \Illuminate\Http\Response

     */

    public function edit(Data $Data)

    {

        return view('Datas.edit',compact('Data'));

    }

  

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Data  $Data

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Data $Data)

    {

        $request->validate([


            'nama' => 'required',

            'alamat' => 'required',

            'umur' => 'required',

            'no_handphone' => 'required',

            'ya' => 'required',

            'tidak' => 'required',

            'status' => 'required',

        ]);

  

        $Data->update($request->all());

  

        return redirect()->route('Datas.index')

                        ->with('success','Data updated successfully');

    }

  

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Data  $Data

     * @return \Illuminate\Http\Response

     */

    public function destroy(Data $Data)

    {

        $Data->delete();

  

        return redirect()->route('Datas.index')

                        ->with('success','Data deleted successfully');

    }

    public function status()
    {
        return view('datas.status');
    }

 
}