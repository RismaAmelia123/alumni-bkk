<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;
    protected $table = 'lowongans';
    protected $guarded = [];
    protected $primaryKey = 'id_lowongan';

    function alumni(){
        return $this->belongsTo(Alumni::class,'nisn');
    }

    function admin(){
        return $this->belongsTo(Admin::class,'id_admin');
    }
    
    function perusahaan(){
        return $this->belongsTo(Perusahaan::class,'id_perusahaan');
    }

    function lamaran(){
        return $this->hasMany(Lamaran::class,'id_lowongan');
    }

    function testimoni(){
        return $this->hasMany(Testimoni::class,'id_lowongan');
    }
}
