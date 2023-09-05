<?php

namespace App\Http\Controllers\Admin\Consulta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\Diagnostico;

class DiagnosticoAtualController extends Controller
{
    public function index($num_registro)
    {
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.diagnostico_atual.index', compact('dados'));
    }

    public function salvar(Request $req, $num_registro, $num_USP){
        $request = $req->all();

        Diagnostico::create([
            'num_registro'=>$num_registro,
            'sintomas'=>$request['sintomas'],
            'libido_alterado'=>$request['libido_alterado'],
            'num_USP' => $num_USP,
        ]);

        return redirect()->route('diagnostico_atual.editar', compact('num_registro', 'num_USP'));
    }

    public function editar($num_registro){
        $dados = Diagnostico::find($num_registro);
        return view('site.paciente.consulta.diagnostico_atual.index', compact('dados'));
    }

    public function atualizar(Request $req, $num_registro, $num_USP)
    {
        $request = $req->except('_token');
        Paciente::where('num_registro',$num_registro)->update([
            'num_registro'=>$num_registro,
            'sintomas'=>$request['sintomas'],
            'libido_alterado'=>$request['libido_alterado'],
            'num_USP' => $num_USP,
        ]);
        return redirect()->route('pacientes.listar');
    }
}
