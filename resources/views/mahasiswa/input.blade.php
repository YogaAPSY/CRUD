@extends('layouts/app')
@section('content')

  <div class="page-header">
    <h1><i class="glyphicon glyphicon-pencil"></i> Input Data Mahasiswa</h1>
  </div>

<form method="post" action="{{ url('store') }}" >
  <div class="form-group">
    <label for="nim">Nim</label>
    <input type="text" class="form-control" id="nim" placeholder="NIM" name="nim" maxlength="14">
    @if($errors->has('nim'))
      <span class="help-block alert alert-danger">{{ $errors->first('nim') }}</span>
    @endif
  </div>

  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" placeholder="nama" name="nama">
    @if($errors->has('nama'))
      <span class="help-block alert alert-danger">{{ $errors->first('nama') }}</span>
    @endif
  </div>

  <div class="form-group">
    <label for="tgl_lahir">Tanggal Lahir</label>
    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
      @if($errors->has('tgl_lahir'))
      <span class="help-block alert alert-danger">{{ $errors->first('tgl_lahir') }}</span>
    @endif
  </div>

  <div class="form-group">
    <label for="fakultas">Fakultas</label>
    <select name="fakultas" class="form-control" id="select_fakultas">
        <option value="">Pilih Fakultas</option>
        <option value="1">Fakultas Ekonomi</option>
        <option value="2">Fakultas Hukum</option>
        <option value="3">Fakultas Teknik</option>
        <option value="4">Fakultas Kedokteran</option>
        <option value="5">Fakultas Pertanian</option>
        <option value="6">Fakultas keguruan dan Ilmu Pendidikan</option>
        <option value="7">Fakultas Sosial dan Ilmu Politik</option>
    </select>
  </div>

  <div class="form-group">
    <label for="jurusan">Jurusan</label>
     <select name="id_jurusan" class="form-control" id="select_jurusan" value="">
              <option value="">Pilih Jurusan</option>
              <option value='9' class="1"> EKONOMI PEMBANGUNAN</option>
              <option value="10" class="1"> MANAJEMEN</option>
              <option value="11" class="1"> AKUNTANSI</option>
              <option value="12" class="1"> KESEKRETARIATAN</option>
              <option value="13" class="1"> PENDIDIKAN PROFESI AKUNTANSI (PPAk)</option>
              <option value="14" class="1"> MAGISTER MANAJEMEN</option>
              <option value="15" class="1"> ILMU EKONOMI</option>
              <option value="16" class="1"> ILMU MANAJEMEN</option>
              <option value="17" class="2"> ILMU HUKUM</option>
              <option value="18" class="2"> MAGISTER KENOTARIATAN</option>
              <option value="19" class="3"> TEKNIK SIPIL</option>
              <option value="20" class="3"> TEKNIK PERTAMBANGAN</option>
              <option value="21" class="4"> PENDIDIKAN DOKTER</option>
              <option value="22" class="4"> ILMU KEPERAWATAN</option>
              <option value="23" class="5"> AGRONOMI</option>
              <option value="24" class="5"> ILMU TANAH</option>
              <option value="25" class="6"> PENDIDIKAN MATEMATIKA</option>
              <option value="26" class="6"> PENDIDIKAN BIOLOGI</option>
              <option value="27" class="7"> SOSIOLOGI</option>
              <option value="28" class="7"> ILMU KOMUNIKASI</option>
          </select>
    @if($errors->has('id_jurusan'))
      <span class="help-block alert alert-danger">{{ $errors->first('id_jurusan') }}</span>
    @endif
  </div>
  <div class="form-group">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <input type="submit" id="submit" name="submit_post" class="btn btn-primary btn-block">
  </div>
</form>
@endsection