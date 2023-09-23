<?php

namespace App\Http\Controllers\Admin\Consulta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\CardiovascularDado;

use Illuminate\Support\Facades\Auth;

class CardiovascularDadosController extends Controller
{
    public function opcao($num_registro){

        $dados = Paciente::find($num_registro); 
        $primas = CardiovascularDado::find($num_registro);
        $num_USP = Auth::User()->num_USP;
        if($primas == null){
            return redirect()->route('cardiovascular_dados.index', compact('num_registro'));
        }else{
            return redirect()->route('cardiovascular_dados.editar', compact('num_registro', 'num_USP'));
        }
        //aqui use Illuminate\Support\Facades\Auth;
    }

    public function index($num_registro)
    {
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.cardiovascular_dados.index', compact('dados'));
    }

    public function salvar(Request $req, $num_registro, $num_USP){
        $request = $req->all();

        CardiovascularDado::create([
            'num_registro'=>$num_registro,
            'saude_cardiaca'=>$request['saude_cardiaca'],
            'dor_peito'=>$request['dor_peito'],
            'exames_doenca_coronariana'=>$request['exames_doenca_coronariana'],
            'num_USP'=>$num_USP,
        ]);

        return redirect()->route('cardiovascular_dados.editar', compact('num_registro', 'num_USP'));
    }

    public function editar($num_registro){
        $dados = CardiovascularDado::find($num_registro);
        return view('site.paciente.consulta.cardiovascular_dados.index', compact('dados'));
    }

    public function atualizar(Request $req, $num_registro, $num_USP)
    {
        $request = $req->except('_token');
        CardiovascularDado::where('num_registro',$num_registro)->update([
            'num_registro'=>$num_registro,
            'saude_cardiaca'=>$request['saude_cardiaca'],
            'dor_peito'=>$request['dor_peito'],
            'exames_doenca_coronariana'=>$request['exames_doenca_coronariana'],
            'num_USP'=>$num_USP,
        ]);
        return redirect()->route('cardiovascular_dados.editar', compact('num_registro', 'num_USP'));
    }
}
