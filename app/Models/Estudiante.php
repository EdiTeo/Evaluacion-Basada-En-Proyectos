<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    //relacion de uno a muchos 
    public function docente(){
        return $this->belongsTo(Docente::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
