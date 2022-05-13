<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Usuario test',
            'offer_id' => 4,
            'identification' => 1234,
            'identification_type' => 'CC',
            'email' => 'miguel09acosta@gmail.com',
            'password' => Hash::make('1234'),
            'rol' => 1,
        ];
    }
}
