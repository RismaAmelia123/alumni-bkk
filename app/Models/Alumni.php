<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;

class Alumni extends Model
{
    use HasFactory;
    protected $table = 'alumnis';
    protected $guarded = [];
    protected $primaryKey = 'nisn';
    protected $keyType = 'string';

    function lowongan(){
        return $this->hasMany(Lowongan::class,'nisn');
    }

    function lamaran(){
        return $this->hasMany(Lamaran::class,'nisn');
    }

    function perusahaan(){
        return $this->hasMany(Perusahaan::class,'nisn');
    }

    function testimoni(){
        return $this->hasmany(Testimoni::class,'nisn');
    }
}
