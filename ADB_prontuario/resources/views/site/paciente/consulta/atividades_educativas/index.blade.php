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
        <form action="{{route('atividades_educativas.salvar', ['num_registro' => $dados->num_registro, 'num_USP' => $dados->num_USP])}}" method="post" class="row g-3 needs-validation" novalidate>
            {{ csrf_field() }}
            <h1 class="text-center">Atividades Educativas</h1>
            <div class="pagination-container">
                <div class="pagination-content">
                    @include('site.paciente.consulta.atividades_educativas._form')
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
            const hba1c = document.getElementById('validationCustomhba1c');//number
             
            hba1c.addEventListener('input', function() {
                let value = hba1c.value;
                value = value.replace(/\D/g, ''); // Remove todos os caracteres que não sejam dígitos
                value = value.replace(/(\d{50})\d+?$/, '$1');
                hba1c.value = value;
            });
        </script>
    @endslot
@endcomponent