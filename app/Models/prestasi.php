<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prestasi extends Model
{
    use HasFactory;
    protected $fillable = ['judul','deskripsi'];
    protected $table = 'prestasi';
    public $timestamps = false;
}
