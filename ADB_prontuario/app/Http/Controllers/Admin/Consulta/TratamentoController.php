<?php

namespace App\Http\Controllers\Admin\Consulta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\Tratamento;

use Illuminate\Support\Facades\Auth;

class TratamentoController extends Controller
{
    public function opcao($num_registro){

        $dados = Paciente::find($num_registro); 
        $primas = Tratamento::find($num_registro);
        $num_USP = Auth::User()->num_USP;
        if($primas == null){
            return redirect()->route('tratamento.index', compact('num_registro'));
        }else{
            return redirect()->route('tratamento.editar', compact('num_registro', 'num_USP'));
        }
    }

    public function index($num_registro)
    {
        $page = 'cadastrar';
        $dados = Paciente::find($num_registro);
        $dados_paciente = Paciente::find($num_registro);
        return view('site.paciente.consulta.tratamento.index', compact('dados','dados_paciente', 'page'));
    }

    public function salvar(Request $req, $num_registro, $num_USP){
        $request = $req->all();
        
        $jsonData = $req->input('tipos_insulinas');
        $tipos_insulinas = json_encode($jsonData);
        
        $jsonData = $req->input('origem_utensilho');
        $origem_utensilho = json_encode($jsonData);
        
        $jsonData = $req->input('aderencia');
        $aderencia = json_encode($jsonData);

        Tratamento::create([
            'num_registro'=>$num_registro,
            'medicamento_diabetes'=>$request['medicamento_diabetes'],
            'uso_insulina'=>$request['uso_insulina'],
            'tipos_insulinas'=>$tipos_insulinas,
            'nome_insulina'=>$request['nome_insulina'],
            'frequencia_insulina'=>$request['frequencia_insulina'],
            'dose_insulina'=>$request['dose_insulina'],
            'origem_insulinas'=>$request['origem_insulinas'],
            'utensilho'=>$request['utensilho'],
            'origem_utensilho'=>$origem_utensilho,
            'reuso_seringas_insulina'=>$request['reuso_seringas_insulina'],
            'quantia_reuso_seringas'=>$request['quantia_reuso_seringas'],
            'aderencia'=>$aderencia,
            'num_USP'=>$num_USP,
        ]);

        return redirect()->route('tratamento.editar', compact('num_registro', 'num_USP'));
    }

    public function editar($num_registro){
        $page = 'editar';
        $dados = Tratamento::find($num_registro);
        $dados_paciente = Paciente::find($num_registro);
        return view('site.paciente.consulta.tratamento.index', compact('dados','dados_paciente', 'page'));
    }

    public function atualizar(Request $req, $num_registro, $num_USP)
    {
        $jsonData = $req->input('tipos_insulinas');
        $tipos_insulinas = json_encode($jsonData);
        
        $jsonData = $req->input('origem_utensilho');
        $origem_utensilho = json_encode($jsonData);
        
        $jsonData = $req->input('aderencia');
        $aderencia = json_encode($jsonData);

        $request = $req->except('_token');
        Tratamento::where('num_registro',$num_registro)->update([
            'num_registro'=>$num_registro,
            'medicamento_diabetes'=>$request['medicamento_diabetes'],
            'uso_insulina'=>$request['uso_insulina'],
            'tipos_insulinas'=>$tipos_insulinas,
            'nome_insulina'=>$request['nome_insulina'],
            'frequencia_insulina'=>$request['frequencia_insulina'],
            'dose_insulina'=>$request['dose_insulina'],
            'origem_insulinas'=>$request['origem_insulinas'],
            'utensilho'=>$request['utensilho'],
            'origem_utensilho'=>$origem_utensilho,
            'reuso_seringas_insulina'=>$request['reuso_seringas_insulina'],
            'quantia_reuso_seringas'=>$request['quantia_reuso_seringas'],
            'aderencia'=>$aderencia,
            'num_USP'=>$num_USP,
        ]);
        return redirect()->route('tratamento.editar', compact('num_registro', 'num_USP'));
    }
}