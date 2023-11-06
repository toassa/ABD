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
            <form action="{{route('dieta.salvar', ['num_registro' => $dados->num_registro, 'num_USP' => Auth::user()->num_USP])}}" method="post" class="row g-3 needs-validation" novalidate>
        @else
            <form action="{{route('dieta.atualizar', ['num_registro' => $dados->num_registro, 'num_USP' => Auth::user()->num_USP])}}" method="post" class="row g-3 needs-validation" novalidate>
        @endif
            {{ csrf_field() }}
	    @if ($page != 'cadastrar')
                <input type="hidden" name="_method" value="put">
            @endif
            <h1 class="text-center">Dados de Dieta</h1>
            @include('site.paciente.consulta.dieta._form')
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
	<script>
            document.addEventListener('DOMContentLoaded', function () {
                var checkboxes = document.querySelectorAll('input[name="orientador[]"]');
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
	<script>
            document.addEventListener('DOMContentLoaded', function () {
                var checkboxes = document.querySelectorAll('input[name="dificuldade_dieta[]"]');
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
	<script>
            document.addEventListener('DOMContentLoaded', function () {
                var checkboxes = document.querySelectorAll('input[name="produtos_dieteticos[]"]');
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