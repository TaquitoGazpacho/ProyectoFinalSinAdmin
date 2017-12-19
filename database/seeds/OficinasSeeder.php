<?php

use Illuminate\Database\Seeder;

class OficinasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oficinas')->insert([
            'ciudad' => 'Gijon',
            'calle' => 'Mi casa',
            'num_calle' => '23',

        ]);
        DB::table('oficinas')->insert([
            'ciudad' => 'Madrid',
            'calle' => 'Calle sdfs',
            'num_calle' => '2',

        ]);
        DB::table('oficinas')->insert([
            'ciudad' => 'Santander',
            'calle' => 'Calle ghjhj',
            'num_calle' => '45',

        ]);
    }
}
