<?php

namespace App;

use App\Mahasiswa;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'jurusan';

    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class, 'id_jurusan');
    }
}
