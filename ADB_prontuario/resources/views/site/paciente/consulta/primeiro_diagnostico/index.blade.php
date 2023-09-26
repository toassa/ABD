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
        <form action="{{route('primeiro_diagnostico.salvar', ['num_registro' => $dados->num_registro, 'num_USP' => $dados->num_USP])}}" method="post" class="row g-3 needs-validation" novalidate>
            {{ csrf_field() }}
            <h1 class="text-center">Primeiro Diagnóstico</h1>
            <div class="pagination-container">
                <div class="pagination-content">
                    @include('site.paciente.consulta.primeiro_diagnostico._form')
                </div>
            </div>
            <div class="col-12 col-btn-form">
                <button class="btn btn-giga btn-primary-darker" type="reset">Limpar</button>
                <button class="btn btn-giga btn-primary" type="submit">Cadastrar</button>
            </div>
        </form>

        <script>
            const ano = document.getElementById('validationCustomano');//number
            const idade = document.getElementById('validationCustomidade')//number
            const qual_fator_emocional = document.getElementById('validationCustomqual_fator_emocional')//text que não deve aceitar numeros
            const quais_infeccoes =document.getElementById('validationCustomquais_infeccoes');//text que não deve aceitar numeros
            const periodo_sintomas_diagnostico =document.getElementById('validationCustomperiodo_sintomas_diagnostico');//number

            ano.addEventListener('input', function(){
                let value = ano.value;
                value = value.replace(/(\d{4})\d+?$/, '$1');//mudar o max lenght do campo
                ano.value=value;
            });

            idade.addEventListener('input', function(){
                let value = idade.value;
                value = value.replace(/(\d{3})\d+?$/, '$1');//mudar o max lenght do campo
                idade.value=value;
            });

        </script>
        
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