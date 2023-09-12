<?php

namespace App\Http\Controllers\Admin\Consulta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\NeuropaticoComprometimento;

class NeuropaticoComprometimentoController extends Controller
{
    public function index($num_registro)
    {
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.neuropatico_comprometimento.index', compact('dados'));
    }

    public function salvar(Request $req, $num_registro, $num_USP){
        $request = $req->all();
        // dd($num_USP);
        NeuropaticoComprometimento::create([
            'num_registro'=>$num_registro,
            'reflexo_aquileu_direito' => $request['reflexo_aquileu_direito'],
            'reflexo_aquileu_esquerdo' => $request['reflexo_aquileu_esquerdo'],
            'sensibilidade_vibratoria_direita' => $request['sensibilidade_vibratoria_direita'],
            'sensibilidade_vibratoria_esquerda' => $request['sensibilidade_vibratoria_esquerda'],
            'sensibilidade_dolorosa_direita' => $request['sensibilidade_dolorosa_direita'],
            'sensibilidade_dolorosa_esquerda' => $request['sensibilidade_dolorosa_esquerda'],
            'sensibilidade_termica_direita' => $request['sensibilidade_termica_direita'],
            'sensibilidade_termica_esquerda' => $request['sensibilidade_termica_esquerda'],
            'total_pontos' => $request['total_pontos'],
            'diagnostico_neuropatia_periferica' => $request['diagnostico_neuropatia_periferica'],
            'observacoes' => $request['observacoes'],
            'num_USP' => $num_USP,
        ]);

        return redirect()->route('neuropatico_comprometimento.editar', compact('num_registro', 'num_USP'));
    }

    public function editar($num_registro){
        $dados = NeuropaticoComprometimento::find($num_registro);
        return view('site.paciente.consulta.neuropatico_comprometimento.index', compact('dados'));
    }

    public function atualizar(Request $req, $num_registro, $num_USP)
    {
        $request = $req->except('_token');
        NeuropaticoComprometimento::where('num_registro',$num_registro)->update([
            'num_registro'=>$num_registro,
            'reflexo_aquileu_direito' => $request['reflexo_aquileu_direito'],
            'reflexo_aquileu_esquerdo' => $request['reflexo_aquileu_esquerdo'],
            'sensibilidade_vibratoria_direita' => $request['sensibilidade_vibratoria_direita'],
            'sensibilidade_vibratoria_esquerda' => $request['sensibilidade_vibratoria_esquerda'],
            'sensibilidade_dolorosa_direita' => $request['sensibilidade_dolorosa_direita'],
            'sensibilidade_dolorosa_esquerda' => $request['sensibilidade_dolorosa_esquerda'],
            'sensibilidade_termica_direita' => $request['sensibilidade_termica_direita'],
            'sensibilidade_termica_esquerda' => $request['sensibilidade_termica_esquerda'],
            'total_pontos' => $request['total_pontos'],
            'diagnostico_neuropatia_periferica' => $request['diagnostico_neuropatia_periferica'],
            'observacoes' => $request['observacoes'],
            'num_USP' => $num_USP,
        ]);
        return redirect()->route('neuropatico_comprometimento.editar', compact('num_registro', 'num_USP'));
    }
}
