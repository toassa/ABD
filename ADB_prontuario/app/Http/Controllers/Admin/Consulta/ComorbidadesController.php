<?php

namespace App\Http\Controllers\Admin\Consulta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\Comorbidade;

use Illuminate\Support\Facades\Auth;

class ComorbidadesController extends Controller
{
    public function opcao($num_registro){

        $dados = Paciente::find($num_registro); 
        $primas = Comorbidade::find($num_registro);
        $num_USP = Auth::User()->num_USP;
        if($primas == null){
            return redirect()->route('comorbidades.index', compact('num_registro'));
        }else{
            return redirect()->route('comorbidades.editar', compact('num_registro', 'num_USP'));
        }
    }

    public function index($num_registro)
    {
	$page = 'cadastrar';
        $dados = Paciente::find($num_registro);
        $dados_paciente = Paciente::find($num_registro);
        return view('site.paciente.consulta.comorbidades.index', compact('dados','dados_paciente', 'page'));
    }

    public function salvar(Request $req, $num_registro, $num_USP){
        $request = $req->all();

        $jsonData = $req->input('ocular');
        $ocular = json_encode($jsonData);

        $jsonData = $req->input('neuropatia');
        $neuropatia = json_encode($jsonData);

        $jsonData = $req->input('doenca_cronica');
        $doenca_cronica = json_encode($jsonData);
        
        Comorbidade::create([
            'num_registro'=>$num_registro,
            'ocular'=>$ocular,
            'neuropatia'=>$neuropatia,
            'doenca_cronica'=>$doenca_cronica,
            'num_USP' => $num_USP,
        ]);

        return redirect()->route('comorbidades.editar', compact('num_registro', 'num_USP'));
    }

    public function editar($num_registro){
	$page = 'editar';
        $dados = Comorbidade::find($num_registro);
        $dados_paciente = Paciente::find($num_registro);
        return view('site.paciente.consulta.comorbidades.index', compact('dados','dados_paciente', 'page'));
    }

    public function atualizar(Request $req, $num_registro, $num_USP)
    {
        $request = $req->except('_token');

        $ocular = json_encode($request['ocular']);

        $neuropatia = json_encode($request['neuropatia']);

        $doenca_cronica = json_encode($request['doenca_cronica']);
        
        Comorbidade::where('num_registro',$num_registro)->update([
            'num_registro'=>$num_registro,
            'ocular'=>$ocular,
            'neuropatia'=>$neuropatia,
            'doenca_cronica'=>$doenca_cronica,
            'num_USP' => $num_USP,
        ]);
        return redirect()->route('comorbidades.editar', compact('num_registro', 'num_USP'));
    }
}
