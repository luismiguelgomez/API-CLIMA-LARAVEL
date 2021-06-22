<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class AdminUserController extends Controller
{
    public function updateAdmin()
    {
        $usuarios = Users::all();
        return view('usuarios', compact('usuarios'));
    }

    public function formAdmin(Request $request) 
    {
        $formUser = $request->input('btn-actualizar-usuario');
        $actualizarUsuario = Users::find($formUser);
        $actualizarUsuario->name = $request->input('name'.$formUser);
        $actualizarUsuario->password = $request->input('pass'.$formUser);
        $actualizarUsuario->type_user = $request->input('type_user'.$formUser);
        $actualizarUsuario->save();
        return redirect('/editarUsuarios');
    }
}
