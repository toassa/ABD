@extends('layout.site')

@section('titulo-pagina', 'Opções')

@section('content')
    @component('components.leave')
        @slot('rota_sair')
            {{route('login.sair')}}
        @endslot
    @endcomponent
    <div class="usuario">
        <p>{{Auth::user()->name}}</p>
        <span class="material-symbols-outlined">
            account_circle
        </span>
    </div>
    <section class="align-content">
        <img src="{{asset('images/pack/senhor-computador.png')}}" alt="Médico sentado ao computador">
        <nav class="square-content square-content--opcoes">
            <h2>Escolha entre as opções:</h2>
            <a href="{{route('opcao.pacientes')}}" class="button-white-blue button-white-blue--opcoes">Paciente</a><br>
            <a href="{{route('opcao.users')}}" class="button-white-blue button-white-blue--opcoes">Organização</a>
        </nav>
    </section>
@endsection