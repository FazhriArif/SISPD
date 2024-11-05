<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    use HasFactory;

    protected $table = 'instansis';
    protected $guarded = 'id';
    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
        'email',
        'kode_pos',
        'domisili',
        'gambar'
    ];
}
