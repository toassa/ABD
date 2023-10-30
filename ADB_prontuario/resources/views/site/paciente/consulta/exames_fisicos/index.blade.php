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
        @if ($page == 'cadastrar')
            <form action="{{route('exames_fisicos.salvar', ['num_registro' => $dados->num_registro, 'num_USP' => Auth::user()->num_USP])}}" method="post" class="row g-3 needs-validation" novalidate>
        @else
            <form action="{{route('exames_fisicos.atualizar', ['num_registro' => $dados->num_registro, 'num_USP' => Auth::user()->num_USP])}}" method="post" class="row g-3 needs-validation" novalidate>
        @endif
            {{ csrf_field() }}
            @if ($page != 'cadastrar')
                <input type="hidden" name="_method" value="put">
            @endif
            <h1 class="text-center">Exames físicos</h1>
            <p>Atenção, seguir o roteiro físico para guiar o exame. Adicionar aqui as alterações observadas em cada aparelho. Caso não se observe alterações, anotar NDN (nada digno de nota), especificando no roteiro físico os achados.</p>
            @include('site.paciente.consulta.exames_fisicos._form')
            <div class="col-12 col-btn-form">
                <button class="btn btn-giga btn-primary" type="reset">Limpar</button>
                @if ($page == 'cadastrar')
                    <button class="btn btn-giga btn-primary-confirm" type="submit">Cadastrar</button>
                @else
                    <button class="btn btn-giga btn-primary-confirm" type="submit">Atualizar</button>
                @endif
            </div>
        </form>
        <script>
            const aspecto_geral = document.getElementById('validationCustomapecto_geral');//text que nao deve aceitar numeros?
            const peso = document.getElementById('validationCustompeso');//number onde deve ser criada uma virgula após as duas primeiras casas decimais
            const altura = document.getElementById('validationCustomAltura');//number onde deve ser criada uma virgula após a primeira casa decimal
            const circunferencia_abdominal = document.getElementById('validationCustomcircunferencia_abdominal');
            const circunferencia_quadril = document.getElementById('validationCustomcircunferencia_quadril');//number onde deve ser colocada virgula antes das duas ultimas casas decimais
            const circunferencia_pescoco = document.getElementById('validationCustomcircunferencia_pescoco');//number onde deve ser colocada virgula antes das duas ultimas casas decimais
            const pressao_arterial = document.getElementById('validationCustompressao_arterial');//number onde deve ser colocada virgula antes das duas ultimas casas decimais
            const frequencia_cardiaca = document.getElementById('validationCustomfrequencia_cardiaca');//number onde deve ser colocada virgula antes das duas ultimas casas decimais
            const pulso_arterial = document.getElementById('validationCustompulso_arterial');//number onde deve ser colocada virgula antes das duas ultimas casas decimais
            const cabeca_pescoco = document.getElementById('validationCustomcabeca_pescoco');//text que não deve aceitar numeros
            const sistema_digestivo = document.getElementById('validationCustomsistema_digestivo');//text que não deve aceitar numeros
            const sistema_venoso = document.getElementById('validationCustomsistema_venoso');//text que não deve aceitar numeros
            const sistema_respiratorio = document.getElementById('validationCustomsistema_respiratorio');//text que não deve aceitar numeros
            const sistema_cardiovascular = document.getElementById('validationCustomsistema_cardiovascular');//text que não deve aceitar numeros
            const consideracoes_outros_sistemas = document.getElementById('validationCustomconsideracoes_outros_sistemas');//text que não deve aceitar numeros

            peso.addEventListener('input', function() {
                // Limpa qualquer formatação anterior e mantém apenas números e vírgulas
                let value = peso.value.replace(/[^\d,]/g, '');

                // Separa a parte inteira da parte decimal
                let [parteInteira, parteDecimal] = value.split(',');

                // Remove os pontos da parte inteira
                parteInteira = parteInteira.replace(/\./g, '');

                // Adiciona um ponto a cada 2 dígitos da parte inteira
                parteInteira = parteInteira.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

                // // Limita a parte decimal a 2 dígitos
                // if (parteDecimal && parteDecimal.length > 2) {
                // parteDecimal = parteDecimal.substr(0, 2);
                // }

                // // Limita a parte decimal a 2 dígitos
                // if (parteInteira && parteInteira.length > 5) {
                //     parteInteira = parteInteira.substr(0, 5);
                // }

                // Monta o valor formatado
                value = parteInteira + (parteDecimal ? ',' + parteDecimal : '');

                peso.value = value;
            });

            altura.addEventListener('input', function() {
                // Limpa qualquer formatação anterior e mantém apenas números e uma única vírgula
                let value = altura.value.replace(/[^\d,]/g, '');

                // Separa a parte inteira da parte decimal
                let [parteInteira, parteDecimal] = value.split(',');

                // Limita a parte inteira a três dígitos
                parteInteira = parteInteira.substring(0, 3);

                // Remove os pontos da parte inteira
                parteInteira = parteInteira.replace(/\./g, '');

                // Adiciona um ponto a cada 2 dígitos da parte inteira
                parteInteira = parteInteira.replace(/\B(?=(\d{2})+(?!\d))/g, '.');

                // Monta o valor formatado
                value = parteInteira + (parteDecimal ? ',' + parteDecimal : '');

                altura.value = value;
            });

            circunferencia_abdominal.addEventListener('input', function(){
                let value = circunferencia_abdominal.value;
                value = value.replace(/(\d{3})\d+?$/, '$1');
                circunferencia_abdominal.value=value;
            });

            circunferencia_quadril.addEventListener('input', function(){
                let value = circunferencia_quadril.value;
                value = value.replace(/(\d{3})\d+?$/, '$1');
                circunferencia_quadril.value=value;
            });

            circunferencia_pescoco.addEventListener('input', function(){
                let value = circunferencia_pescoco.value;
                value = value.replace(/(\d{2})\d+?$/, '$1');
                circunferencia_pescoco.value=value;
            });

            pressao_arterial.addEventListener('input', function(){
                let value = pressao_arterial.value;
                value = value.replace(/(\d{7})\d+?$/, '$1');//mudar o max lenght do campo
                pressao_arterial.value=value;
            });

            frequencia_cardiaca.addEventListener('input', function(){
                let value = frequencia_cardiaca.value;
                value = value.replace(/(\d{3})\d+?$/, '$1');
                frequencia_cardiaca.value=value;
            });

        </script>
    @endslot
@endcomponent