<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('site.index');
    }

    public function opcoes_users(){
        return view('site.usuario.index');
    }

    public function opcoes_pacientes(){
        return view('site.paciente.index');
    }
}
