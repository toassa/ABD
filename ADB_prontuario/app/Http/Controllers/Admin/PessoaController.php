<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pessoa;

class PessoaController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function opcoes(){
        return view('admin.opcoes.index');
    }

    public function opcoes_pacientes(){
        return view('admin.opcoes.pacientes');
    }

    public function opcoes_pessoas(){
        return view('admin.opcoes.pessoas');
    }
}
