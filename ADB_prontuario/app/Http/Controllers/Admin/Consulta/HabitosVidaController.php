<?php

namespace App\Http\Controllers\Admin\Consulta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\HabitosVida;

use Illuminate\Support\Facades\Auth;

class HabitosVidaController extends Controller
{   
    public function opcao($num_registro){

        $dados = Paciente::find($num_registro); 
        $primas = HabitosVida::find($num_registro);
        $num_USP = Auth::User()->num_USP;
        if($primas == null){
            $tipo = 'cadastrar';
            return redirect()->route('habitos_vida.index', compact('tipo', 'num_registro'));
        }else{
            $tipo = 'editar';
            return redirect()->route('habitos_vida.editar', compact('tipo', 'num_registro', 'num_USP'));
        }
    }

    public function index($tipo, $num_registro)
    {
        $dados = Paciente::find($num_registro);
        $dados_paciente = Paciente::find($num_registro);
        return view('site.paciente.consulta.habitos_vida.index', compact('dados','dados_paciente', 'tipo'));
    }

    public function salvar(Request $req, $num_registro, $num_USP){
        $request = $req->all();
        $dados_paciente = Paciente::find($num_registro);
        $tipo = 'editar';
        HabitosVida::create([
            'num_registro'=>$num_registro,
            'sobre_etilismo'=>$request['sobre_etilismo'],
            'periodo_quantia_etilismo'=>$request['periodo_quantia_etilismo'],
            'classificacao_etilismo'=>$request['classificacao_etilismo'],
            'sobre_tabagismo'=>$request['sobre_tabagismo'],
            'quantia_tabagismo'=>$request['quantia_tabagismo'],
            'sobre_drogas_ilicitas'=>$request['sobre_drogas_ilicitas'],
            'quais_periodo_drogas'=>$request['quais_periodo_drogas'],
            'sobre_anabolizantes'=>$request['sobre_anabolizantes'],
            'num_USP' => $num_USP,
        ]);

        return redirect()->route('habitos_vida.editar', compact('dados_paciente', 'num_USP', 'tipo'));
    }

    public function editar($tipo, $num_registro){
        $dados = HabitosVida::find($num_registro);
        $dados_paciente = Paciente::find($num_registro);
        return view('site.paciente.consulta.habitos_vida.index', compact('dados','dados_paciente', 'tipo'));
    }

    public function atualizar(Request $req, $num_registro, $num_USP)
    {
        $request = $req->except('_token');
        HabitosVida::where('num_registro',$num_registro)->update([
            'num_registro'=>$num_registro,
            'sobre_etilismo'=>$request['sobre_etilismo'],
            'periodo_quantia_etilismo'=>$request['periodo_quantia_etilismo'],
            'classificacao_etilismo'=>$request['classificacao_etilismo'],
            'sobre_tabagismo'=>$request['sobre_tabagismo'],
            'quantia_tabagismo'=>$request['quantia_tabagismo'],
            'sobre_drogas_ilicitas'=>$request['sobre_drogas_ilicitas'],
            'quais_periodo_drogas'=>$request['quais_periodo_drogas'],
            'sobre_anabolizantes'=>$request['sobre_anabolizantes'],
            'num_USP' => $num_USP,
        ]);
        return redirect()->route('habitos_vida.editar', compact('num_registro', 'num_USP'));
    }
}
