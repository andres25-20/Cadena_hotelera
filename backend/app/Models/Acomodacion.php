<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Acomodacion extends Model
{
    protected $fillable = ['nombre'];

    public function reglasAcomodacion()
    {
        return $this->hasMany(ReglaAcomodacion::class);
    }

    public function habitaciones()
    {
        return $this->hasMany(Habitacion::class);
    }
}
