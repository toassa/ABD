<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function cadastrar(){
        User::all();
        return view('site.usuario.adicionar');
    }
}
