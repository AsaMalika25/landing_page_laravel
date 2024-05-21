@extends('layout.backend_layout') 
<!-- START FORM -->
@section('konten')


<form action="{{ url('edit-riwayat/'.$data_riwayat->id) }}" method='post' enctype="multipart/form-data">
@csrf

        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href="{{ url('list-cms') }}" class="btn-btn-secondary"><< kembali</a>

            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">judul_riwayat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='judul_riwayat' id="judul_kompetensi" value="{{$data_riwayat->judul}}">
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">deskripsi</label>
                <div class="col-sm-10">
                    <input type="text" name="deskripsi" id="" class="form-control" value="{{$data_riwayat->deskripsi}}">
                </div>
            </div>

            <div class="mt-3 row">
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
        </div>
    </form>
        <!-- AKHIR FORM -->
        @endsection