<?php

namespace App;

use App\Especialidad;
use App\User;
use Illuminate\Database\Eloquent\Model;

class EspecialidadBarbero extends Model
{
    protected $table = 'especialidades_barbero';

    protected $fillable = ['barbero_id', 'especialidad_id', 'imagen', 'descripcion'];

    protected $hidden = ['created_at', 'updated_at'];

    public function barbero(){
        return $this->belongsTo(User::class, 'barbero_id', 'id');
    }

    public function especialidad(){
        return $this->belongsTo(Especialidad::class, 'especialidad_id', 'id');
    }
}
