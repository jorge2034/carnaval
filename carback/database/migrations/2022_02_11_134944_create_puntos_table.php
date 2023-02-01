<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puntos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre")->nullable();
            $table->string("imagen")->nullable();
            $table->string("descripcion")->nullable();
            $table->string("direccion")->nullable();
            $table->string("telefono")->nullable();
            $table->string("lat")->nullable();
            $table->string("lng")->nullable();
            $table->unsignedBigInteger("rubro_id");
            $table->foreign("rubro_id")->references("id")->on("rubros");
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
        Schema::dropIfExists('puntos');
    }
};
