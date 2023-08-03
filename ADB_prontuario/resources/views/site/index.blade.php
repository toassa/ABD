@extends('layout.site')

@section('titulo-pagina', 'Opções')

@section('content')
    @component('components.items.leave')
        @slot('rota_sair')
            {{route('login.sair')}}
        @endslot
    @endcomponent
    @component('components.items.user_name')@endcomponent
    <section class="align-content">
        @if (Auth::user()->administrador == true)
        <img src="{{asset('images/pack/senhor-computador.png')}}" alt="Médico sentado ao computador">
        @endif
        <nav class="square-content square-content--opcoes">
            @if (Auth::user()->administrador == true)
                <h2>Escolha entre as opções:</h2>
                <a href="{{route('opcao.pacientes')}}" class="button-white-blue button-white-blue--opcoes">Paciente</a><br>
                @if (Auth::user()->administrador == true)
                    <a href="{{route('opcao.users')}}" class="button-white-blue button-white-blue--opcoes">Organização</a>
                @endif
            @else
            vc n ta ativo
            @endif
        </nav>
    </section>
@endsection