<?php

namespace Database\Seeders;

use App\Models\Productos;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Productos::create([
            'codigo' => 'PX5215SFMAS',
            'descripcion' => 'Set de ajedrez magnético portátil de 25cm x 25cm',
            'cantidad' => 64,
            'precio' => 521.99
        ]);

        Productos::create([
            'codigo' => 'AE6121KTAND',
            'descripcion' => 'Celular Xiaomi Redmi Note 9s',
            'cantidad' => 1200,
            'precio' => 5399.99
        ]);

        Productos::create([
            'codigo' => 'WE0420EDYO',
            'descripcion' => 'Excelente producto para todas las edades, entretenimiento garantizado',
            'cantidad' => 2563,
            'precio' => 419.99
        ]);
    }
}
