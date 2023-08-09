<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\Admin\Auth;
use Illuminate\Console\View\Components\Alert;

use App\Models\Paciente;
use App\Models\PrimeiroDiagnostico;


class PrimeiraConsultaController extends Controller
{
    public function menu($num_registro){
        $dados = Paciente::find($num_registro);
        return view('site.paciente.menu', compact('dados'));
    }

    public function menu_atendimento($num_registro){
        $dados = Paciente::find($num_registro);
        return view('site.paciente.menu_atendimento', compact('dados'));
    }

    public function primeiro_atendimento($num_registro){
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.cadastrar', compact('dados'));
    }
}
