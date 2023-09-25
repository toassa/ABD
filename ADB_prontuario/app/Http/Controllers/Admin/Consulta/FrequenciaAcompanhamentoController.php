<?php

namespace App\Http\Controllers\Admin\Consulta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\FrequenciaAcompanhamento;

use Illuminate\Support\Facades\Auth;

class FrequenciaAcompanhamentoController extends Controller
{
    public function opcao($num_registro){

        $dados = Paciente::find($num_registro); 
        $primas = FrequenciaAcompanhamento::find($num_registro);
        $num_USP = Auth::User()->num_USP;
        if($primas == null){
            return redirect()->route('frequencia_acompanhamento.index', compact('num_registro'));
        }else{
            return redirect()->route('frequencia_acompanhamento.editar', compact('num_registro', 'num_USP'));
        }
    }

    public function index($num_registro)
    {
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.frequencia_acompanhamento.index', compact('dados'));
    }

    public function salvar(Request $req, $num_registro, $num_USP){
        $request = $req->all();

        FrequenciaAcompanhamento::create([
            'num_registro'=>$num_registro,
            'dentista'=>$request['dentista'],
            'cardiologista'=>$request['cardiologista'],
            'oftalmologista'=>$request['oftalmologista'],
            'urologista'=>$request['urologista'],
            'exame_toque_urologista'=>$request['exame_toque_urologista'],
            'num_USP' => $num_USP,
        ]);

        return redirect()->route('frequencia_acompanhamento.editar', compact('num_registro', 'num_USP'));
    }

    public function editar($num_registro){
        $dados = FrequenciaAcompanhamento::find($num_registro);
        return view('site.paciente.consulta.frequencia_acompanhamento.index', compact('dados'));
    }

    public function atualizar(Request $req, $num_registro, $num_USP)
    {
        $request = $req->except('_token');
        FrequenciaAcompanhamento::where('num_registro',$num_registro)->update([
            'num_registro'=>$num_registro,
            'dentista'=>$request['dentista'],
            'cardiologista'=>$request['cardiologista'],
            'oftalmologista'=>$request['oftalmologista'],
            'urologista'=>$request['urologista'],
            'exame_toque_urologista'=>$request['exame_toque_urologista'],
            'num_USP' => $num_USP,
        ]);
        return redirect()->route('frequencia_acompanhamento.editar', compact('num_registro', 'num_USP'));
    }

}
