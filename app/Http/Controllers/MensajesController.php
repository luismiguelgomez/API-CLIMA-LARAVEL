<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Messages;
use Illuminate\Support\Facades\Auth;

class MensajesController extends Controller
{
    public function index()
    {
        $mensajes = Messages::orderBy('id', 'asc')->get();
        return view('mensajes', compact('mensajes'));
    }

    public function Create(Request $request)
    {
        //Obtenemos el numero del id de la persona
        //dd($request);
        $idUsuario = Auth::id();
        $mensajeNuevo = new Messages();
        $mensajeNuevo->title = $request->input('titulo');
        $mensajeNuevo->description = $request->input('descripcion');
        $mensajeNuevo->user_id = $idUsuario;
        $mensajeNuevo->save();
        return redirect('mensajes'); 
    }
}
