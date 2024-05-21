@extends('layout.backend_layout') 
<!-- START FORM -->
@section('konten')


<form action="{{ url('edit-ekstrakulikuler/'.$data_ekstra->id) }}" method='post' enctype="multipart/form-data">
@csrf

        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href="{{ url('list-cms') }}" class="btn-btn-secondary"><< kembali</a>

            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">judul_kompetensi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='judul_ekstra' id="judul_kompetensi" value="{{$data_ekstra->judul}}">
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">deskripsi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="deskripsi" id="" value="{{$data_ekstra->deskripsi}}">
                </div>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
        </div>
    </form>
        <!-- AKHIR FORM -->
        @endsection