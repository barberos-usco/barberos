<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Portafolio extends Model
{
    use Notifiable, SoftDeletes;

    protected $table = 'portafolio';
    public $timestamps = true;

    protected $dates = ['deleted_at'];

    protected $fillable = ['id', 'barbero_id', 'ruta_foto', 'descripcion', 'activo'];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function barbero(){
    	return $this->belongsTo(User::class, 'barbero_id', 'id');
    }
}
