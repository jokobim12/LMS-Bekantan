<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'mhsId';

    public $incrementing = false;     
    protected $keyType = 'string';    

    protected $fillable = [
        'mhsId',
        'nim',
        'namaLengkap',
        'noHp',
        'alamat',
        'jenisKelamin',
        'tanggalLahir',
        'tempatLahir',
        'angkatan',
        'id',
        'prodiId',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'id');
    }

    public function programStudi()
    {
        return $this->belongsTo(ProgramStudi::class, 'prodiId', 'prodiId');
    }
}
