<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nombre',
        'email',
        'contraseña',
        'dni',
        'dirección',
    ];

    protected $hidden = [
        'contraseña',
        'remember_token',
    ];

    public function prestamos()
    {
        return $this->hasMany(Prestamo::class);
    }
}
