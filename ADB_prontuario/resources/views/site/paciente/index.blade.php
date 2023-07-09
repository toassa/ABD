@extends('layout.site')

@section('titulo-pagina', 'Opções')

@section('content')
    @component('components.back')
        @slot('rota_sair')
            {{route('admin.login')}}
        @endslot
    @endcomponent
@endsection