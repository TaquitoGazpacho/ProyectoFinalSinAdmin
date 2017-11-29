<?php

use Illuminate\Database\Seeder;

class SuscripcionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suscripcions')->insert([
            'name' => 'Gratis',
            'description' => 'Descripción para perfil gratis',
            'precio' => 0,
        ]);

        DB::table('suscripcions')->insert([
            'name' => 'Básico',
            'description' => 'Descripción para perfil básico',
            'precio' => 10,
        ]);

        DB::table('suscripcions')->insert([
            'name' => 'Premium',
            'description' => 'Descripción para perfil Premium',
            'precio' => 40,
        ]);

        DB::table('suscripcions')->insert([
            'name' => 'Empresa',
            'description' => 'Descripción para perfil Empresa',
            'precio' => 150,
        ]);


    }
}
