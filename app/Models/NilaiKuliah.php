<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NilaiKuliah extends Model
{
    protected $table = 'nilaikuliah';
    public $timestamps = false;

    protected $fillable = [
        'nrp',
        'nilaiangka',
        'sks',
    ];

    // Konversi Nilai Angka ke Huruf
    public function getNilaiHurufAttribute()
    {
        $nilai = $this->nilaiangka;

        if ($nilai <= 40) {
            return 'D';
        } elseif ($nilai <= 60) {
            return 'C';
        } elseif ($nilai <= 80) {
            return 'B';
        } else {
            return 'A';
        }
    }

    // Bobot = Nilai Huruf konversi * SKS
    public function getBobotAttribute()
    {
        $huruf = $this->nilaiHuruf;
        $konversi = match($huruf) {
            'A' => 4,
            'B' => 3,
            'C' => 2,
            'D' => 1,
            default => 0,
        };
        return $konversi * $this->sks;
    }
}
