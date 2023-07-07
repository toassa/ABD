@extends('layout.site')

@section('titulo-pagina', 'Erro 404')

@section('content')
    @component('components.error')
        @slot('nome_erro')
            {{'Erro 404'}}
        @endslot
    @endcomponent
@endsection