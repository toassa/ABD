{{-- Página inicial (index) --}}

@extends('layout.site')

@section('titulo-pagina', 'Opções')

@section('content')
    <section class="align-content">
        {{-- Verifica se o usuário está ativo para que, só assim, tenha acesso às funcionalidades --}}
        @if (Auth::user()->ativo == true)
            <img src="{{asset('images/pack/senhor-computador.png')}}" alt="Médico sentado ao computador">
            <nav class="square-content square-content--opcoes">
                <h2>Escolha entre as opções:</h2>
                <a href="{{route('opcao.pacientes')}}" class="button-white-blue button-white-blue--opcoes">Paciente</a><br>
                {{-- Só apresenta a função de 'Organização' se o usuário for um administrador --}}
                @if (Auth::user()->administrador == true)
                    <a href="{{route('opcao.users')}}" class="button-white-blue button-white-blue--opcoes">Organização</a>
                @endif
            </nav>
        {{-- Caso o usuário esteja inativo, ele recebe uma mensagem de aviso, não podendo acessar outras funcionalidades do sistema --}}
        @else
            <nav class="square-content square-content--opcoes">
                <h2>Ops... Parece que você não está ativo no nosso sistema</h2>
                <p>Tente entrar em contato com os administradores da plataforma para resolver o problema</p>
            </nav>
        @endif
    </section> {{-- Section do index --}}
@endsection