<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;
    protected $table = 'testimonis';
    protected $guarded = [];
    protected $primaryKey = 'id_testimoni';

    function alumni(){
        return $this->belongsTo(Alumni::class,'nisn');
    }

    function lowongan(){
        return $this->belongsTo(Lowongan::class,'id_lowongan');
    }
}
