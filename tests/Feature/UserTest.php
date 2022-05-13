<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{

    private $path = '/api/users';
        
    public function test_list()
    {
        $response = $this->actingAs($this->createUser())
                         ->withSession(['banned' => false])
                         ->get($this->path);
        $response->assertJsonPath('message', 'Users Consulta exitosa');
        $response->assertStatus(200);
        
    }

    public function test_create()
    {
        $response = $this->actingAs($this->createUser())
                         ->withSession(['banned' => false])
                         ->postJson($this->path, [
                            'data' => [
                                'identification' => 1088,
                                'identification_type' => 'CC',
                                'offer_id' => 4,
                                'rol' => '1',
                                'departament' => '1',
                                'city' => '1',
                                'gender' => '1',
                                'password' => '8afdb241',
                                'name' => 'mi tix',
                                'birthdate' => '2020-01-01',
                                'email' => 'miguel2@gmail.com',
                            ],
                         ]);
        $response->assertJsonPath('message', 'User Creado correctamente');
        $response->assertJsonStructure(['records' => ['id',]
        ]);
        $response->assertStatus(200);
        $response->dump();
    }

    private function createUser()
    {
        return User::factory()->create();
    }
}
