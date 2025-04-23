<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoHabitacion extends Model
{
    protected $table = 'tipos_habitacion';
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
