@extends('layout.backend_layout') 
<!-- START FORM -->
@section('konten')


<form action="{{ url('edit-visi/'.$data_visi->id) }}" method='post' enctype="multipart/form-data">
@csrf

        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href="{{ url('list-cms') }}" class="btn-btn-secondary"><< kembali</a>

            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">judul_visi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='judul_visi' id="judul_kompetensi" value="{{$data_visi->judul}}">
                </div>
            </div>
            
            <div class="mb-3 row">
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
        </div>
    </form>
        <!-- AKHIR FORM -->
        @endsection