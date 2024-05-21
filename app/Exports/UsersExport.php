<?php

namespace App\Exports;

use App\Models\User;
use App\Models\prestasi;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return prestasi::select("id", "judul", "deskripsi")->get();
    }
}
