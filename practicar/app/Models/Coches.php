<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coches extends Model
{
    use HasFactory;

    protected $fillable = [
        "nombre",
        "color",
        "descripcion",
        "conductor_id"
    ];
    public function conductor(){
        return $this->belongsTo(Conductores::class);
    }
}
