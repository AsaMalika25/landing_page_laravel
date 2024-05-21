<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayat extends Model
{
    use HasFactory;
    protected $fillable = ['judul', 'deskripsi'];
    protected $table = 'riwayat';
    protected $timestamp = false;
}
