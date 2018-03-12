<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecargaMovilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recarga_moviles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_servicio');
            $table->string('cliente_nombre');
            $table->string('num_contacto');
            $table->string('operador');
            $table->string('num_recarga');
            $table->string('monto_recarga');
            $table->string('estado');
            $table->string('estado_servicio');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recarga_moviles');
    }
}
