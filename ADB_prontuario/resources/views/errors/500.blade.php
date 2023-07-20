@extends('layout.site')

@section('titulo-pagina', 'Erro 500')

@section('content')
    @component('components.items.error')
        @slot('nome_erro')
            {{'Erro 500'}}
        @endslot
    @endcomponent
@endsection