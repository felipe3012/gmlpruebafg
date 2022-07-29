<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class IndependientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('independients')->insert([
            'categorias' => 'Cliente',
        ]);
        DB::table('independients')->insert([
            'categorias' => 'Proveedor',
        ]);
        DB::table('independients')->insert([
            'categorias' => 'Funcionario Interno',
        ]);
    }
}
