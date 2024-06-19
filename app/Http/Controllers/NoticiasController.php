<?php

namespace App\Http\Controllers;

use App\Models\Noticias;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function welcome()
    {
        $noticias = Noticias::all();
        return view('welcome', compact('noticias'));
    }

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

    public function editarNoticia($idNoticia)
    {
        $noticia_elejida = Noticias::where('id', $idNoticia)->first();

        return Response()->json(['noticia' => $noticia_elejida]);
    }

    public function guardarEditarNoticia(Request $request)
    {
        $idNoticia = $request->id;
        $noticia_elejida = Noticias::find($idNoticia);
        $noticia_elejida->titulo = $request->titulo;
        $noticia_elejida->detalle = $request->detalle;
        $noticia_elejida->save();

        return Response()->json(['noticia_elejida' => $noticia_elejida]);
    }

    public function eliminarNoticia($idNoticia)
    {
        $producto_elejido = Noticias::find($idNoticia)->delete();

        return Response()->json(['noticia' => 'Novedad Eliminada']);
    }
}
