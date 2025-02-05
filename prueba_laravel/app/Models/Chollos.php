<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chollos extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'chollos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo',
        'descripcion',
        'url',
        'categoria_id',
        'puntuacion',
        'precio',
        'precio_descuento',
        'disponible',
    ];

    /**
     * Get the category associated with the deal.
     */
    public function categoria()
    {
        return $this->belongsTo(Categorias::class, 'categoria_id');
    }
}
