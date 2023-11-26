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
            <form action="{{route('tratamento.salvar', ['num_registro' => $dados->num_registro, 'num_USP' =>  Auth::user()->num_USP])}}" method="post" class="row g-3 needs-validation form-consulta" novalidate>
        @else
            <form action="{{route('tratamento.atualizar', ['num_registro' => $dados->num_registro, 'num_USP' => Auth::user()->num_USP])}}" method="post" class="row g-3 needs-validation form-consulta" novalidate>
        @endif
            {{ csrf_field() }}
            @if ($page != 'cadastrar')
                <input type="hidden" name="_method" value="put">
            @endif
            <h1 class="text-center">Tratamento</h1>
            <div class="primas_usuario">
                <a href="{{route('paciente.configuracoes', $dados->num_registro)}}">
                    <a href="{{route('paciente.configuracoes', $dados->num_registro)}}" id="name_paciente">Paciente: {{$dados_paciente->nome}}</a>
                    <span class="material-symbols-outlined">
                    settings
                    </span>
                </a>
            </div>
            @include('site.paciente.consulta.tratamento._form')
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
            const medicamentos_diabetes = document.getElementById('validationCustommedicamento_diabetes');//text que não deve aceitar numeros
            const nome_insulina = document.getElementById('validationCustomnome_insulina');//text que não aceita numero
            const frequencia_insulina = document.getElementById('validationCustomfrequencia_insulina');//text que aceita numeros
            const dose_insulina = document.getElementById('validationCustomdose_insulina');//text que aceita numeros
            const origem_insulina = document.getElementById('validationCustomorigem_insulinas');//text que não deve aceitar numeros
            const quantia_reuso_seringas = document.getElementById('validationCustomquantia_reuso_seringas');//number
        </script>

        
    @endslot
@endcomponent