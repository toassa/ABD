<?php

namespace App\Http\Controllers\Admin\Consulta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\NascimentoDado;

use Illuminate\Support\Facades\Auth;

class NascimentoController extends Controller
{
    public function opcao($num_registro){

        $dados = Paciente::find($num_registro); 
        $primas = NascimentoDado::find($num_registro);
        $num_USP = Auth::User()->num_USP;
        if($primas == null){
            return redirect()->route('nascimento.index', compact('num_registro'));
        }else{
            return redirect()->route('nascimento.editar', compact('num_registro', 'num_USP'));
        }
    }

    public function index($num_registro)
    {
        $page = 'cadastrar';
        $dados = Paciente::find($num_registro);
        $dados_paciente = Paciente::find($num_registro);
        return view('site.paciente.consulta.nascimento.index', compact('dados','dados_paciente', 'page'));
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
        $page = 'editar';
        $dados = NascimentoDado::find($num_registro);
        $dados_paciente = Paciente::find($num_registro);
        return view('site.paciente.consulta.nascimento.index', compact('dados','dados_paciente', 'page'));
    }

    public function atualizar(Request $req, $num_registro, $num_USP)
    {
        $request = $req->except('_token');
        NascimentoDado::where('num_registro',$num_registro)->update([
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
}
