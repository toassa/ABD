@component('components.pages.menu_consulta')
    @slot('rota_volta')
        {{route('consulta.menu_atendimento', $dados->num_registro)}}
    @endslot
    @slot('num_registro')
        {{$dados->num_registro}}
    @endslot
    @slot('nome')
        {{$dados_paciente->nome}}
    @endslot
    @slot('content_menu')
	@if ($page == 'cadastrar')
            <form action="{{route('exercicios_fisicos.salvar', ['num_registro' => $dados->num_registro, 'num_USP' => Auth::user()->num_USP])}}" method="post" class="row g-3 needs-validation" novalidate>
        @else
            <form action="{{route('exercicios_fisicos.atualizar', ['num_registro' => $dados->num_registro, 'num_USP' => Auth::user()->num_USP])}}" method="post" class="row g-3 needs-validation" novalidate>
        @endif
            {{ csrf_field() }}
	    @if ($page != 'cadastrar')
                <input type="hidden" name="_method" value="put">
            @endif
            <h1 class="text-center">Exercícios Físicos</h1>
            <div class="primas_usuario">
                <a href="{{route('paciente.configuracoes', $dados->num_registro)}}">
                    <a href="{{route('paciente.configuracoes', $dados->num_registro)}}" id="name_paciente">Paciente: {{$dados_paciente->nome}}</a>
                    <span class="material-symbols-outlined">
                    settings
                    </span>
                </a>
            </div>
            @include('site.paciente.consulta.exercicios_fisicos._form')
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
            const tipo_atividades = document.getElementById('validationCustomtipo_atividades');//text que não deve aceitar numeros
            const frequencia_periodo = document.getElementById('validationCustomfrequencia_periodo');//text que aceita numero?
            tipo_atividades.addEventListener('input', function() {
                let value = tipo_atividades.value;
                value = value.replace(/[^a-zA-Z\u00C0-\u024F\s]+/g, ''); // Aceita lentos e acentos
                value = value.replace(/(\d{50})\d+?$/, '$1');
                tipo_atividades.value = value;
            });
        </script>
    @endslot
@endcomponent