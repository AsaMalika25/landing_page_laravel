@extends('layout.auth-layout')
@section('konten')
<div class="card">
    <div class="card-header">
      {{$data_prestasi->judul}}
    </div>
    <div class="card-body">
      <p class="card-text">{{$data_prestasi->deskripsi}}</p>
    </div>
</div>
@endsection
