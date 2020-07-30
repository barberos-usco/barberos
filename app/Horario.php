<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
//    protected $table = 'horarios';
    use softDeletes;

    protected $fillable = ['lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado', 'domingo','id_barbero'];

    public function barbero(){
        return $this->belongsTo(User::class, 'id_barbero', 'id');
    }
}
