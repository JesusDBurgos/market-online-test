<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tiendas', function (Blueprint $table) {
            $table->id();
            $table->boolean('estado')->unsigned();
            $table->string('nombre', 30);
            $table->string('descripcion', 500);
            $table->string('telefono', 20);
            $table->string('direccion', 120);
            $table->string('direccion_anexo', 40);
            $table->string('direccion_barrio', 25);
            $table->decimal('calificacion', 3, 2);
            $table->mediumInteger('calificacion_cantidad')->unsigned();
            $table->boolean('impuestos');
            $table->string('dias_trabajados', 21);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiendas');
    }
};
