<?php

namespace App\Http\Controllers\Admin\Consulta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\Comorbidade;

class ComorbidadesController extends Controller
{
    public function index($num_registro)
    {
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.comorbidades.index', compact('dados'));
    }

    public function salvar(Request $req, $num_registro, $num_USP){
        $request = $req->all();

        Comorbidade::create([
            'num_registro'=>$num_registro,
            'ocular'=>$request['ocular'],
            'neuropatia'=>$request['neuropatia'],
            'doenca_cronica'=>$request['doenca_cronica'],
            'num_USP' => $num_USP,
        ]);

        return redirect()->route('comorbidades.editar', compact('num_registro', 'num_USP'));
    }

    public function editar($num_registro){
        $dados = Comorbidade::find($num_registro);
        return view('site.paciente.consulta.comorbidades.index', compact('dados'));
    }

    public function atualizar(Request $req, $num_registro, $num_USP)
    {
        $request = $req->except('_token');
        Comorbidade::where('num_registro',$num_registro)->update([
            'num_registro'=>$num_registro,
            'ocular'=>$request['ocular'],
            'neuropatia'=>$request['neuropatia'],
            'doenca_cronica'=>$request['doenca_cronica'],
            'num_USP' => $num_USP,
        ]);
        return redirect()->route('comorbidades.editar', compact('num_registro', 'num_USP'));
    }
}
