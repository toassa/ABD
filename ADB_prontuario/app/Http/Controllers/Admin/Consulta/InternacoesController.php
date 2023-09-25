<?php

namespace App\Http\Controllers\Admin\Consulta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\InternacoesHistorico;

use Illuminate\Support\Facades\Auth;

class InternacoesController extends Controller
{
    public function opcao($num_registro){

        $dados = Paciente::find($num_registro); 
        $primas = InternacoesHistorico::find($num_registro);
        $num_USP = Auth::User()->num_USP;
        if($primas == null){
            return redirect()->route('internacoes.index', compact('num_registro'));
        }else{
            return redirect()->route('internacoes.editar', compact('num_registro', 'num_USP'));
        }
    }

    public function index($num_registro)
    {
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.internacoes.index', compact('dados'));
    }

    public function salvar(Request $req, $num_registro, $num_USP){
        $request = $req->all();

        InternacoesHistorico::create([
            'num_registro'=>$num_registro,
            'frequencia_ultimo_ano'=>$request['frequencia_ultimo_ano'],
            'local'=>$request['local'],
            'motivo'=>$request['motivo'],
            'quantidade_dias'=>$request['quantidade_dias'],
            'fator_desencadeante'=>$request['fator_desencadeante'],
            'num_USP'=>$num_USP,
        ]);

        return redirect()->route('internacoes.editar', compact('num_registro', 'num_USP'));
    }

    public function editar($num_registro){
        $dados = InternacoesHistorico::find($num_registro);
        return view('site.paciente.consulta.internacoes.index', compact('dados'));
    }

    public function atualizar(Request $req, $num_registro, $num_USP)
    {
        $request = $req->except('_token');
        InternacoesHistorico::where('num_registro',$num_registro)->update([
            'num_registro'=>$num_registro,
            'frequencia_ultimo_ano'=>$request['frequencia_ultimo_ano'],
            'local'=>$request['local'],
            'motivo'=>$request['motivo'],
            'quantidade_dias'=>$request['quantidade_dias'],
            'fator_desencadeante'=>$request['fator_desencadeante'],
            'num_USP'=>$num_USP,
        ]);
        return redirect()->route('internacoes.editar', compact('num_registro', 'num_USP'));
    }
}
