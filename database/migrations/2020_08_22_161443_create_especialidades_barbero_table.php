<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspecialidadesBarberoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especialidades_barbero', function (Blueprint $table) {
            $table->id();
            $table->integer('barbero_id');
            $table->integer('especialidad_id');
            $table->string('precio')->nullable();
            $table->string('imagen')->nullable();
            $table->string('descripcion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('especialidades_barbero');
    }
}
