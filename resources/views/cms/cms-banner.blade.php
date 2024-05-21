@extends('layout/backend_layout')
<!-- START DATA -->
@section('konten')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <!-- FORM PENCARIAN -->
    <div class="pb-3">
        <form class="d-flex" action="{{ url('list-cms') }}" method="post">
            @csrf
            <input class="form-control me-1" type="search" name="katakunci"
                value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci"
                aria-label="Search">
            <button class="btn btn-secondary" type="submit">Cari</button>
        </form>
    </div>

    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">
        <a href='{{ url('/create-cms') }}' class="btn btn-primary">+ Tambah Data</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-3">gambar banner</th>
                <th>Judul halaman</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            @foreach($data as $item)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td><img alt="img" width="150px"
                            src="{{ url('public/image/'.$item->nama_banner) }}"></td>
                    <td>{{ $item->judul }}</td>
                    <td>


                        <a href="{{ url('edit-cms/'.$item->id) }}"
                            class="btn btn-warning btn-sm">Edit</a>
                        
                        <form onsubmit="return confirm('igin menghapus data ini?')" class='d-inline'
                            action="{{ url('delete-cms/'.$item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                        </form>
                        

                    </td>
                </tr>
                <?php $i++ ?>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
</div>
@include('About.cms-about')
@include('Kompetensi.cms-kompetensi')
@include('Logo.cms-logo')
@include('Prestasi.cms-prestasi')
@include('ekstrakulikuler.cms-ekstra')
@include('Contact.cms-contact')
@include('visi.visi')
@include('Riwayat.riwayat')
<!-- AKHIR DATA -->
@endsection
