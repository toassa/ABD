@component('components.pages.menu_consulta')
    @slot('rota_volta')
        {{route('consulta.menu_atendimento', $dados->num_registro)}}
    @endslot
    @slot('num_registro')
        {{$dados_paciente->num_registro}}
    @endslot
    @slot('nome')
        {{$dados->nome}}
    @endslot
    @slot('content_menu')
        <form action="{{route('familiar_historico.salvar', ['num_registro' => $dados->num_registro, 'num_USP' => $dados->num_USP])}}" method="post" class="row g-3 needs-validation" novalidate>
            {{ csrf_field() }}
            <h1 class="text-center">Histórico Familiar</h1>
            <div class="pagination-container"> 
                <div class="pagination-content">
                    @include('site.paciente.consulta.familiar_historico._form')
                </div>
            </div>
            <div class="align-content">
                <a class="prev-btn btn btn-secondary" id="pagination-icon">
                    <span class="material-symbols-outlined">
                        arrow_back
                    </span>
                </a>
                <a class="next-btn btn btn-secondary" id="pagination-icon">
                    <span class="material-symbols-outlined">
                        arrow_forward
                    </span>
                </a>
            </div>
            <div class="col-12 col-btn-form">
                <button class="btn btn-giga btn-primary" type="reset">Limpar</button>
                <button class="btn btn-giga btn-primary-confirm" type="submit">Cadastrar</button>
            </div>
        </form>
        <script>
            const dm1 = document.getElementById('validationCustomdm1');//text que não deve aceitar numeros
        </script>
    @endslot
@endcomponent