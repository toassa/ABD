@extends('layout.site')

@section('titulo-pagina','Primeiro Atendimento')

@section('content')
    @component('components.items.voltar')
        @slot('rota_voltar')
            {{$rota_volta}}
        @endslot
    @endcomponent
    <div class="usuario">
      <p>{{$nome}}</p>
      <span class="material-symbols-outlined">
        person_search
      </span>
    </div>
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
                        first_page
                    </span>
                @endslot
                @slot('text_menu')
                    Primeiro Diagnóstico
                @endslot
                @slot('route_menu')
                    {{route('primeiro_diagnostico.index', $num_registro)}}
                @endslot
                @endcomponent

                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        diagnosis
                    </span>
                @endslot
                @slot('text_menu')
                    Diagnóstico Atual
                @endslot
                @slot('route_menu')
                    {{-- {{route('diagnostico_atual.index', $num_registro)}} --}}
                @endslot
                @endcomponent

                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        sync_problem
                    </span>
                @endslot
                @slot('text_menu')
                    Complicações
                @endslot
                @slot('route_menu')
                    {{route('complicacoes.index', $num_registro)}}
                @endslot
                @endcomponent

                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        medication_liquid
                    </span>
                @endslot
                @slot('text_menu')
                    Tratamento
                @endslot
                @slot('route_menu')
                    {{route('tratamento.index', $num_registro)}}
                @endslot
                @endcomponent

                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        ecg
                    </span>
                @endslot
                @slot('text_menu')
                    Automonitorização
                @endslot
                @slot('route_menu')
                    {{route('consulta.automonitorizacao', $num_registro)}}
                @endslot
                @endcomponent

                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        child_care
                    </span>
                @endslot
                @slot('text_menu')
                    Nascimento
                @endslot
                @slot('route_menu')
                    {{route('consulta.nascimento', $num_registro)}}
                @endslot
                @endcomponent

                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        contract
                    </span>
                @endslot
                @slot('text_menu')
                    Dados ginecológicos
                @endslot
                @slot('route_menu')
                    {{route('consulta.ginecologico_dados', $num_registro)}}
                @endslot
                @endcomponent
                
                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        autofps_select
                    </span>
                @endslot
                @slot('text_menu')
                    Frequência de acompanhamento
                @endslot
                @slot('route_menu')
                {{route('consulta.frequencia_acompanhamento', $num_registro)}}
                @endslot
                @endcomponent

                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        ward
                    </span>
                @endslot
                @slot('text_menu')
                    Internações
                @endslot
                @slot('route_menu')
                    {{route('consulta.internacoes', $num_registro)}}
                @endslot
                @endcomponent

                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        cardiology
                    </span>
                @endslot
                @slot('text_menu')
                    Dados Cardiovasculares
                @endslot
                @slot('route_menu')
                    {{route('consulta.cardiovascular_dados', $num_registro)}}
                @endslot
                @endcomponent

                
                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        accessible_forward
                    </span>
                @endslot
                @slot('text_menu')
                    Comorbidade
                @endslot
                @slot('route_menu')
                    {{route('consulta.comorbidades', $num_registro)}}
                @endslot
                @endcomponent

                
                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        diversity_3
                    </span>
                @endslot
                @slot('text_menu')
                    Histórico familiar
                @endslot
                @slot('route_menu')
                    {{route('consulta.familiar_historico', $num_registro)}}
                @endslot
                @endcomponent

                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        nightlife
                    </span>
                @endslot
                @slot('text_menu')
                    Hábitos de vida
                @endslot
                @slot('route_menu')
                    {{route('consulta.habitos_vida', $num_registro)}}
                @endslot
                @endcomponent

                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        directions_run
                    </span>
                @endslot
                @slot('text_menu')
                    Exercícios físicos
                @endslot
                @slot('route_menu')
                    {{route('consulta.exercicios_fisicos', $num_registro)}}
                @endslot
                @endcomponent

                  @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        monitor_weight_gain
                    </span>
                @endslot
                @slot('text_menu')
                    Dieta
                @endslot
                @slot('route_menu')
                    {{route('consulta.dieta', $num_registro)}}
                @endslot
                @endcomponent

                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        history_edu
                    </span>
                @endslot
                @slot('text_menu')
                    Atividades Educativas
                @endslot
                @slot('route_menu')
                    {{route('consulta.atividades_educativas', $num_registro)}}
                @endslot
                @endcomponent

                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        sports_gymnastics
                    </span>
                @endslot
                @slot('text_menu')
                    Exames físicos
                @endslot
                @slot('route_menu')
                    {{route('consulta.exames_fisicos', $num_registro)}}
                @endslot
                @endcomponent

                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        footprint
                    </span>
                @endslot
                @slot('text_menu')
                    Exame dos pés
                @endslot
                @slot('route_menu')
                    {{route('consulta.pes_exame', $num_registro)}}
                @endslot
                @endcomponent

                
                @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                    psychology
                    </span>
                @endslot
                @slot('text_menu')
                    Comprometimento Neuropático
                @endslot
                @slot('route_menu')
                    {{route('consulta.neuropatico_comprometimento', $num_registro)}}
                @endslot
                @endcomponent

                {{-- @component('components.items.menu-section')
                @slot('id_menu')
                    section_molestia
                @endslot
                @slot('icon_menu')
                    <span class="material-symbols-outlined">
                        history_edu
                    </span>
                @endslot
                @slot('text_menu')
                    Atividades Educativas
                @endslot
                @slot('route_menu')
                    {{route('consulta.atividades_educativas', $num_registro)}}
                @endslot
                @endcomponent --}}

            </div>
        </div>
        <div class="content-consulta">
            {{$content_menu}}
        </div>
    </section>
    <script src="{{asset('js/show-input.js')}}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('js/slide.js')}}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="{{asset('js/form-cadastro-paciente.js')}}"></script>
    <script src="{{asset('js/cidades-form.js')}}"></script>
@endsection