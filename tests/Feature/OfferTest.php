<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class OfferTest extends TestCase
{

    private $path = '/api/offers';
        
    public function test_list()
    {
        $response = $this->actingAs($this->createUser())
                         ->withSession(['banned' => false])
                         ->get($this->path);
        $response->assertJsonPath('message', 'Offers Consulta exitosa');
        $response->assertStatus(200);
        
    }

    public function test_create()
    {
        $response = $this->actingAs($this->createUser())
                         ->withSession(['banned' => false])
                         ->postJson($this->path, [
                            'data' => [
                                'name' => 'Oferta 1',
                                'status' => 'Activo'
                            ],
                         ]);
        $response->assertJsonPath('message', 'Offer Creado correctamente');
        $response->assertJsonStructure(['records' => ['id',]
        ]);
        $response->assertStatus(200);
    }

    private function createUser()
    {
        return User::factory()->create();
    }
}
