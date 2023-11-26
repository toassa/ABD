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
            <form action="{{route('frequencia_acompanhamento.salvar', ['num_registro' => $dados->num_registro, 'num_USP' => Auth::user()->num_USP])}}" method="post" class="row g-3 needs-validation" novalidate>
        @else
            <form action="{{route('frequencia_acompanhamento.atualizar', ['num_registro' => $dados->num_registro, 'num_USP' => Auth::user()->num_USP])}}" method="post" class="row g-3 needs-validation" novalidate>
        @endif
            {{ csrf_field() }}
	    @if ($page != 'cadastrar')
                <input type="hidden" name="_method" value="put">
            @endif

            <h1 class="text-center">Frequência de Acompanhamento</h1>
            <div class="primas_usuario">
                <a href="{{route('paciente.configuracoes', $dados->num_registro)}}">
                    <a href="{{route('paciente.configuracoes', $dados->num_registro)}}" id="name_paciente">Paciente: {{$dados_paciente->nome}}</a>
                    <span class="material-symbols-outlined">
                    settings
                    </span>
                </a>
            </div>
            @include('site.paciente.consulta.frequencia_acompanhamento._form')
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
            const cardiologista = document.getElementById('validationCustomcardiologista');//text que aceita numeros
            const oftalmologista = document.getElementById('validationCustomoftalmologista');//text que aceita numeros
            const urologista = document.getElementById('validationCustomurologista');//text que aceita numeros
            const dentista = document.getElementById('validationCustomdentista');//text que aceita numeros
        </script>
    @endslot
@endcomponent