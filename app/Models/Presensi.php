<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;

    protected $table = 'presensi';

    protected $fillable = [
        'keterangan',
        'siswa_id',
        'hadir',
        'tanggal',
        'waktu',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
