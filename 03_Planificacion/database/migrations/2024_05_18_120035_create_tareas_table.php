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
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Nombre tarea
            $table->date('fechainicio'); // fechainicio
            $table->date('fechafin'); //fechafin
            $table->string('avance');
            $table->unsignedBigInteger('proyecto_id')->nullable();
            $table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tareas');
    }
};
