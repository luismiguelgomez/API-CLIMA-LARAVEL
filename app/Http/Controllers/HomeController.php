<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index() {
        $num_user_list = User::all();
        $num_user = $num_user_list->count();
        if ($num_user  < 1) {
            User::create([
                'name' => 'Admin',
                'email' => 'Admin@system.com',
                'type_user' => 1,
                'password' => Hash::make('Admin1234*'),
            ]);

            $usuarioAdmin = Users::find(1);
            $usuarioAdmin->type_user = 1;
            $usuarioAdmin->save();
        }

        return view('auth.login');
    }
}
