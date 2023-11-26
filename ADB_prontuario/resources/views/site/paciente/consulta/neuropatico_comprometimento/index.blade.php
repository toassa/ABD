@component('components.pages.menu_consulta')
    @slot('rota_volta')
        {{route('consulta.menu_atendimento', $dados_paciente->num_registro)}}
    @endslot
    @slot('num_registro')
        {{$dados_paciente->num_registro}}
    @endslot
    @slot('nome')
        {{$dados_paciente->nome}}
    @endslot
    @slot('content_menu')
        @if ($page == 'cadastrar')
            <form action="{{route('neuropatico_comprometimento.salvar', ['num_registro' => $dados_paciente->num_registro, 'num_USP' => Auth::user()->num_USP])}}" method="post" class="row g-3 needs-validation" novalidate>
        @else
            <form action="{{route('neuropatico_comprometimento.atualizar', ['num_registro' => $dados_paciente->num_registro, 'num_USP' => Auth::user()->num_USP])}}" method="post" class="row g-3 needs-validation" novalidate>
        @endif
            {{ csrf_field() }}
            @if ($page != 'cadastrar')
                <input type="hidden" name="_method" value="put">
            @endif
            <h1 class="text-center">Comprometimento Neuropático</h1>
            <div class="primas_usuario">
                <a href="{{route('paciente.configuracoes', $dados->num_registro)}}">
                    <a href="{{route('paciente.configuracoes', $dados->num_registro)}}" id="name_paciente">Paciente: {{$dados_paciente->nome}}</a>
                    <span class="material-symbols-outlined">
                    settings
                    </span>
                </a>
            </div>
            @include('site.paciente.consulta.neuropatico_comprometimento._form')
            @if($page != 'cadastrar')
                @if($total_pontos != 'nao')
                    <div class="pontos_neuropatico text-center" style="font-size: 20px; font-weight: 800">
                        <div class="popup" onclick="open_popup()">
                            <span class="material-symbols-outlined popup-icon">
                                info
                            </span>
                            <span class="popuptext" id="label_popup">O resultado do comprometimento foi calculado com base nas respostas fornecidas no formuário</span>
                        </div>
                        Resultado Neuropático: {{$total_pontos}}
                    </div>
                @endif
            @endif
            <div class="col-12 col-btn-form">
                <button class="btn btn-giga btn-primary" type="reset">Limpar</button>
                @if ($page == 'cadastrar')
                    <button class="btn btn-giga btn-primary-confirm" type="submit">Cadastrar</button>
                @else
                    <button class="btn btn-giga btn-primary-confirm" type="submit">Atualizar</button>
                @endif
            </div>
        </form>
        <script>
            window.onload = function() {
                // A função será executada quando a página terminar de carregar
                location.reload(true); // O parâmetro true força a recarga da página do servidor, ignorando o cache
            };
        </script>
        <script>
            const observacoes_neuropatico = document.getElementById('validationCustomobservacoes');
        </script>
    @endslot
@endcomponent