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
        <form action="{{route('frequencia_acompanhamento.salvar', ['num_registro' => $dados->num_registro, 'num_USP' => $dados->num_USP])}}" method="post" class="row g-3 needs-validation" novalidate>
            {{ csrf_field() }}
            <h1 class="text-center">Frequência de Acompnhamento</h1>
            @include('site.paciente.consulta.frequencia_acompanhamento._form')
            <div class="col-12 col-btn-form">
                <button class="btn btn-giga btn-primary" type="reset">Limpar</button>
                <button class="btn btn-giga btn-primary-confirm" type="submit">Cadastrar</button>
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