<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h1>VISI MISI</h1>
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
    <!-- Button trigger modal -->

    <!-- Modal -->
    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">

        <a href="{{ url('/create-visi') }}" class="btn btn-primary">+ Tambah Data</a>

        
       
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th>Judul halaman</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            @foreach($data_visi as $item)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>

                        <a href="{{ url('edit-visi/'.$item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form onsubmit="return confirm('igin menghapus data ini?')" class='d-inline' action="{{ url('delete-visi/'.$item->id) }}"
                            method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                        </form>
                        

                    </td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
</div>
</div>
