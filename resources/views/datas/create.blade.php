@extends('datas.layout')

  

@section('content')



@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

<form action= "{{ route('store') }}" method="POST">
    @csrf
  <div class="form-group row " style="margin-top:10px; " >
    <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
    <div style="width: 500px;">
      <input type="text" class="form-control width: 10px" id="inputnama" placeholder="" name="nama" required >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputalamat" class="col-sm-2 col-form-label">Alamat</label>
    <div style="width: 500px;">
      <input type="text" class="form-control" id="inputalamat" placeholder="" name="alamat" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputumur" class="col-sm-2 col-form-label">Umur</label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputumur" placeholder="" name="umur" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputhand" class="col-sm-2 col-form-label">No Handphone</label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputhand" placeholder="" name="no_handphone" required>
    </div>
  </div>
   <h5> A. Potensi Tertular Diluar Rumah</h5>
   <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-3 pt-0"style="margin-top:10px">1. Saya pergi keluar rumah </legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio1" id="radio1" value= 1  required>
          
          <label class="form-check-label" for="radio1">
           Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio1" id="radio1" value= 0 >
          <label class="form-check-label" for="radio1">
           Tidak
          </label>
        </div>
      </div>
    </div>
    <div class="row">
      <legend class="col-form-label col-sm-10 pt-0" style="margin-top:10px">2. Saya Menggunakan transportasi umum: online, angkot, bus, taksi, kereta api  </legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio2" id="radio2" value= 1  required >
          <label class="form-check-label" for="radio2">
           Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio2" id="radio2" value=0 >
          <label class="form-check-label" for="radio2">
           Tidak
          </label>
        </div>
      </div>
    </div>
    <div class="row">
      <legend class="col-form-label col-sm-10 pt-0" style="margin-top:10px">3. Saya tidak memakai masker pada saat berkumpul dengan orang lain  </legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio3" id="radio3" value=1  required  >
          <label class="form-check-label" for="radio3">
           Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio3" id="radio3" value=0>
          <label class="form-check-label" for="radio3">
           Tidak
          </label>
        </div>
      </div>
    </div>
    <div class="row">
      <legend class="col-form-label col-sm-10 pt-0" style="margin-top:10px">4. Saya berjabat tangan dengan orang lain  </legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio4" id="radio4" value=1  required  >
          <label class="form-check-label" for="radio4">
           Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio4" id="radio4" value=0>
          <label class="form-check-label" for="radio4">
           Tidak
          </label>
        </div>
      </div>
    </div>
    <div class="row">
      <legend class="col-form-label col-sm-10 pt-0" style="margin-top:10px">5. Saya tidak membersihkan tangan dengan hand sanitizer/ tissue basah sebelum pegang kemudi mobil/motor  </legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio5" id="radio5" value=1  required   required>
          <label class="form-check-label" for="radio5">
           Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio5" id="radio5" value=0>
          <label class="form-check-label" for="radio5">
           Tidak
          </label>
        </div>
      </div>
    </div>
    <div class="row">
      <legend class="col-form-label col-sm-10 pt-0" style="margin-top:10px">6. Saya menyentuh benda/uang yang juga disentuh orang lain  </legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio6" id="radio6" value=1  required  >
          <label class="form-check-label" for="radio6">
           Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio6" id="radio6" value=0>
          <label class="form-check-label" for="radio6">
           Tidak
          </label>
        </div>
      </div>
    </div>
    <div class="row">
      <legend class="col-form-label col-sm-10 pt-0" style="margin-top:10px">7. Saya tidak menjaga jarak 1.5 meter dengan orang lain ketika: belanja, bekerja, belajar, ibadah   </legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio7" id="radio7" value=1  required  >
          <label class="form-check-label" for="radio7">
           Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio7" id="radio7" value=0>
          <label class="form-check-label" for="radio7">
           Tidak
          </label>
        </div>
      </div>
    </div>
    <div class="row">
      <legend class="col-form-label col-sm-10 pt-0" style="margin-top:10px">8. Saya makan di luar rumah (warung/restaurant)  </legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio8" id="radio8" value=1  required  >
          <label class="form-check-label" for="radio8">
           Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio8" id="radio8" value=0>
          <label class="form-check-label" for="radio8">
           Tidak
          </label>
        </div>
      </div>
    </div>
    <div class="row">
      <legend class="col-form-label col-sm-10 pt-0" style="margin-top:10px">9. Saya tidak minum hangat & cuci tangan dengan sabun setelah tiba di tujuan  </legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio9" id="radio9" value=1  required  >
          <label class="form-check-label" for="radio9">
           Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio9" id="radio9" value=0>
          <label class="form-check-label" for="radio9">
           Tidak
          </label>
        </div>
      </div>
    </div>
   <div class="row">
      <legend class="col-form-label col-sm-10 pt-0" style="margin-top:10px">10. Saya berada di wilayah kelurahan tempat pasien tertular  </legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio10" id="radio10" value=1  required    >
          <label class="form-check-label" for="radio10">
           Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio10" id="radio10" value=0>
          <label class="form-check-label" for="radio10">
           Tidak
          </label>
        </div>
      </div>
    </div>
  </fieldset>
