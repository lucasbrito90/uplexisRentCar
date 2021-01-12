<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigInteger('referencia');
            $table->text('imagem');
            $table->bigInteger('ano');
            $table->string('nome');
            $table->string('quilometragem');
            $table->string('combustivel');
            $table->string('cambio');
            $table->string('portas');
            $table->string('cor');
            $table->string('preco');
            $table->text('slug');
            $table->id();
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
        Schema::dropIfExists('cars');
    }
}
