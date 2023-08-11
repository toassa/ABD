@extends('layout.site')

@section('titulo-pagina','Primeiro Atendimento')

@section('content')
    @component('components.items.back')@endcomponent
    <section class="square-content square-content--cadastro-consulta">
        <div class="menu_consulta">
            <div class="menu_img">
                <img src="{{asset('images\logo_ADB.png')}}" alt="Logo da ADB">
            </div>
            <div class="menu-sections">
                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        sick
                    </span>
                @endslot
                @slot('text_menu')
                    Atividades Educativas
                @endslot
                @endcomponent

                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        sick
                    </span>
                @endslot
                @slot('text_menu')
                    Automonitorização
                @endslot
                @endcomponent

                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        sick
                    </span>
                @endslot
                @slot('text_menu')
                    Dados Cardiovasculares
                @endslot
                @endcomponent

                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        sick
                    </span>
                @endslot
                @slot('text_menu')
                    Comorbidade
                @endslot
                @endcomponent

                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        sick
                    </span>
                @endslot
                @slot('text_menu')
                    Complicações
                @endslot
                @endcomponent

                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        sick
                    </span>
                @endslot
                @slot('text_menu')
                    Diagnóstico Atual
                @endslot
                @endcomponent

                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        sick
                    </span>
                @endslot
                @slot('text_menu')
                    Dieta
                @endslot
                @endcomponent

                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        sick
                    </span>
                @endslot
                @slot('text_menu')
                    Exames físicos
                @endslot
                @endcomponent

                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        sick
                    </span>
                @endslot
                @slot('text_menu')
                    Exercícios físicos
                @endslot
                @endcomponent

                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        sick
                    </span>
                @endslot
                @slot('text_menu')
                    Histórico familiar
                @endslot
                @endcomponent

                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        sick
                    </span>
                @endslot
                @slot('text_menu')
                    Frequência de acompanhamento
                @endslot
                @endcomponent

                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        sick
                    </span>
                @endslot
                @slot('text_menu')
                    Dados ginecológicos
                @endslot
                @endcomponent

                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        sick
                    </span>
                @endslot
                @slot('text_menu')
                    Hábitos de vida
                @endslot
                @endcomponent

                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        sick
                    </span>
                @endslot
                @slot('text_menu')
                    Internações
                @endslot
                @endcomponent

                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        sick
                    </span>
                @endslot
                @slot('text_menu')
                    Nascimento
                @endslot
                @endcomponent

                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        sick
                    </span>
                @endslot
                @slot('text_menu')
                    Comprometimento Neuropático
                @endslot
                @endcomponent

                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        sick
                    </span>
                @endslot
                @slot('text_menu')
                    Exame dos pés
                @endslot
                @endcomponent

                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        sick
                    </span>
                @endslot
                @slot('text_menu')
                    Primeiro Diagnóstico
                @endslot
                @endcomponent

                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        sick
                    </span>
                @endslot
                @slot('text_menu')
                    Tratamento
                @endslot
                @endcomponent
            </div>
        </div>
        <div class="content-consulta">
            .
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('js/slide.js')}}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="{{asset('js/form-cadastro-paciente.js')}}"></script>
    <script src="{{asset('js/cidades-form.js')}}"></script>
@endsection