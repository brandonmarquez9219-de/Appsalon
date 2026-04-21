<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicioSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('servicios')->insert([
            ['nombre' => 'Corte de cabello', 'precio' => 15000],
            ['nombre' => 'Manicure', 'precio' => 20000],
            ['nombre' => 'Pedicure', 'precio' => 25000],
            ['nombre' => 'Tinte', 'precio' => 80000],
            ['nombre' => 'Peinado', 'precio' => 30000],
        ]);
    }
}