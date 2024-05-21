@extends('layout.auth-layout')
@section('konten')
<div class="card">
    <div class="card-header">
      {{$data_ekstra->judul}}
    </div>
    <div class="card-body">
      <p class="card-text">{{$data_ekstra->deskripsi}}</p>
    </div>
</div>
@endsection
