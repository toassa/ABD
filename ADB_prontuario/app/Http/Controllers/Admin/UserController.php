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

    public function cadastrar(){
        return view('site.usuario.cadastrar');
    }

    public function salvar(Request $req){
        $dados = $req->all();
        // dd($dados);
        User::create($dados);
        return redirect()->route('users.listar');
    }

    public function listar(){
        $rows = User::all();
        return view('site.usuario.listar', compact('rows'));
    }

    public function buscar($name){
        $rows = User::where('name', $name);
        // dd($rows);
        return view('site.usuario.listar', compact('rows'));
    }
}
