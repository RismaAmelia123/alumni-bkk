<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admins';
    protected $guarded = [];
    protected $primaryKey = 'id_admin';

    function lowongan(){
        return $this->hasMany(Lowongan::class,'id_admin');
    }

    function lamaran(){
        return $this->hasMany(Lamaran::class,'id_admin');
    }

    function perusahaan(){
        return $this->hasMany(Perusahaan::class,'id_admin');
    }
}
