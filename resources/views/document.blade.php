@extends('layouts.main')
@section('content')
    <section class="section">
     <div class="title">
        <h1 style="color: black; margin-left: 10px; margin-top:10px">List Project</h1>
     </div> 

     <!-- Nama CLient -->
     <form action="{{route ('simpan-dok')}}" method="POST" enctype="multipart/form-data">
      {{csrf_field()}}

          <div class="row">
      <div class="col">
      <label for="nama_client" class="form-label" style="font-weight: bold; color:black">Nama Client</label>
      <input type="text" name="nama_client"  class="form-control" >
      </div>


      <div class="col-sm-6">
      <label for="nama_sales" class="form-label" style="font-weight: bold; color:black">Nama Sales</label>
      <input type="text" name="nama_sales"  class="form-control" >
      </div>
    </div>
<br>

    <div class="row g-3">
      <div class="col-sm-6">
      <label for="nama_project" class="form-label" style="font-weight: bold; color:black">Nama Project</label>
      <input type="text" name="nama_project"  class="form-control" >
      </div>

    
      <div class="col-sm-3">
      <label for="jenis_dokumen" class="form-label" style="font-weight: bold; color:black">Jenis Dokumen</label>
      <select name="jenis_dokumen" id="jenis_dokumen" class="form-control">
        <option selected>Pilih Dokumen</option>
        <option value="pdf">Pdf</option>
        <option value="doc">Doc</option>
        <option value="excel">Excel</option>
      </select>
      </div>

    <div class="col-sm">
    <label for="upload_dokumen" class="form-label" style="font-weight: bold; color:black">Upload Dokumen</label>
        <input type="file" name="upload_dokumen"  class="form-control" >
    </div>
</div>

<br>
<div class="row">
<div class="col-sm-6">
      <label for="hps" class="form-label" style="font-weight: bold; color:black">Hps</label>
      <input type="text" name="hps"  class="form-control" >
      </div>


      <div class="col-sm-5">
      <label for="sign_tec" class="form-label" style="font-weight: bold; color:black">Sign Tecnikal</label>
      <select name="sign_tec" id="sign_tec" class="form-control">
      <option selected>Pilih Technikal</option>
        <option value="fazar">Fazar</option>
        <option value="rifqi">Rifqi</option>
        <option value="arisz">Arisz</option>
      </select>
      </div>
</div>
<br>
     <button type="submit" class="btn btn-primary btn-sm">Save</button>
     </form>
   
@endsection