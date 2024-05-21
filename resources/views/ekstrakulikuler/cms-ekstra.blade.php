<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h1>EKSTRAKULIKULER</h1>
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
          <form class="d-flex" action="" method="post">
            @csrf
              <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
              <button class="btn btn-secondary" type="submit">Cari</button>
          </form>
        </div>

        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
          <a href='{{ url('/create-ekstrakulikuler')}}' class="btn btn-primary">+ Tambah Data</a>

        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">No</th>
                    <th class="col-md-3">Judul halaman</th>
                    <th>deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                @foreach ($data_ekstrakulikuler as $item)
                <tr>
                    <td>{{ $i++ }}</td>
                    {{-- <td><image alt="img"width="150px"src="{{ url('public/image/'.$item->nama_banner) }}"></td> --}}
                    <td>{{ $item->judul }}</td>
                    <td>


                        <a href='{{url('edit-ekstrakulikuler/'.$item->id)}}' class="btn btn-warning btn-sm">Edit</a>
                        {{-- <a href='{{url('edit/'.$item->nim)}}' class="btn btn-warning btn-sm">Edit</a> --}}
                        <form  onsubmit="return confirm('igin menghapus data ini?')" class='d-inline' action="{{ url('delete-ekstrakulikuler/'.$item->id) }}"
                            method="post">
                            @csrf
                            @method('DELETE')
                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                    </form>
                    <a href='{{url('detail-ekstrakulikuler/'.$item->id)}}' class="btn btn-warning btn-sm">Detail</a>
                   
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
       {{ $data->links() }}
    </div>
  <!-- AKHIR DATA -->
