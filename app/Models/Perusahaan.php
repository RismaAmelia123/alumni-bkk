<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;
    protected $table = 'perusahaans';
    protected $guarded = [];
    protected $primaryKey = 'id_perusahaan';

    function lowongan(){
        return $this->hasMany(Lowongan::class,'id_perusahaan');
    }

    function alumni(){
        return $this->belongsTo(Alumni::class,'nisn');
    }

    function admin(){
        return $this->belongsTo(Admin::class,'id_admin');
    }
}
