@component('components.pages.menu_consulta')
    @slot('num_registro')
        $dados->num_registro
    @endslot
    @slot('content_menu')
        {{-- ALTERAR CONSULTA - ROTA --}}
        <form action="{{route('users.salvar')}}" method="post" class="row g-3 needs-validation" novalidate>
            {{ csrf_field() }}
            @include('site.paciente.consulta.ginecologico_dados._form')
            <div class="col-12 col-btn-form">
                <button class="btn btn-giga btn-primary-darker" type="reset">Limpar</button>
                <button class="btn btn-giga btn-primary" type="submit">Cadastrar</button>
            </div>
        </form>
    @endslot
@endcomponent