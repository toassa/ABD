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
        $dados = Paciente::find($num_registro);
        $dados_paciente = Paciente::find($num_registro);
        return view('site.paciente.consulta.pes_exame.index', compact('dados','dados_paciente'));
    }

    public function salvar(Request $req, $num_registro, $num_USP){
        $request = $req->all();
        
        $jsonData = $req->input('aderencia');
        $aderencia = json_encode($jsonData);
        
        PesExame::create([
            'num_registro'=>$num_registro,
            'casos_ulceras' => $request['casos_ulceras'],
            'regioes_ulceras' => $request['regioes_ulceras'],
            'caracteristicas_ulceras' => $request['caracteristicas_ulceras'],
            'alteracoes' => $request['alteracoes'],
            'deformidades' => $request['deformidades'],
            'pulsos' => $request['pulsos'],
            'alteracoes_neuropaticas' => $request['alteracoes_neuropaticas'],
            'demais_alteracoes' => $request['demais_alteracoes'],
            'observacoes' => $request['observacoes'],
            'num_USP' => $num_USP,
        ]);

        return redirect()->route('pes_exame.editar', compact('num_registro', 'num_USP'));
    }

    public function editar($num_registro){
        $dados = PesExame::find($num_registro);
        $dados_paciente = Paciente::find($num_registro);
        return view('site.paciente.consulta.pes_exame.index', compact('dados','dados_paciente'));
    }

    public function atualizar(Request $req, $num_registro, $num_USP)
    {
        $request = $req->except('_token');
        PesExame::where('num_registro',$num_registro)->update([
            'num_registro'=>$num_registro,
            'casos_ulceras' => $request['casos_ulceras'],
            'regioes_ulceras' => $request['regioes_ulceras'],
            'caracteristicas_ulceras' => $request['caracteristicas_ulceras'],
            'alteracoes' => $request['alteracoes'],
            'deformidades' => $request['deformidades'],
            'pulsos' => $request['pulsos'],
            'alteracoes_neuropaticas' => $request['alteracoes_neuropaticas'],
            'demais_alteracoes' => $request['demais_alteracoes'],
            'observacoes' => $request['observacoes'],
            'num_USP' => $num_USP,
        ]);
        return redirect()->route('pes_exame.editar', compact('num_registro', 'num_USP'));
    }
}
