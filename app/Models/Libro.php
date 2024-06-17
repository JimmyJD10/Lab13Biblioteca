<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $fillable = [
        'título',
        'año',
        'autor_id',
        'editorial_id',
    ];

    public function autor()
    {
        return $this->belongsTo(Autor::class);
    }

    public function editorial()
    {
        return $this->belongsTo(Editorial::class);
    }

    public function prestamos()
    {
        return $this->hasMany(Prestamo::class);
    }
}
