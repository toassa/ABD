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
            <form action="{{route('comorbidades.salvar', ['num_registro' => $dados->num_registro, 'num_USP' => Auth::user()->num_USP])}}" method="post" class="row g-3 needs-validation form-consulta" novalidate>
        @else
            <form action="{{route('comorbidades.atualizar', ['num_registro' => $dados->num_registro, 'num_USP' => Auth::user()->num_USP])}}" method="post" class="row g-3 needs-validation form-consulta" novalidate>
        @endif
            {{ csrf_field() }}
            @if ($page != 'cadastrar')
                <input type="hidden" name="_method" value="put">
            @endif
            <h1 class="text-center">Comorbidades</h1>
            <div class="primas_usuario">
                <a href="{{route('paciente.configuracoes', $dados->num_registro)}}">
                    <a href="{{route('paciente.configuracoes', $dados->num_registro)}}" id="name_paciente">Paciente: {{$dados_paciente->nome}}</a>
                    <span class="material-symbols-outlined">
                    settings
                    </span>
                </a>
            </div>
            @include('site.paciente.consulta.comorbidades._form')
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
            document.addEventListener('DOMContentLoaded', function () {
                var checkboxes = document.querySelectorAll('input[name="doenca_cronica[]"]');
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
                var checkboxes = document.querySelectorAll('input[name="ocular[]"]');
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
                var checkboxes = document.querySelectorAll('input[name="neuropatia[]"]');
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