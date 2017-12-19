<?php

use Illuminate\Database\Seeder;

class TaquillasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('taquillas')->insert([
            'numero_taquilla' => 1,
            'tamanio' => 'Grande',
            'ocupada' => false,
            'estado' => 'funcionando',
            'oficina_id' => 1,

        ]);

        DB::table('taquillas')->insert([
            'numero_taquilla' => 2,
            'tamanio' => 'Grande',
            'ocupada' => false,
            'estado' => 'funcionando',
            'oficina_id' => 1,

        ]);
        DB::table('taquillas')->insert([
            'numero_taquilla' => 3,
            'tamanio' => 'Mediana',
            'ocupada' => false,
            'estado' => 'funcionando',
            'oficina_id' => 1,

        ]);

        DB::table('taquillas')->insert([
            'numero_taquilla' => 1,
            'tamanio' => 'Grande',
            'ocupada' => false,
            'estado' => 'funcionando',
            'oficina_id' => 2,

        ]);

        DB::table('taquillas')->insert([
            'numero_taquilla' => 2,
            'tamanio' => 'Grande',
            'ocupada' => false,
            'estado' => 'funcionando',
            'oficina_id' => 2,

        ]);
        DB::table('taquillas')->insert([
            'numero_taquilla' => 1,
            'tamanio' => 'Mediana',
            'ocupada' => false,
            'estado' => 'funcionando',
            'oficina_id' => 3,

        ]);
    }
}
