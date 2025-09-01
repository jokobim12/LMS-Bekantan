<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $primaryKey = 'kelasId';

    public $incrementing = false;       
    protected $keyType = 'string';      

    protected $fillable = [
        'kelasId',
        'nama',
        'tahunAjaran',
        'pengajarId',
        'mkId',
    ];

    // Setiap kelas dimiliki satu pengajar
    public function pengajar()
    {
        return $this->belongsTo(Pengajar::class, 'pengajarId', 'pengajarId');
    }

    // Setiap kelas mengacu ke satu mata kuliah
    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class, 'mkId', 'mkId');
    }
}
