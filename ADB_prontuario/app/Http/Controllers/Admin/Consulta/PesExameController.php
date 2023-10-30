<?php

namespace App\Http\Controllers\Admin\Consulta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\PesExame;

use Illuminate\Support\Facades\Auth;

class PesExameController extends Controller
{
    public function opcao($num_registro){

        $dados = Paciente::find($num_registro); 
        $primas = PesExame::find($num_registro);
        $num_USP = Auth::User()->num_USP;
        if($primas == null){
            return redirect()->route('pes_exame.index', compact('num_registro'));
        }else{
            return redirect()->route('pes_exame.editar', compact('num_registro', 'num_USP'));
        }
    }

    public function index($num_registro)
    {
        $page = 'cadastrar';
        $dados = Paciente::find($num_registro);
        $dados_paciente = Paciente::find($num_registro);
        return view('site.paciente.consulta.pes_exame.index', compact('dados','dados_paciente', 'page'));
    }

    public function salvar(Request $req, $num_registro, $num_USP){
        $request = $req->all();
        
        $jsonData = $req->input('regioes_ulceras');
        $regioes_ulceras = json_encode($jsonData);
        
        $jsonData = $req->input('caracteristicas_ulceras');
        $caracteristicas_ulceras = json_encode($jsonData);
        
        $jsonData = $req->input('alteracoes');
        $alteracoes = json_encode($jsonData);
        
        $jsonData = $req->input('deformidades');
        $deformidades = json_encode($jsonData);
        
        $jsonData = $req->input('pulsos');
        $pulsos = json_encode($jsonData);
        
        $jsonData = $req->input('alteracoes_neuropaticas');
        $alteracoes_neuropaticas = json_encode($jsonData);
        
        $jsonData = $req->input('demais_alteracoes');
        $demais_alteracoes = json_encode($jsonData);
        
        PesExame::create([
            'num_registro'=>$num_registro,
            'casos_ulceras' => $request['casos_ulceras'],
            'regioes_ulceras' => $regioes_ulceras,
            'caracteristicas_ulceras' => $caracteristicas_ulceras,
            'alteracoes' => $alteracoes,
            'deformidades' => $deformidades,
            'pulsos' => $pulsos,
            'alteracoes_neuropaticas' => $alteracoes_neuropaticas,
            'demais_alteracoes' => $demais_alteracoes,
            'observacoes' => $request['observacoes'],
            'num_USP' => $num_USP,
        ]);

        return redirect()->route('pes_exame.editar', compact('num_registro', 'num_USP'));
    }

    public function editar($num_registro){
        $page = 'editar';
        $dados = PesExame::find($num_registro);
        $dados_paciente = Paciente::find($num_registro);
        return view('site.paciente.consulta.pes_exame.index', compact('dados','dados_paciente', 'page'));
    }

    public function atualizar(Request $req, $num_registro, $num_USP)
    {
        $request = $req->except('_token');
        
        $regioes_ulceras = json_encode($request['regioes_ulceras']);
        
        $caracteristicas_ulceras = json_encode($request['caracteristicas_ulceras']);
        
        $alteracoes = json_encode($request['alteracoes']);
        
        $deformidades = json_encode($request['deformidades']);
        
        $pulsos = json_encode($request['pulsos']);
        
        $alteracoes_neuropaticas = json_encode($request['alteracoes_neuropaticas']);
        
        $demais_alteracoes = json_encode($request['demais_alteracoes']);

        PesExame::where('num_registro',$num_registro)->update([
            'num_registro'=>$num_registro,
            'casos_ulceras' => $request['casos_ulceras'],
            'regioes_ulceras' => $regioes_ulceras,
            'caracteristicas_ulceras' => $caracteristicas_ulceras,
            'alteracoes' => $alteracoes,
            'deformidades' => $deformidades,
            'pulsos' => $pulsos,
            'alteracoes_neuropaticas' => $alteracoes_neuropaticas,
            'demais_alteracoes' => $demais_alteracoes,
            'observacoes' => $request['observacoes'],
            'num_USP' => $num_USP,
        ]);
        return redirect()->route('pes_exame.editar', compact('num_registro', 'num_USP'));
    }
}
