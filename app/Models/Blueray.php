<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blueray extends Model
{
    protected $table = 'blueray';
    protected $primaryKey = 'kodeblueray';
    public $timestamps = false;

    protected $fillable = [
        'merkblueray',
        'stockblueray',
        'tersedia',
    ];
}
