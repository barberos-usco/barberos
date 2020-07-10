<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
//    protected $table = 'horarios';
    protected $fillable = ['lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado', 'domingo'];
}
