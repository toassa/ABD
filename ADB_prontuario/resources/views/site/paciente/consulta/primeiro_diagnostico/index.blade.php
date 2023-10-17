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
        @if ()
            <form action="{{route('primeiro_diagnostico.salvar', ['num_registro' => $dados->num_registro, 'num_USP' => $dados->num_USP])}}" method="_POST" class="row g-3 needs-validation" novalidate>
        @else
            <form action="{{route('primeiro_diagnostico.salvar', ['num_registro' => $dados->num_registro, 'num_USP' => $dados->num_USP])}}" method="_POST" class="row g-3 needs-validation" novalidate>
        @endif
           {{ csrf_field() }}
            <h1 class="text-center">Primeiro Diagnóstico</h1>
            <div class="pagination-container">
                <div class="pagination-content">
                    @include('site.paciente.consulta.primeiro_diagnostico._form')
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
                @if ($page == 'cadastrar')
                    <button class="btn btn-giga btn-primary-confirm" type="submit">Cadastrar</button>
                @else
                    <button class="btn btn-giga btn-primary-confirm" type="submit">Atualizar</button>
                @endif
            </div>
        </form>

        <script>
            const ano = document.getElementById('validationCustomano');//number
            const idade = document.getElementById('validationCustomidade')//number
            const qual_fator_emocional = document.getElementById('validationCustomqual_fator_emocional')//text que não deve aceitar numeros
            const quais_infeccoes =document.getElementById('validationCustomquais_infeccoes');//text que não deve aceitar numeros
            const periodo_sintomas_diagnostico =document.getElementById('validationCustomperiodo_sintomas_diagnostico');//number

            ano.addEventListener('input', function() {
                let value = ano.value;
                value = value.replace(/\D/g, ''); // Remove todos os caracteres não numéricos
                value = value.replace(/(\d{4})\d+?$/, '$1');
                const currentYear = new Date().getFullYear(); // Obtém o ano atual
                if(value>1000)
                if (value < 1903 || value > currentYear) {
                    alert("O ano deve estar entre 1903 e o ano atual.");
                    value = '';
                    ano.value=value;
                    return;
                } else {
                    ano.value=value;
                }
            });


            idade.addEventListener('input', function(){
                let value = idade.value;
                value = value.replace(/(\d{3})\d+?$/, '$1');//mudar o max lenght do campo
                if(value>130 || value<0)
                {
                    alert("A idade deve ser positiva e menor que 130");
                    value = '';
                    idade.value=value;
                    return;
                }
                idade.value=value;
            });

            periodo_sintomas_diagnostico.addEventListener('input', function(){
                let value = periodo_sintomas_diagnostico.value;
                value = value.replace(/(\d{3})\d+?$/, '$1');//mudar o max lenght do campo
                if(value<0)
                {
                    alert("A quantidade de meses deve ser postiva");
                    value = '';
                    periodo_sintomas_diagnostico.value=value;
                    return;
                }
                periodo_sintomas_diagnostico.value=value;
            });

        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var checkboxes = document.querySelectorAll('input[name="sintomas[]"]');
                var labels = document.querySelectorAll('label[for^="validationFormCheck"]');
                var form = document.querySelector('.needs-validation');
            
                form.addEventListener('submit', function (event) {
                    var atLeastOneChecked = Array.from(checkboxes).some(function (checkbox) {
                        return checkbox.checked;
                    });
            
                    if (!atLeastOneChecked) {
                        event.preventDefault(); // Impede o envio do formulário
            
                        checkboxes.forEach(function (checkbox) {
                            if (!checkbox.checked) {
                                checkbox.classList.add('checkbox-error');
                                var label = document.querySelector('label[for="' + checkbox.id + '"]');
                                label.classList.add('label-error');
                            }
                        });
                    } else {
                        checkboxes.forEach(function (checkbox) {
                            checkbox.classList.remove('checkbox-error');
                        });
            
                        labels.forEach(function (label) {
                            label.classList.remove('label-error');
                        });
                    }
                });
            
                checkboxes.forEach(function (checkbox) {
                    checkbox.addEventListener('change', function () {
                        // Quando uma checkbox é marcada, remove as classes de erro
                        if (checkbox.checked) {
                            checkboxes.forEach(function (checkbox) {
                                checkbox.classList.remove('checkbox-error');
                            });
                
                            labels.forEach(function (label) {
                                label.classList.remove('label-error');
                            });
                            // checkbox.classList.remove('checkbox-error');
                            // var label = document.querySelector('label[for="' + checkbox.id + '"]');
                            // label.classList.remove('label-error');
                        }
                    });
                });
            });
        </script>
    @endslot
@endcomponent