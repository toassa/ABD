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
        <form action="{{route('complicacoes.salvar', ['num_registro' => $dados->num_registro, 'num_USP' => $dados->num_USP])}}" method="post" class="row g-3 needs-validation" novalidate>
            {{ csrf_field() }}
            <h1 class="text-center">Complicações</h1>
            @include('site.paciente.consulta.complicacoes._form')
            <div class="col-12 col-btn-form">
                <button class="btn btn-giga btn-primary" type="reset">Limpar</button>
                <button class="btn btn-giga btn-primary-confirm" type="submit">Cadastrar</button>
            </div>
        </form>
        <script>
            const quaiscomplicacoes = document.getElementById('validationCustomquaiscomplicacoes');//text que não deve aceitar numeros?
            const causainternacao = document.getElementById('validationCustomcausainternacao');//text que não deve aceitar numeros?
            const episodiosultimomes = document.getElementById('validationCustomepisodiosultimomes');//number
            const alimento_tratar_hipoglicemia = document.getElementById('validationCustomalimento_tratar_hipoglicemia');//text que nao deve aceitar numeros

            alimento_tratar_hipoglicemia.addEventListener('input', function() {
                let value = alimento_tratar_hipoglicemia.value;
                value = value.replace(/[0-9]/g, ''); // Remove todos os números
                alimento_tratar_hipoglicemia.value = value;
            });

            
        </script>
    @endslot
    <script src="{{asset('js/dialog-info.js')}}"></script>
@endcomponent