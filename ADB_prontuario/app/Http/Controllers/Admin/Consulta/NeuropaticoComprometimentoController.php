<?php

namespace App\Http\Controllers\Admin\Consulta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\NeuropaticoComprometimento;

use Illuminate\Support\Facades\Auth;

class NeuropaticoComprometimentoController extends Controller
{
    // A função de 'opcao' o usuário é redirecionado para página de cadastro ou edição através da verificação se a tabela já contêm dados com seu número de registro 
    public function opcao($num_registro){
        $dados = Paciente::find($num_registro); 
        $primas = NeuropaticoComprometimento::find($num_registro);
        $num_USP = Auth::User()->num_USP;
        if($primas == null){
            return redirect()->route('neuropatico_comprometimento.index', compact('num_registro'));
        }else{
            return redirect()->route('neuropatico_comprometimento.editar', compact('num_registro', 'num_USP'));
        }
    }

    // Na função de 'index', o usuário é retornado para a página de cadastro do exame selecionado juntamente com os dados necessários
    public function index($num_registro)
    {
        $page = 'cadastrar';
        $dados = Paciente::find($num_registro);
        $dados_paciente = Paciente::find($num_registro);
        $total_pontos = 'nao';
        return view('site.paciente.consulta.neuropatico_comprometimento.index', compact('dados','dados_paciente','page', 'total_pontos'));
    }

    // Na função 'salvar', os dados fornecidos pelo usuário no formulário de cadastro são armazenados na tabela referida
    public function salvar(Request $req, $num_registro, $num_USP){
        $request = $req->all();
        $somatoria = 0;
        $page = 'editar';
        $dados_paciente = Paciente::find($num_registro);

        // A funcionalidade de somatória e envio do resultado do paciente está presente apenas na seção de primeiro diagnóstico. As demais estão em todos os controladores da pasta 'Consulta'

        // Aqui, para o disgnóstico do comprometimento neuropático do paciente, as respostas verifica-se as respostas e soma-se valor a cada uma referente a resposta enviada
        if($request['reflexo_aquileu_direito'] == 'Presente ao esforço'){
            $somatoria = $somatoria + 1;
        }
        if($request['reflexo_aquileu_esquerdo'] == 'Presente ao esforço'){
            $somatoria = $somatoria + 1;
        }
        if($request['reflexo_aquileu_direito'] == 'Ausente'){
            $somatoria = $somatoria + 2;
        }
        if($request['reflexo_aquileu_esquerdo'] == 'Ausente'){
            $somatoria = $somatoria + 2;
        }
        if($request['sensibilidade_vibratoria_direita'] == 'Ausente'){
            $somatoria = $somatoria + 1;
        }
        if($request['sensibilidade_vibratoria_esquerda'] == 'Ausente'){
            $somatoria = $somatoria + 1;
        }
        if($request['sensibilidade_dolorosa_direita'] == 'Ausente'){
            $somatoria = $somatoria + 1;
        }
        if($request['sensibilidade_dolorosa_esquerda'] == 'Ausente'){
            $somatoria = $somatoria + 1;
        }
        if($request['sensibilidade_termica_direita'] == 'Ausente'){
            $somatoria = $somatoria + 1;
        }
        if($request['sensibilidade_termica_esquerda'] == 'Ausente'){
            $somatoria = $somatoria + 1;
        }
        
        // A somatória feoita nas funções anteriores fornecem o resultado da neuropatia do paciente
        if($somatoria == 3 || $somatoria == 4 || $somatoria == 5){
            $total_pontos = 'Sinais leves';
        }
        elseif($somatoria == 6 || $somatoria == 7 || $somatoria == 8){
            $total_pontos = 'Sinais moderados';
        }
        elseif($somatoria == 9 || $somatoria == 10){
            $total_pontos = 'Sinais graves';
        }

        // Cadastro dos dados recebidos e gerados na tabela de Comprometimento Neuropatico
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
            'total_pontos' => $total_pontos,
            'diagnostico_neuropatia_periferica' => $request['diagnostico_neuropatia_periferica'],
            'observacoes' => $request['observacoes'],
            'num_USP' => $num_USP,
        ]);

        // Recebimento dos dados cadastrados na tabela
        $dados = NeuropaticoComprometimento::find($num_registro);

        return view('site.paciente.consulta.neuropatico_comprometimento.index', compact('num_registro', 'dados','dados_paciente', 'page', 'num_USP', 'total_pontos'));
    }

    // A função 'editar' abre a seção do primeiro diagnóstico e envia os dados já cadastrados no banco 
    public function editar($num_registro){
        $page = 'editar';
        $dados = NeuropaticoComprometimento::find($num_registro);
        $total_pontos = $dados['total_pontos'];
        $dados_paciente = Paciente::find($num_registro);
        return view('site.paciente.consulta.neuropatico_comprometimento.index', compact('dados','dados_paciente','page', 'total_pontos'));
    }

    // Função 'atualizar' recebe os novos dados inserios e edita-os no banco de dados
    public function atualizar(Request $req, $num_registro, $num_USP)
    {
        $request = $req->except('_token');
        $page = 'editar';
        $dados_paciente = Paciente::find($num_registro);
        $somatoria = 0;

        // Atualiza a somatória feita no cadastro
        if($request['reflexo_aquileu_direito'] == 'Presente ao esforço'){
            $somatoria = $somatoria + 1;
        }
        if($request['reflexo_aquileu_esquerdo'] == 'Presente ao esforço'){
            $somatoria = $somatoria + 1;
        }
        if($request['reflexo_aquileu_direito'] == 'Ausente'){
            $somatoria = $somatoria + 2;
        }
        if($request['reflexo_aquileu_esquerdo'] == 'Ausente'){
            $somatoria = $somatoria + 2;
        }
        if($request['sensibilidade_vibratoria_direita'] == 'Ausente'){
            $somatoria = $somatoria + 1;
        }
        if($request['sensibilidade_vibratoria_esquerda'] == 'Ausente'){
            $somatoria = $somatoria + 1;
        }
        if($request['sensibilidade_dolorosa_direita'] == 'Ausente'){
            $somatoria = $somatoria + 1;
        }
        if($request['sensibilidade_dolorosa_esquerda'] == 'Ausente'){
            $somatoria = $somatoria + 1;
        }
        if($request['sensibilidade_termica_direita'] == 'Ausente'){
            $somatoria = $somatoria + 1;
        }
        if($request['sensibilidade_termica_esquerda'] == 'Ausente'){
            $somatoria = $somatoria + 1;
        }

        if($somatoria <= 5){
            $total_pontos = 'Sinais leves';
        }
        elseif($somatoria == 6 || $somatoria == 7 || $somatoria == 8){
            $total_pontos = 'Sinais moderados';
        }
        elseif($somatoria == 9 || $somatoria == 10){
            $total_pontos = 'Sinais graves';
        }
        
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
            'total_pontos' => $total_pontos,
            'diagnostico_neuropatia_periferica' => $request['diagnostico_neuropatia_periferica'],
            'observacoes' => $request['observacoes'],
            'num_USP' => $num_USP,
        ]);

        $dados = NeuropaticoComprometimento::find($num_registro);

        return view('site.paciente.consulta.neuropatico_comprometimento.index', compact('num_registro', 'num_USP', 'total_pontos', 'dados','dados_paciente','page'));
    }
}
