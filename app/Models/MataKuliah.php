<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $table = 'matakuliah';
    protected $primaryKey = 'mkId';

    public $incrementing = false;      
    protected $keyType = 'string';     

    protected $fillable = [
        'mkId',
        'nama',
        'sksTeori',
        'sksPraktikum',
        'semester',
    ];
}
