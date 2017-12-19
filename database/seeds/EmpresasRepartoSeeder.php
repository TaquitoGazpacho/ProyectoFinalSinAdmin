<?php

use Illuminate\Database\Seeder;

class EmpresasRepartoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresa_repartos')->insert([
            'nombre' => 'MRW',
            'email' => 'mrw@mrw.com',
            'telefono' => '666777888',
            'nif' => 'A09876543',
            'password' => bcrypt('zubiri'),

        ]);
        DB::table('empresa_repartos')->insert([
            'nombre' => 'Seur',
            'email' => 'seur@seur.com',
            'telefono' => '999888777',
            'nif' => 'B72056291',
            'password' => bcrypt('zubiri'),

        ]);
        DB::table('empresa_repartos')->insert([
            'nombre' => 'Tourline Express',
            'email' => 'tourline@tourline.com',
            'telefono' => '111222333',
            'nif' => 'C83926572',
            'password' => bcrypt('zubiri'),

        ]);
    }
}
