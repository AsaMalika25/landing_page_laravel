@extends('layout.backend_layout')
<!-- START FORM -->
@section('konten')


<form action="{{ url('edit-logo/'.$data_logo->id) }}" method='post'
    enctype="multipart/form-data">
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="{{ url('list-cms') }}" class="btn-btn-secondary">
            << kembali</a>
                @if($data_logo->image)
                    <div class="mb-3 row">
                        <img style="max-width:50px;max-height:50px"
                            src="{{ asset('public/image/'.$data_logo->logo_banner) }}" alt=""
                            width="150px">
                    </div>
                @endif

                <div class="mt-3 row">
                    <input type="file" name="logo_banner" id="image" class="form-control">
                    <div class="mt-3">
                        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
                    </div>
                    </div>
                </div>

               
    </div>
</form>
<!-- AKHIR FORM -->
@endsection
