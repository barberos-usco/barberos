<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $table = 'comentarios';
    public $timestamps = true;

    protected $fillable = ['id', 'cliente_id', 'barbero_id', 'comentario'];

    protected $hidden = ['created_at', 'updated_at'];

    public function cliente(){
    	return $this->belongsTo(User::class, 'cliente_id', 'id');
    }

    public function barbero(){
    	return $this->belongsTo(User::class, 'barbero_id', 'id');
    }
}
