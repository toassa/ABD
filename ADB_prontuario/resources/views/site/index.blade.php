@extends('layout.site')

@section('titulo-pagina', 'Opções')

@section('content')
    @component('components.leave')
        @slot('rota_sair')
            {{route('admin.login')}}
        @endslot
    @endcomponent
    <section class="align-content">
        <img src="{{asset('images/pack/senhor-computador.png')}}" alt="Médico sentado ao computador">
        <div class="square-content square-content--opcoes">
            <h2>Escolha entre as opções:</h2>
            <a href="{{route('opcao.pacientes')}}" class="button-opcoes">Paciente</a><br>
            <a href="{{route('opcao.pessoas')}}" class="button-opcoes">Organização</a>
        </div>
    </section>
@endsection