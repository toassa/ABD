<?php

namespace App\Http\Controllers\Admin\Consulta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\Admin\Auth;
use Illuminate\Console\View\Components\Alert;

use App\Models\Paciente;
use App\Models\PrimeiroDiagnostico;

class ExameFisicosController extends Controller
{
    
    public function index($num_registro)
    {
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.exames_fisicos.index', compact('dados'));
    }

    

}
