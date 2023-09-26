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
        <form action="{{route('habitos_vida.salvar', ['num_registro' => $dados->num_registro, 'num_USP' => $dados->num_USP])}}" method="post" class="row g-3 needs-validation" novalidate>
            {{ csrf_field() }}
            <h1 class="text-center">Hábitos de vida</h1>
            @include('site.paciente.consulta.habitos_vida._form')
            <div class="col-12 col-btn-form">
                <button class="btn btn-giga btn-primary-darker" type="reset">Limpar</button>
                <button class="btn btn-giga btn-primary" type="submit">Cadastrar</button>
            </div>
            <script src="{{asset('js/form-consulta.js')}}"></script>
        </form>
        <script>
            const periodo_quantia_etilismo = document.getElementById('validationCustomperiodo_quantia_etilismo');//text que aceita numeros
            const quantia_tabagismo = document.getElementById('validationCustomquantia_tabagismo');//text que aceita numeros
            const quais_periodo_drogas = document.getElementById('validationCustomquais_periodo_drogas');//text que aceita numeros
        </script>
    @endslot
@endcomponent
