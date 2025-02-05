<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            ['name' => 'Tecnología', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hogar', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Deportes', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ropa', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Juguetes', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
