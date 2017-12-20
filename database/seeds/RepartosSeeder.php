<?php

use Illuminate\Database\Seeder;

class RepartosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('repartos')->insert([
            'clave_repartidor' => '1234',
            'clave_usuario' => '4321',
            'usuario_id' => '1',
            'empresa_id' => '3',
            'oficina_id' => '3',
            'taquilla_id' => '6',
        ]);

        DB::table('repartos')->insert([
            'clave_repartidor' => '5678',
            'clave_usuario' => '8765',
            'usuario_id' => '2',
            'empresa_id' => '2',
            'oficina_id' => '2',
            'taquilla_id' => '4',
        ]);

        DB::table('repartos')->insert([
            'clave_repartidor' => '9012',
            'clave_usuario' => '2109',
            'usuario_id' => '3',
            'empresa_id' => '1',
            'oficina_id' => '1',
            'taquilla_id' => '2',
        ]);

        DB::table('repartos')->insert([
            'clave_repartidor' => '3456',
            'clave_usuario' => '6543',
            'usuario_id' => '4',
            'empresa_id' => '2',
            'oficina_id' => '2',
            'taquilla_id' => '5',
        ]);
    }
}
