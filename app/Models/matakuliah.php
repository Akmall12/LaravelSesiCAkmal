<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    use HasFactory;
    protected $table='matakuiahs';
    protected $fillabel=[
        'kode_mk',
        'nama_mk',
        'sks',
        'semester',
    ];
}
