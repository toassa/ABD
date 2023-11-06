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
	@if ($page == 'cadastrar')
            <form action="{{route('familiar_historico.salvar', ['num_registro' => $dados->num_registro, 'num_USP' => Auth::user()->num_USP])}}" method="post" class="row g-3 needs-validation" novalidate>
        @else
            <form action="{{route('familiar_historico.atualizar', ['num_registro' => $dados->num_registro, 'num_USP' => Auth::user()->num_USP])}}" method="post" class="row g-3 needs-validation" novalidate>
        @endif

        <form action="{{route('familiar_historico.salvar', ['num_registro' => $dados->num_registro, 'num_USP' => $dados->num_USP])}}" method="post" class="row g-3 needs-validation" novalidate>
            {{ csrf_field() }}
	@if ($page != 'cadastrar')
                <input type="hidden" name="_method" value="put">
            @endif

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
		@if ($page == 'cadastrar')
                    <button class="btn btn-giga btn-primary-confirm" type="submit">Cadastrar</button>
                @else
                    <button class="btn btn-giga btn-primary-confirm" type="submit">Atualizar</button>
                @endif
            </div>
        </form>
        <script>
            const dm1 = document.getElementById('validationCustomdm1');//text que não deve aceitar numeros
        </script>
	<script>
            document.addEventListener('DOMContentLoaded', function () {
                var checkboxes = document.querySelectorAll('input[name="dm[]"]');
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
                var checkboxes = document.querySelectorAll('input[name="obesidade[]"]');
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
                var checkboxes = document.querySelectorAll('input[name="vitiligo[]"]');
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
                var checkboxes = document.querySelectorAll('input[name="doenca_tireoideana[]"]');
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
                var checkboxes = document.querySelectorAll('input[name="displidemia[]"]');
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
                var checkboxes = document.querySelectorAll('input[name="alopecia[]"]');
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
                var checkboxes = document.querySelectorAll('input[name="artrite_reumatoide[]"]');
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
                var checkboxes = document.querySelectorAll('input[name="doenca_coronariana[]"]');
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
                var checkboxes = document.querySelectorAll('input[name="has[]"]');
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
                var checkboxes = document.querySelectorAll('input[name="doenca_celiaca[]"]');
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