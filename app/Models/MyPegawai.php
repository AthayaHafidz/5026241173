<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mypegawai extends Model
{
    public $timestamps = false;
    protected $table = 'mypegawai';
    protected $primaryKey = 'kodepegawai';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'kodepegawai',
        'namalengkap',
        'divisi',
        'departemen',
    ];
}
