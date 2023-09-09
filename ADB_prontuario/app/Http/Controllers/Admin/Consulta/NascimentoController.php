<?php

namespace App\Http\Controllers\Admin\Consulta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\NascimentoDado;

class NascimentoController extends Controller
{
    public function index($num_registro)
    {
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.nascimento.index', compact('dados'));
    }

    public function salvar(Request $req, $num_registro, $num_USP){
        $request = $req->all();

        NascimentoDado::create([
            'num_registro'=>$num_registro,
            'amamentacao_exclusiva'=>$request['amamentacao_exclusiva'],
            'tempo_amamentacao_exclusiva' =>$request['tempo_amamentacao_exclusiva'],
            'ordem' =>$request['ordem'], 
            'tipo_parto' =>$request['tipo_parto'],
            'peso' =>$request['peso'],
            'vacinacao' =>$request['vacinacao'],
            'num_USP' => $num_USP,
        ]);

        return redirect()->route('nascimento.editar', compact('num_registro', 'num_USP'));
    }

    public function editar($num_registro){
        $dados = NascimentoDado::find($num_registro);
        return view('site.paciente.consulta.nascimento.index', compact('dados'));
    }

    public function atualizar(Request $req, $num_registro, $num_USP)
    {
        $request = $req->except('_token');
        NascimentoDado::where('num_registro',$num_registro)->update([
            'num_registro'=>$num_registro,
            'realiza_nascimento'=>$request['realiza_nascimento'],
            'frequencia_medicoes'=>$request['frequencia_medicoes'],
            'origem_fitas'=>$request['origem_fitas'],
            'contagem_carboidratos'=>$request['contagem_carboidratos'],
            'num_USP' => $num_USP,
        ]);
        return redirect()->route('nascimento.editar', compact('num_registro', 'num_USP'));
    }
}
