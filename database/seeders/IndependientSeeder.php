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
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('independients')->insert([
            'categorias' => 'Proveedor',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('independients')->insert([
            'categorias' => 'Funcionario Interno',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
