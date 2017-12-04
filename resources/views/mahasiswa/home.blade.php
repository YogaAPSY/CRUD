@extends('layouts/app')

@section('content')
    <div class="page-header">
        <h1>Daftar Mahasiswa</h1>
    </div>
       @if(Session::has('flash_message'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          {{ Session::get('flash_message') }}
        </div>
  @endif
    <table class="table table-striped">
      <tr>
        <th>No</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Tanggal Lahir</th>
      </tr>
      @foreach($siswa as $mahasiswa)
        <tr>
            <td>{{ $mahasiswa->id }}</td>
            <td>{{ $mahasiswa->nim }}</td>
            <td>{{ $mahasiswa->nama }}</td>
            <td>{{ $mahasiswa->jurusans->nama }}</td>
            <td>{{ $mahasiswa->tgl_lahir }}</td>
        </tr>
      @endforeach
    </table>
    <div class="table-nav">
        <div class="paging">
            {{ $siswa->links() }}
        </div>
    </div>
<div class="container">
  <div class="row">
  <hr>
    <div class="col-lg-12">
      <div class="col-md-8">
      </div>
      <div class="col-md-4">
        <p class="muted pull-right">© Deah Setyo - 09021281419040</p>
      </div>
    </div>
  </div>
</div>
@endsection