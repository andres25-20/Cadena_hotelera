<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $table = 'hoteles';
    protected $fillable = [
        'nombre',
        'direccion',
        'ciudad_id',  
        'numero_habitaciones',
        'nit',
    ];

    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class);
    }
}
