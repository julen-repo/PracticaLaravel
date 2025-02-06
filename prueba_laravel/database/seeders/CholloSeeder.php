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
                'categoria_id' => 1, // Tecnología
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
                'categoria_id' => 1, // Tecnología
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
                'categoria_id' => 3, // Deportes
                'puntuacion' => 5,
                'precio' => 120.00,
                'precio_descuento' => 89.99,
                'disponible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Laptop HP Pavilion 15',
                'descripcion' => 'Laptop de alto rendimiento con procesador Intel i7.',
                'url' => 'https://ejemplo.com/hp-pavilion-15',
                'categoria_id' => 1, // Tecnología
                'puntuacion' => 4,
                'precio' => 799.99,
                'precio_descuento' => 699.99,
                'disponible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Auriculares Bose QuietComfort 35',
                'descripcion' => 'Auriculares inalámbricos con cancelación de ruido.',
                'url' => 'https://ejemplo.com/bose-qc35',
                'categoria_id' => 1, // Tecnología
                'puntuacion' => 5,
                'precio' => 329.99,
                'precio_descuento' => 279.99,
                'disponible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Cámara GoPro Hero 10',
                'descripcion' => 'Cámara de acción resistente al agua con grabación en 4K.',
                'url' => 'https://ejemplo.com/gopro-hero-10',
                'categoria_id' => 1, // Tecnología
                'puntuacion' => 4,
                'precio' => 399.99,
                'precio_descuento' => 349.99,
                'disponible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Teclado mecánico Corsair K95',
                'descripcion' => 'Teclado RGB mecánico para gamers.',
                'url' => 'https://ejemplo.com/corsair-k95',
                'categoria_id' => 1, // Tecnología
                'puntuacion' => 5,
                'precio' => 169.99,
                'precio_descuento' => 149.99,
                'disponible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Mochila para laptop Lenovo',
                'descripcion' => 'Mochila resistente con compartimentos para laptop y accesorios.',
                'url' => 'https://ejemplo.com/lenovo-mochila',
                'categoria_id' => 1, // Tecnología
                'puntuacion' => 4,
                'precio' => 59.99,
                'precio_descuento' => 49.99,
                'disponible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Barra de sonido Sony HT-X8500',
                'descripcion' => 'Sistema de sonido envolvente con subwoofer incorporado.',
                'url' => 'https://ejemplo.com/sony-soundbar',
                'categoria_id' => 1, // Tecnología
                'puntuacion' => 4,
                'precio' => 249.99,
                'precio_descuento' => 199.99,
                'disponible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Funda para cámara Canon EOS 5D',
                'descripcion' => 'Funda resistente al agua para tu cámara Canon.',
                'url' => 'https://ejemplo.com/canon-eos-5d-funda',
                'categoria_id' => 1, // Tecnología
                'puntuacion' => 4,
                'precio' => 39.99,
                'precio_descuento' => 29.99,
                'disponible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Aspiradora robot Roomba i7',
                'descripcion' => 'Aspiradora inteligente con mapeo y limpieza autónoma.',
                'url' => 'https://ejemplo.com/roomba-i7',
                'categoria_id' => 2, // Hogar
                'puntuacion' => 5,
                'precio' => 499.99,
                'precio_descuento' => 449.99,
                'disponible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Cafetera Nespresso Vertuo',
                'descripcion' => 'Cafetera de cápsulas con tecnología de extracción avanzada.',
                'url' => 'https://ejemplo.com/nespresso-vertuo',
                'categoria_id' => 2, // Hogar
                'puntuacion' => 5,
                'precio' => 149.99,
                'precio_descuento' => 119.99,
                'disponible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Pantalones deportivos Adidas',
                'descripcion' => 'Pantalones cómodos para hacer ejercicio.',
                'url' => 'https://ejemplo.com/adidas-pantalones',
                'categoria_id' => 4, // Ropa
                'puntuacion' => 4,
                'precio' => 39.99,
                'precio_descuento' => 29.99,
                'disponible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Cargador inalámbrico Anker',
                'descripcion' => 'Cargador rápido inalámbrico para dispositivos móviles.',
                'url' => 'https://ejemplo.com/anker-cargador',
                'categoria_id' => 1, // Tecnología
                'puntuacion' => 4,
                'precio' => 29.99,
                'precio_descuento' => 19.99,
                'disponible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
