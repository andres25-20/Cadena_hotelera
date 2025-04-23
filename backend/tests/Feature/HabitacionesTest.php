<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Ciudad;
use App\Models\User;
use App\Models\Rol;
use Tests\TestCase;
use App\Models\Hotel;
use App\Models\Habitacion;

class HabitacionesTest extends TestCase
{
    use RefreshDatabase;

    public function test_no_permite_mas_habitaciones_que_las_permitidas()
    {
        // Creamos un hotel con capacidad para 2 habitaciones
        $hotel = Hotel::factory()->create(['numero_habitaciones' => 2]);

        // Creamos 2 habitaciones válidas
        Habitacion::factory()->count(2)->create(['hotel_id' => $hotel->id]);

        // Intentamos crear una tercera habitación
        $response = $this->postJson('/api/habitaciones', [
            'hotel_id' => $hotel->id,
            'tipo_habitacion_id' => 1, // Debes proporcionar un ID de tipo de habitación válido
            'acomodacion_id' => 1, // Debes proporcionar un ID de acomodación válido
            'cantidad' => 1, // El número de habitaciones a crear (debe ser un número válido)
        ]);

        // Verificamos que la respuesta tenga el mensaje de error esperado
        $response->assertStatus(422);
        $response->assertJsonFragment([
            'message' => 'Supera el número máximo de habitaciones permitido para este hotel'
        ]);
    }

}
