<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id()->comment('id');
            $table->string('clave', 25)->comment('clave');
            $table->string('producto', 200)->comment('producto');
            $table->unsignedInteger('existencias')->comment('existencias');
            $table->decimal('precio_unitario', 10, 2)->comment('precio unitario');
            $table->enum('unidad_medida', ['pieza', 'caja', 'kilogramo', 'metro', 'bolsa', 'otro'])->comment('unidad de medida');
            $table->enum('estatus', ['Activo', 'Inactivo'])->comment('estatus');
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
        Schema::dropIfExists('productos');
    }
}
