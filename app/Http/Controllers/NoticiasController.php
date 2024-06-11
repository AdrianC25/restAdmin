<?php

namespace App\Http\Controllers;

use App\Models\Noticias;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function index()
    {
        $noticias = Noticias::all();
        return view('novedades', compact('noticias'));
    }

    public function addNoticia(Request $request)
    {
        $new_noticia = new Noticias;
        $new_noticia->titulo = $request->titulo;
        $new_noticia->detalle = $request->detalle;
        $new_noticia->save();

        return Response()->json(['nueva_noticia' => $new_noticia]);
    }
}
