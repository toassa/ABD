<?php

namespace App\Http\Controllers\Admin\Consulta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\Complicacao;

use Illuminate\Support\Facades\Auth;

class ComplicacoesController extends Controller
{
    public function opcao($num_registro){

        $dados = Paciente::find($num_registro); 
        $primas = Complicacao::find($num_registro);
        $num_USP = Auth::User()->num_USP;
        if($primas == null){
            return redirect()->route('complicacoes.index', compact('num_registro'));
        }else{
            return redirect()->route('complicacoes.editar', compact('num_registro', 'num_USP'));
        }
    }

    public function index($num_registro)
    {
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.complicacoes.index', compact('dados'));
    }

    public function salvar(Request $req, $num_registro, $num_USP){
        $request = $req->all();

        Complicacao::create([
            'num_registro'=>$num_registro,
            'complicacoes'=>$request['complicacoes'],
            'quais_complicacoes'=>$request['quais_complicacoes'],
            'internacao_complicacao'=>$request['internacao_complicacao'],
            'causa_internacao'=>$request['causa_internacao'],
            'episodio_hipoglicemia'=>$request['episodio_hipoglicemia'],
            'episodio_assintomatico'=>$request['episodio_assintomatico'],
            'nivel_episodio'=>$request['nivel_episodio'],
            'periodo_frequente_hipoglocemia'=>$request['periodo_frequente_hipoglocemia'],
            'episodios_ultimo_mes'=>$request['episodios_ultimo_mes'],
            'alimento_tratar_hipoglicemia'=>$request['alimento_tratar_hipoglicemia'],
            'num_USP' => $num_USP,
        ]);

        return redirect()->route('complicacoes.editar', compact('num_registro', 'num_USP'));
    }

    public function editar($num_registro){
        $dados = Complicacao::find($num_registro);
        return view('site.paciente.consulta.complicacoes.index', compact('dados'));
    }

    public function atualizar(Request $req, $num_registro, $num_USP)
    {
        $request = $req->except('_token');
        Complicacao::where('num_registro',$num_registro)->update([
            'num_registro'=>$num_registro,
            'complicacoes'=>$request['complicacoes'],
            'quais_complicacoes'=>$request['quais_complicacoes'],
            'internacao_complicacao'=>$request['internacao_complicacao'],
            'causa_internacao'=>$request['causa_internacao'],
            'episodio_hipoglicemia'=>$request['episodio_hipoglicemia'],
            'episodio_assintomatico'=>$request['episodio_assintomatico'],
            'nivel_episodio'=>$request['nivel_episodio'],
            'periodo_frequente_hipoglocemia'=>$request['periodo_frequente_hipoglocemia'],
            'episodios_ultimo_mes'=>$request['episodios_ultimo_mes'],
            'alimento_tratar_hipoglicemia'=>$request['alimento_tratar_hipoglicemia'],
            'num_USP' => $num_USP,
        ]);
        return redirect()->route('complicacoes.editar', compact('num_registro', 'num_USP'));
    }
}
