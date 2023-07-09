<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index(){
        return view('site.usuario.index');
    }

    public function listar(){
        $usuario_dados = User::all();
        return view('site.usuario.listar', compact('usuario_dados'));
    }

    public function cadastrar(){
        return view('site.usuario.cadastrar');
    }

    public function salvar(request $Req){

    }
}