<h5>B. Potensi Tertular Di Dalam Rumah</h5>
 <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-10 pt-0" style="margin-top:10px">11. Saya tidak pasang hand sanitizer di depan pintu masuk, untuk bersihkan tangan sebelum pegang gagang (handle) pintu masuk  </legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio11" id="radio11" value=1  required    >
          <label class="form-check-label" for="radio11">
           Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio11" id="radio11" value=0>
          <label class="form-check-label" for="radio11">
           Tidak
          </label>
        </div>
      </div>
    </div>
    <div class="row">
      <legend class="col-form-label col-sm-10 pt-0" style="margin-top:10px">12. Saya tidak mencuci tangan dengan sabun setelah tiba di rumah   </legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio12" id="radio12" value=1  required    >
          <label class="form-check-label" for="radio12">
           Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio12" id="radio12" value=0>
          <label class="form-check-label" for="radio12">
           Tidak
          </label>
        </div>
      </div>
    </div>
   <div class="row">
      <legend class="col-form-label col-sm-10 pt-0" style="margin-top:10px">13. Saya tidak menyediakan: tissue basah/antiseptic, masker, sabun antiseptic bagi keluarga dirumah  </legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio13" id="radio13" value=1  required    >
          <label class="form-check-label" for="radio13">
           Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio13" id="radio13" value=0>
          <label class="form-check-label" for="radio13">
           Tidak
          </label>
        </div>
      </div>
    </div>
    <div class="row">
      <legend class="col-form-label col-sm-10 pt-0" style="margin-top:10px">14. Saya tidak segera merendam baju & celana bekas pakai di luar rumah kedalam air panas/sabun  </legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio14" id="radio14" value=1  required    >
          <label class="form-check-label" for="radio14">
           Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio14" id="radio14" value=0>
          <label class="form-check-label" for="radio14">
           Tidak
          </label>
        </div>
      </div>
    </div>
    <div class="row">
      <legend class="col-form-label col-sm-10 pt-0" style="margin-top:10px">15. Saya tidak segera mandi keramas setelah saya tiba di rumah  </legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio15" id="radio15" value=1  required    >
          <label class="form-check-label" for="radio15">
           Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio15" id="radio15" value=0>
          <label class="form-check-label" for="radio15">
           Tidak
          </label>
        </div>
      </div>
    </div>
    <div class="row">
      <legend class="col-form-label col-sm-10 pt-0" style="margin-top:10px">16. Saya tidak mensosialisasikan check list penilaian risiko pribadi ini kepada keluarga dirumah  </legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio16" id="radio16" value=1  required    >
          <label class="form-check-label" for="radio16">
           Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio16" id="radio16" value=0>
          <label class="form-check-label" for="radio16">
           Tidak
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  <h5>C. Daya Tahan Tubuh(IMUNITAS)</h5>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-10 pt-0" style="margin-top:10px">17. Saya dalam sehari tidak kena cahaya matahari minimal 15 menit  </legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio17" id="radio17" value=1  required    >
          <label class="form-check-label" for="radio17">
           Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio17" id="radio17" value=0>
          <label class="form-check-label" for="radio17">
           Tidak
          </label>
        </div>
      </div>
    </div>
    <div class="row">
      <legend class="col-form-label col-sm-10 pt-0" style="margin-top:10px">18. saya tidak jalan kaki/berolah raga minimal 30 menit setiap hari   </legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio18" id="radio18" value=1  required    >
          <label class="form-check-label" for="radio18">
           Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio18" id="radio18" value=0>
          <label class="form-check-label" for="radio18">
           Tidak
          </label>
        </div>
      </div>
    </div>
    <div class="row">
      <legend class="col-form-label col-sm-10 pt-0" style="margin-top:10px">19. Saya jarang minum Vitamin C dan E, dan kurang tidur  </legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio19" id="radio19" value=1  required    >
          <label class="form-check-label" for="radio19">
           Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio19" id="radio19" value=0>
          <label class="form-check-label" for="radio19">
           Tidak
          </label>
        </div>
      </div>
    </div>
   <div class="row">
      <legend class="col-form-label col-sm-10 pt-0" style="margin-top:10px">20. Usia saya diatas 60 tahun  </legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio20" id="radio20" value=1  required    >
          <label class="form-check-label" for="radio20">
           Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio20" id="radio20" value=0>
          <label class="form-check-label" for="radio20">
           Tidak
          </label>
        </div>
      </div>
    </div>
   <div class="row">
      <legend class="col-form-label col-sm-10 pt-0" style="margin-top:10px">21. Saya mempunyai penyakit: jantung/diabetes/gangguan pernapasan kronik  </legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio21" id="radio21" value=1  required    >
          <label class="form-check-label" for="radio21">
           Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio21" id="radio21" value=0>
          <label class="form-check-label" for="radio21">
           Tidak
          </label>
        </div>
      </div>
    </div>
  </fieldset>
 <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="margin-bottom: 10px">
      <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
@endsection