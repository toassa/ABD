<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Paciente;

class PacienteController extends Controller
{
    public function pesquisar(){
        return view('site.paciente.pesquisar');
    }

    public function index(){
        return view('site.paciente.index');
    }

    public function cadastrar(){
        return view('site.paciente.cadastrar');
    }

    public function buscar(Request $req, $nome){
        $dados = $req->Paciente::where('name', $nome);
    }
}
