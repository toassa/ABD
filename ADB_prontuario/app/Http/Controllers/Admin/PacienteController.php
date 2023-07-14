<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
