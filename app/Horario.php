<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = 'horarios';
    use softDeletes;
    public $timestamps = true;

    protected $fillable = ['lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado', 'domingo','id_barbero'];

    protected $hidden = ['created_at', 'updated_at'];

    public function barbero(){
        return $this->belongsTo(User::class, 'id_barbero', 'id');
    }
}
