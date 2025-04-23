<?php

namespace Tests\Feature;

use App\Models\Hotel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Ciudad;

class HotelTest extends TestCase
{
    use RefreshDatabase;

    public function test_crear_hotel()
    {
        $ciudad = Ciudad::create(['nombre' => 'Bogotá']);
        
        $data = [
            'nombre' => 'Hotel Aurora',
            'direccion' => 'Av. Siempre Viva 123',
            'ciudad_id' => 1,
            'nit' => '9876543210',
            'numero_habitaciones' => 25
        ];

        $response = $this->postJson('/api/hoteles', $data);

        $response->assertStatus(201);
        $this->assertDatabaseHas('hoteles', [
            'nombre' => 'Hotel Aurora',
            'nit' => '9876543210'
        ]);
    }
}
