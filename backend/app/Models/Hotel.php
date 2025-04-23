<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'direccion',
        'ciudad_id',  // Asegúrate de que esté incluida la relación
        'numero_habitaciones',
        'nit',
    ];

    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class);
    }
}
