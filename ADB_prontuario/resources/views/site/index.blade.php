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
        <img src="{{asset('images/pack/senhor-computador.png')}}" alt="Médico sentado ao computador">
        <nav class="square-content square-content--opcoes">
            @if (Auth::user()->ativo == true)
                <h2>Escolha entre as opções:</h2>
                <a href="{{route('opcao.pacientes')}}" class="button-white-blue button-white-blue--opcoes">Paciente</a><br>
                @if (Auth::user()->administrador == true)
                    <a href="{{route('opcao.users')}}" class="button-white-blue button-white-blue--opcoes">Organização</a>
                @endif
            @else
                {{-- <h2>Ops... Parece que você não está ativo no nosso sistema</h2> --}}
                {{-- <p>Tente entrar em contato com os administradores da plataforma para resolver o problema</p> --}}
            @endif
        </nav>
    </section>
@endsection