<?php

namespace App\Http\Controllers;

use App\Models\Coches;
use Illuminate\Http\Request;

class CochesController extends Controller
{
    public function listarCoches(){
        $coches= Coches::all();
        return view("principal",compact("coches"));
    }
}
