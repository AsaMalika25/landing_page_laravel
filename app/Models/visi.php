<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visi extends Model
{
    use HasFactory;
    protected $fillable = ['judul'];
    protected $table = 'visi';
    public $timestamps = false;
}
