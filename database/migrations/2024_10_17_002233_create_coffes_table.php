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
        Schema::create('coffes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100); // Nombre del café
            $table->text('description'); // Descripción del café
            $table->decimal('price', 8, 2); // Precio del café
            $table->enum('size', ['small', 'medium', 'large']); // Tamaño del café
            $table->boolean('available'); // Disponibilidad
            $table->date('roast_date'); // Fecha de tostado
            $table->time('brew_time'); // Tiempo de preparación
            $table->float('caffeine_content', 5, 2); // Contenido de cafeína
            $table->unsignedBigInteger('category_id'); // ID de la categoría (FK)
            $table->unsignedBigInteger('brand_id'); // ID de la marca (FK)
            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coffes');
    }
};
