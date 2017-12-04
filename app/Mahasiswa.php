<?php

namespace App;

use App\Jurusan;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = [
        'nim',
        'id_jurusan',
        'nama',
        'tgl_lahir',
    ];

    public function jurusans()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan');
    }
}
