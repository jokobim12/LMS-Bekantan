<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnggotaKelas extends Model
{
     protected $table = 'anggotakelas';
    protected $primaryKey = 'anggotaKelasId';

    public $incrementing = false;     // PK bukan auto-increment
    protected $keyType = 'string';    // varchar(12)

    protected $fillable = [
        'anggotaKelasId',
        'userId',
        'kelasId',
        'createdAt',
    ];

    protected $casts = [
        'createdAt' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId', 'userId');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelasId', 'kelasId');
    }
}
