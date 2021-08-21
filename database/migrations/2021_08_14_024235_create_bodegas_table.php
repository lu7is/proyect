<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBodegasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bodegas', function (Blueprint $table) {
            $table->id();
            $table->string('estado');
            $table->string('num_remi');
            $table->string('tipo');
            $table->string('cantidad');
            $table->string('descripcion');
            $table->string('fecha_in');
            $table->string('fecha_out');
            //$table->string('usuario_id')->nullable();

            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users');
           
            
           // $table->foreign('usuario_id')
            //      ->references('id')->on('users')
            //      ->onDelete('set null');
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
        Schema::dropIfExists('bodegas');
    }
}
