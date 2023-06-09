@extends('layout.site')

@section('titulo-pagina', 'Opções')

@section('content')
    @component('components.leave')
        @slot('rota_sair')
            {{route('admin.login')}}
        @endslot
    @endcomponent
    <section class="opcoes-content">
        <img src="{{asset('images/pack/senhor-computador.png')}}" alt="Médico sentado ao computador">
        <div class="square-content square-content--opcoes">
            <h2>Escolha entre as opções:</h2>
            <button>Paciente</button><br>
            <button href="{{route('opcao.pessoa')}}">Organização</button>
        </div>
    </section>
@endsection