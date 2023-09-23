<?php

namespace App\Http\Controllers\Admin\Consulta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\ExercicioFisico;

use Illuminate\Support\Facades\Auth;

class ExerciciosFisicosController extends Controller
{
    public function opcao($num_registro){

        $dados = Paciente::find($num_registro); 
        $primas = ExercicioFisico::find($num_registro);
        $num_USP = Auth::User()->num_USP;
        if($primas == null){
            return redirect()->route('exercicios_fisicos.index', compact('num_registro'));
        }else{
            return redirect()->route('exercicios_fisicos.editar', compact('num_registro', 'num_USP'));
        }
        //aqui use Illuminate\Support\Facades\Auth;
    }

    public function index($num_registro)
    {
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.exercicios_fisicos.index', compact('dados'));
    }

    public function salvar(Request $req, $num_registro, $num_USP){
        $request = $req->all();

        ExercicioFisico::create([
            'num_registro'=>$num_registro,
            'exercicios_rotineiros'=>$request['exercicios_rotineiros'],
            'tipo_atividades'=>$request['tipo_atividades'],
            'frequencia_periodo'=>$request['frequencia_periodo'],
            'num_USP'=>$num_USP,
        ]);

        return redirect()->route('exercicios_fisicos.editar', compact('num_registro', 'num_USP'));
    }

    public function editar($num_registro){
        $dados = ExercicioFisico::find($num_registro);
        return view('site.paciente.consulta.exercicios_fisicos.index', compact('dados'));
    }

    public function atualizar(Request $req, $num_registro, $num_USP)
    {
        $request = $req->except('_token');
        ExercicioFisico::where('num_registro',$num_registro)->update([
            'num_registro'=>$num_registro,
            'exercicios_rotineiros'=>$request['exercicios_rotineiros'],
            'tipo_atividades'=>$request['tipo_atividades'],
            'frequencia_periodo'=>$request['frequencia_periodo'],
            'num_USP' => $num_USP,
        ]);
        return redirect()->route('exercicios_fisicos.editar', compact('num_registro', 'num_USP'));
    }
}
