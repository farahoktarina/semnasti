@extends('admin.index')
@section('content')
<div class="home-section bg-white" id="confirm">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="section-heading">
        <h2 style="text-align:center">UPDATE DATA PESERTA</h2>
        <p style="text-align:center">Input Data Diri dengan Benar</p>
        @include('layouts.partials.message')
      </div>
      <div class="col-md-offset-3 col-md-6">
        <form class="" action="{{route('peserta.update',$peserta->pin)}}" method="post">
   <input type="hidden" name="_method" value="PUT" />
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <input type="text" name="pin" class="form-control" value="{{$peserta->pin}}" readonly="true">
            </div>
            <div class="form-group">
              <input type="text" name="name" class="form-control" value="{{$peserta->name}}"/>
            </div>
            <div class="form-group">
               <input type="email" class="form-control" name="email" value="{{$peserta->email}}"/>
            </div>
            <div class="form-group">
              <input type="tel" name="telp" class="form-control" value="{{$peserta->telp}}" />
            </div>
             <div class="form-group">
               <label for="kategori" style="font-size:16px"><strong>Kategori</strong></label><br>
               <input type="radio" name="kategori" value="mhs"> Mahasiswa
               <input type="radio" name="kategori" value="umum"> Umum
            </div>
            <div class="form-group" id="instansi" style="display:none">
              <input type="text" name="instansi" class="form-control" value="{{$peserta->instansi}}" hidden="true" />
            </div>
            <div class="form-group" id="jurusan"  style="display:none">
              <input type="text" name="jurusan" class="form-control" value="{{$peserta->jurusan}}" hidden="true" />
            </div>
            <div class="form-group" id="alamat"  style="display:none">
              <input type="text" name="alamat" class="form-control" value="{{$peserta->alamat}}" hidden="true"/>
            </div>
             <div class="text-center">
               <input type="submit" name="Submit" value="Update" class="btn btn-lg btn-block btn-primary">

             </div>
          </form>
      </div>
    </div>
  </div>
</div>

@endsection
