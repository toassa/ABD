<?php

namespace App\Http\Controllers\Admin\Consulta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\ExameFisico;

class ExamesFisicosController extends Controller
{
    public function index($num_registro)
    {
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.exames_fisicos.index', compact('dados'));
    }

    public function salvar(Request $req, $num_registro, $num_USP){
        $request = $req->all();
        dd($request['apecto_geral']);
        ExameFisico::create([
            'num_registro'=>$num_registro,
            'peso' => $request['peso'],
            'altura' => $request['altura'],
            'pressao_arterial' => $request['pressao_arterial'],
            'pulso_arterial' => $request['pulso_arterial'],
            'frequencia_cardiaca' => $request['frequencia_cardiaca'],
            'apecto_geral' => $request['apecto_geral'],
            'cabeca_pescoco' => $request['cabeca_pescoco'],
            'circunferencia_quadril' => $request['circunferencia_quadril'],
            'circunferencia_pescoco' => $request['circunferencia_pescoco'],
            'circunferencia_abdominal' => $request['circunferencia_abdominal'],
            'sistema_venoso' => $request['sistema_venoso'],
            'sistema_digestivo' => $request['sistema_digestivo'],
            'sistema_respiratorio' => $request['sistema_respiratorio'],
            'sistema_cardiovascular' => $request['sistema_cardiovascular'],
            'consideracoes_outros_sistemas' => $request['consideracoes_outros_sistemas'],
            'num_USP'=>$num_USP,
        ]);

        return redirect()->route('exames_fisicos.editar', compact('num_registro', 'num_USP'));
    }

    public function editar($num_registro){
        $dados = ExameFisico::find($num_registro);
        return view('site.paciente.consulta.exames_fisicos.index', compact('dados'));
    }

    public function atualizar(Request $req, $num_registro, $num_USP)
    {
        $request = $req->except('_token');
        ExameFisico::where('num_registro',$num_registro)->update([
            'num_registro'=>$num_registro,
            'peso' => $request['peso'],
            'altura' => $request['altura'],
            'pressao_arterial' => $request['pressao_arterial'],
            'pulso_arterial' => $request['pulso_arterial'],
            'frequencia_cardiaca' => $request['frequencia_cardiaca'],
            'apecto_geral' => $request['apecto_geral'],
            'cabeca_pescoco' => $request['cabeca_pescoco'],
            'circunferencia_quadril' => $request['circunferencia_quadril'],
            'circunferencia_pescoco' => $request['circunferencia_pescoco'],
            'circunferencia_abdominal' => $request['circunferencia_abdominal'],
            'sistema_venoso' => $request['sistema_venoso'],
            'sistema_digestivo' => $request['sistema_digestivo'],
            'sistema_respiratorio' => $request['sistema_respiratorio'],
            'sistema_cardiovascular' => $request['sistema_cardiovascular'],
            'consideracoes_outros_sistemas' => $request['consideracoes_outros_sistemas'],
            'num_USP' => $num_USP,
        ]);
        return redirect()->route('exames_fisicos.editar', compact('num_registro', 'num_USP'));
    }
}
