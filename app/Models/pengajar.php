<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajar extends Model
{
    use HasFactory;

    protected $table = 'pengajar';
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
        'user_id',
    ];

    // Relasi ke tabel users
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
