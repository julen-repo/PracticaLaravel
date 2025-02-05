<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CholloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('chollos')->insert([
            [
                'titulo' => 'Smartphone Xiaomi Redmi Note 12',
                'descripcion' => 'Un potente smartphone con gran batería y pantalla AMOLED.',
                'url' => 'https://ejemplo.com/redmi-note-12',
                'categoria_id' => 1, // Asegúrate de que la categoría existe
                'puntuacion' => 5,
                'precio' => 299.99,
                'precio_descuento' => 249.99,
                'disponible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Silla Gaming Razer',
                'descripcion' => 'Silla ergonómica con reposabrazos ajustable.',
                'url' => 'https://ejemplo.com/silla-razer',
                'categoria_id' => 2,
                'puntuacion' => 4,
                'precio' => 199.99,
                'precio_descuento' => 149.99,
                'disponible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Zapatillas deportivas Nike',
                'descripcion' => 'Zapatillas de running ligeras y transpirables.',
                'url' => 'https://ejemplo.com/nike-running',
                'categoria_id' => 3,
                'puntuacion' => 5,
                'precio' => 120.00,
                'precio_descuento' => 89.99,
                'disponible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
