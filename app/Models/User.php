<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Especifica la llave primaria
    protected $primaryKey = 'Idu'; // Cambia 'id' por 'Idu'

    // Si 'Idu' no es un entero autoincremental
    public $incrementing = false; // Cambia esto si es necesario

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Idu',   // Asegúrate de incluir 'Idu'
        'NomU',
        'ApPa',
        'ApMa',
        'User',
        'password',
        'C', // Incluye la columna de la llave foránea de categorías
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}

