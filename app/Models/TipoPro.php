<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPro extends Model
{
    use HasFactory;

    // Especificar el nombre de la tabla
    protected $table = 'tipo_pros'; // Cambia 'tipopro' a 'tipo_pros'

    // Si la tabla no tiene las columnas `created_at` y `updated_at`, configura timestamps a false
    public $timestamps = true;

    // Definir los atributos que se pueden asignar de manera masiva
    protected $fillable = [
        'TipoPro',
        'Clave',
    ];

    // Definir la clave primaria si no es `id`
    protected $primaryKey = 'IdTP';
}
