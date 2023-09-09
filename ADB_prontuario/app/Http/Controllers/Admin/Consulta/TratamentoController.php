<?php

namespace App\Http\Controllers\Admin\Consulta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\Tratamento;

class TratamentoController extends Controller
{
    public function index($num_registro)
    {
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.tratamento.index', compact('dados'));
    }

    public function salvar(Request $req, $num_registro, $num_USP){
        $request = $req->all();
        // dd($num_USP);
        Tratamento::create([
            'num_registro'=>$num_registro,
            'medicamento_diabetes'=>$request['medicamento_diabetes'],
            'uso_insulina'=>$request['uso_insulina'],
            'tipos_insulinas'=>$request['tipos_insulinas'],
            'nome_insulina'=>$request['nome_insulina'],
            'frequencia_insulina'=>$request['frequencia_insulina'],
            'dose_insulina'=>$request['dose_insulina'],
            'origem_insulinas'=>$request['origem_insulinas'],
            'utensilho'=>$request['utensilho'],
            'origem_utensilho'=>$request['origem_utensilho'],
            'reuso_seringas_insulina'=>$request['reuso_seringas_insulina'],
            'quantia_reuso_seringas'=>$request['quantia_reuso_seringas'],
            'aderencia'=>$request['aderencia'],
            'num_USP'=>$num_USP,
        ]);

        return redirect()->route('tratamento.editar', compact('num_registro', 'num_USP'));
    }

    public function editar($num_registro){
        $dados = Tratamento::find($num_registro);
        return view('site.paciente.consulta.tratamento.index', compact('dados'));
    }

    public function atualizar(Request $req, $num_registro, $num_USP)
    {
        $request = $req->except('_token');
        Tratamento::where('num_registro',$num_registro)->update([
            'num_registro'=>$num_registro,
            'medicamento_diabetes'=>$request['medicamento_diabetes'],
            'uso_insulina'=>$request['uso_insulina'],
            'tipos_insulinas'=>$request['tipos_insulinas'],
            'nome_insulina'=>$request['nome_insulina'],
            'frequencia_insulina'=>$request['frequencia_insulina'],
            'dose_insulina'=>$request['dose_insulina'],
            'origem_insulinas'=>$request['origem_insulinas'],
            'utensilho'=>$request['utensilho'],
            'origem_utensilho'=>$request['origem_utensilho'],
            'reuso_seringas_insulina'=>$request['reuso_seringas_insulina'],
            'quantia_reuso_seringas'=>$request['quantia_reuso_seringas'],
            'aderencia'=>$request['aderencia'],
            'num_USP' => $num_USP,
        ]);
        return redirect()->route('tratamento.editar', compact('num_registro', 'num_USP'));
    }
}