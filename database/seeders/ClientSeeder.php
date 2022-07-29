<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'nombre' => 'Felipe',
            'apellido' => 'Garcia',
            'cedula' => '1098697603',
            'email' => 'felipe901230@gmail.com',
            'pais' => 'Belize',
            'direccion' => 'cra 21 # 123',
            'celular' => 3178053548,
            'id_independiet' => 1,
            'creat'
        ]);
    }
}
