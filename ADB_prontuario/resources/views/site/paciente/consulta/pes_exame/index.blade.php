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
        {{-- ALTERAR CONSULTA - ROTA --}}
        <form action="{{route('users.salvar')}}" method="post" class="row g-3 needs-validation" novalidate>
            {{ csrf_field() }}
            <h1 class="text-center">Exame dos pés</h1>
            <div class="pagination-container">
                <div class="pagination-content">
                    @include('site.paciente.consulta.pes_exame._form')
                </div>
            </div>
            <div class="col-12 col-btn-form">
                <button class="btn btn-giga btn-primary-darker" type="reset">Limpar</button>
                <button class="btn btn-giga btn-primary" type="submit">Cadastrar</button>
            </div>
        </form>
        <div class="align-content">
            <button class="prev-btn btn btn-secondary">
                <span class="material-symbols-outlined">
                    arrow_back
                </span>
            </button>
            <button class="next-btn btn btn-secondary">
                <span class="material-symbols-outlined">
                    arrow_forward
                </span>
            </button>
        </div>
    @endslot
@endcomponent