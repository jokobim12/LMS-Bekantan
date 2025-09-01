<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manajer extends Model
{
    use HasFactory;

    protected $primaryKey = 'managerId';
    public $incrementing = false; 
    protected $keyType = 'string'; 

    protected $fillable = [
        'managerId',
        'nik',
        'nama',
        'noHp',
        'alamat',
        'pendidikanTerakhir',
        'user_id',
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
