<?php

namespace App\Http\Controllers\Admin\Consulta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\AutomonitorizacaoGlicemia;

class AutomonitorizacaoController extends Controller
{
    public function index($num_registro)
    {
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.automonitorizacao.index', compact('dados'));
    }

    public function salvar(Request $req, $num_registro, $num_USP){
        $request = $req->all();

        AutomonitorizacaoGlicemia::create([
            'num_registro'=>$num_registro,
            'realiza_automonitorizacao'=>$request['realiza_automonitorizacao'],
            'frequencia_medicoes'=>$request['frequencia_medicoes'],
            'origem_fitas'=>$request['origem_fitas'],
            'contagem_carboidratos'=>$request['contagem_carboidratos'],
            'num_USP' => $num_USP,
        ]);

        return redirect()->route('automonitorizacao.editar', compact('num_registro', 'num_USP'));
    }

    public function editar($num_registro){
        $dados = AutomonitorizacaoGlicemia::find($num_registro);
        return view('site.paciente.consulta.automonitorizacao.index', compact('dados'));
    }

    public function atualizar(Request $req, $num_registro, $num_USP)
    {
        $request = $req->except('_token');
        AutomonitorizacaoGlicemia::where('num_registro',$num_registro)->update([
            'num_registro'=>$num_registro,
            'realiza_automonitorizacao'=>$request['realiza_automonitorizacao'],
            'frequencia_medicoes'=>$request['frequencia_medicoes'],
            'origem_fitas'=>$request['origem_fitas'],
            'contagem_carboidratos'=>$request['contagem_carboidratos'],
            'num_USP' => $num_USP,
        ]);
        return redirect()->route('automonitorizacao.editar', compact('num_registro', 'num_USP'));
    }
}
