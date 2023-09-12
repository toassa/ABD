<?php

namespace App\Http\Controllers\Admin\Consulta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\Dieta;

class DietaController extends Controller
{
    public function index($num_registro)
    {
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.dieta.index', compact('dados'));
    }

    public function salvar(Request $req, $num_registro, $num_USP){
        $request = $req->all();

        Dieta::create([
            'num_registro'=>$num_registro,
            'realiza'=>$request['realiza'],
            'tipo_dieta'=>$request['tipo_dieta'],
            'segue_dieta'=>$request['segue_dieta'],
            'dificuldade_dieta'=>$request['dificuldade_dieta'],
            'orientador'=>$request['orientador'],
            'consulta_nutricionista'=>$request['consulta_nutricionista'],
            'frequencia_nutricionista'=>$request['frequencia_nutricionista'],
            'consome_dieteticos'=>$request['consome_dieteticos'],
            'produtos_dieteticos'=>$request['produtos_dieteticos'],
            'num_USP'=>$num_USP,
        ]);

        return redirect()->route('dieta.editar', compact('num_registro', 'num_USP'));
    }

    public function editar($num_registro){
        $dados = Dieta::find($num_registro);
        return view('site.paciente.consulta.dieta.index', compact('dados'));
    }

    public function atualizar(Request $req, $num_registro, $num_USP)
    {
        $request = $req->except('_token');
        Dieta::where('num_registro',$num_registro)->update([
            'num_registro'=>$num_registro,
            'realiza'=>$request['realiza'],
            'tipo_dieta'=>$request['tipo_dieta'],
            'segue_dieta'=>$request['segue_dieta'],
            'dificuldade_dieta'=>$request['dificuldade_dieta'],
            'orientador'=>$request['orientador'],
            'consulta_nutricionista'=>$request['consulta_nutricionista'],
            'frequencia_nutricionista'=>$request['frequencia_nutricionista'],
            'consome_dieteticos'=>$request['consome_dieteticos'],
            'produtos_dieteticos'=>$request['produtos_dieteticos'],
            'num_USP'=>$num_USP,
        ]);
        return redirect()->route('dieta.editar', compact('num_registro', 'num_USP'));
    }
}
