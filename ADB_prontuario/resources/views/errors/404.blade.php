@extends('layout.site')

@section('titulo-pagina', 'Erro 404')

@section('content')
    @component('components.items.error')
        @slot('rota_erro')
            {{asset('images/pack/404_error.png')}}
        @endslot
        @slot('nome_erro')
            {{'Erro 404'}}
        @endslot
        @slot('text_erro')
            {{'Ops! Não conseguimos encontrar essa página!'}}
        @endslot
    @endcomponent
@endsection