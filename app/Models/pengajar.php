<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajar extends Model
{
    use HasFactory;

    protected $table = 'pengajars';
    protected $primaryKey = 'pengajarId';
    public $incrementing = false; // karena primary key bukan auto increment
    protected $keyType = 'string';

    protected $fillable = [
        'pengajarId',
        'nip',
        'nama',
        'noHp',
        'alamat',
        'pendidikanTerakhir',
        'bidangIlmu',
        'userId',
    ];

    // Relasi ke tabel users
    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }
}
