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
        <form action="{{route('ginecologico_dados.salvar', ['num_registro' => $dados->num_registro, 'num_USP' => $dados->num_USP])}}" method="post" class="row g-3 needs-validation" novalidate>
            {{ csrf_field() }}
            <h1 class="text-center">Dados ginecológicos</h1>
            @include('site.paciente.consulta.ginecologico_dados._form')
            <div class="col-12 col-btn-form">
                <button class="btn btn-giga btn-primary" type="reset">Limpar</button>
                <button class="btn btn-giga btn-primary-confirm" type="submit">Cadastrar</button>
            </div>
        </form>
        <script>
            const idade_menopausa = document.getElementById('validationCustomidade_menopausa');//number 
            const idade_menstruacao = document.getElementById('validationCustomidade_menstruacao');//number 
            const historico_obstetrico = document.getElementById('validationCustomhistorico_obstetrico');//text que aceita numeros
            const metodos_contraceptivos = document.getElementById('validationCustommetodos_contraceptivos');//text que não deve aceitar numeros
            const frequencia_ginecologica = document.getElementById('validationCustomfrequencia_ginecologica');//text que aceita numeros

            idade_menopausa.addEventListener('input', function(){
                let value = idade_menopausa.value;
                value = value.replace(/(\d{3})\d+?$/, '$1');
                idade_menopausa.value=value;
            });

            idade_menstruacao.addEventListener('input', function(){
                let value = idade_menstruacao.value;
                value = value.replace(/(\d{3})\d+?$/, '$1');
                idade_menstruacao.value=value;
            });

            metodos_contraceptivos.addEventListener('input', function() {
                let value = metodos_contraceptivos.value;
                value = value.replace(/[0-9]/g, ''); // Remove todos os números
                metodos_contraceptivos.value = value;
            });
        </script>
    @endslot
@endcomponent