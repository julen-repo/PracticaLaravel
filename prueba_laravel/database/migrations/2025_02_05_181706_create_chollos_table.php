<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chollos', function (Blueprint $table) {
            $table->id(); // Clave primaria auto-incrementada
            $table->string('titulo'); // Título del chollo
            $table->text('descripcion'); // Descripción del chollo
            $table->string('url'); // Enlace al chollo externo
            $table->foreignId('categoria_id')->constrained('categorias')->onDelete('cascade'); // Clave foránea vinculada a categorías
            $table->integer('puntuacion'); // Número entero para valorar el chollo
            $table->decimal('precio', 10, 2); // Precio original del chollo
            $table->decimal('precio_descuento', 10, 2); // Precio con descuento
            $table->boolean('disponible'); // Indica si está disponible o no
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chollos');
    }
};
