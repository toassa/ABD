@extends('layout.site')

@section('titulo-pagina', 'Opções')

@section('content')
    @component('components.error')
        @slot('nome_erro')
            {{'Erro 500'}}
        @endslot
    @endcomponent
@endsection