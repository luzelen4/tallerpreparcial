<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coffe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', // Nombre del café
        'description', // Descripción del café
        'price', // Precio del café
        'size', // Tamaño del café (small, medium, large)
        'available', // Disponibilidad (booleano)
        'roast_date', // Fecha de tostado
        'brew_time', // Tiempo de preparación
        'caffeine_content', // Contenido de cafeína
        'category_id', // ID de la categoría (FK)
        'brand_id' // ID de la marca (FK)
    ];
}
