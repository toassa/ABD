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
        <form action="{{route('dieta.salvar', ['num_registro' => $dados->num_registro, 'num_USP' => $dados->num_USP])}}" method="post" class="row g-3 needs-validation" novalidate>
            {{ csrf_field() }}
            <h1 class="text-center">Dados de Dieta</h1>
            @include('site.paciente.consulta.dieta._form')
            <div class="col-12 col-btn-form">
                <button class="btn btn-giga btn-primary-darker" type="reset">Limpar</button>
                <button class="btn btn-giga btn-primary" type="submit">Cadastrar</button>
            </div>
        </form>
        <script>
            const frequencia_nutricionista = document.getElementById('validationCustomfrequencia_nutricionista');//number
            const segue_dieta = document.getElementById('validationCustomSegueDieta');//number(de 0 a 10)(O numero digitado deve pertencer aos naturais excluindo o xero.)

            segue_dieta.addEventListener('input', function() {
                let value = segue_dieta.value;
    
                // Remove todos os caracteres que não são dígitos
                value = value.replace(/\D/g, '');

                // Garante que o número esteja no intervalo de 1 a 10 (excluindo o zero)
                if (value < 0 || value > 10) {
                    value = ''; // Define o valor como vazio se estiver fora do intervalo
                }

                segue_dieta.value = value;
            });
        </script>
    @endslot
@endcomponent