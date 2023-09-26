@component('components.pages.menu_consulta')
    @slot('rota_volta')
        {{route('consulta.menu_atendimento', $dados->num_registro)}}
    @endslot
    @slot('num_registro')
        {{$dados->num_registro}}
    @endslot
    @slot('nome')
        {{$dados->nome}}
    @endslot
    @slot('content_menu')
        <form action="{{route('tratamento.salvar', ['num_registro' => $dados->num_registro, 'num_USP' => $dados->num_USP])}}" method="post" class="row g-3 needs-validation" novalidate>
            {{ csrf_field() }}
            <h1 class="text-center">Tratamento</h1>
            @include('site.paciente.consulta.tratamento._form')
            <div class="col-12 col-btn-form">
                <button class="btn btn-giga btn-primary-darker" type="reset">Limpar</button>
                <button class="btn btn-giga btn-primary" type="submit">Cadastrar</button>
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