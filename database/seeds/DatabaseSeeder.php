<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminTableSeeder::class);
        $this->call(SuscripcionesSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(OficinasSeeder::class);
        $this->call(TaquillasSeeder::class);
        $this->call(EmpresasRepartoSeeder::class);
        $this->call(RepartosSeeder::class);
    }
}