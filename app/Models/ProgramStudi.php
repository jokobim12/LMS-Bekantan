<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
    protected $table = 'programstudi';
    protected $primaryKey = 'prodiId';

    public $incrementing = false;        
    protected $keyType = 'string';       

    protected $fillable = [
        'prodiId',
        'nama',
    ];
}
