<?php

namespace Database\Seeders;

use App\Models\Offer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
/* use App\Models\Product;
use App\Models\Store; */

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $areas = ['Administración', 'Financiera', 'Compras', 'Infraestructura', 'Operación', 'Talento Humano', 'Servicios Varios'];
        $docTypes = ['CC', 'TI', 'CEX', 'PST'];
        $countries = ['Colombia', 'Peru', 'Venezuela', 'Argentina'];

        DB::table('users')->insert([
            'first_name' => 'Miguel',
            'identification' => 1234,
            'email' => 'miguel09acosta@gmail.com',
            'password' => Hash::make('123'),
            'rol' => 1,
        ]);
        DB::table('users')->insert([
            'first_name' => 'Usuario',
            'identification' => 12345,
            'email' => 'usuario@test.com',
            'password' => Hash::make('123'),
            'rol' => 2,
        ]);

        foreach ($areas as $a) {
            DB::table('areas')->insert([
                'name' => $a,
            ]);
        }

        foreach ($docTypes as $d) {
            DB::table('document_types')->insert([
                'name' => $d,
            ]);
        }

        foreach ($countries as $c) {
            DB::table('countries')->insert([
                'name' => $c,
            ]);
        }

    }
}
