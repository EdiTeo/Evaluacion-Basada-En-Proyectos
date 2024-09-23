<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    //relacion de uno a muchos
    public function user(){
        return $this->belongsTo(User::class);
    }


    public function estudiantes(){
        return $this->hasMany(Estudiante::class);
    }
}
