<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Articulo;

class TiendaViewController extends Controller
{

    public function index(){
        return Inertia::render('PrincipalTienda', [
            'articulos' => Articulo::get()
        ]);
    }
}
