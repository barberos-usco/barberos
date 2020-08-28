<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    protected $table = 'calificacion';
    public $timestamps = true;

    protected $fillable = ['id', 'cliente_id', 'barbero_id', 'calificacion'];

    protected $hidden = ['created_at', 'updated_at'];

    public function cliente(){
    	return $this->belongsTo(User::class, 'cliente_id', 'id');
    }

    public function barbero(){
    	return $this->belongsTo(User::class, 'barbero_id', 'id');
    }
}
