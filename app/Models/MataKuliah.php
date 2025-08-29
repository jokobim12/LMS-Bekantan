<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $table = 'matakuliah';

    protected $fillable = [
        'nama_matakuliah',
        'kode',
        'total_sks',
        'semester',
        'total_sks'
    ];  
}
