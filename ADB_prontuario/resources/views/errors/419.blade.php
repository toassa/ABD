@extends('layout.site')

@section('titulo-pagina', 'Erro 419')

@section('content')
    @component('components.items.error')
        @slot('rota_erro')
            {{asset('images/pack/419_error.png')}}
        @endslot
        @slot('nome_erro')
            {{'Erro 419'}}
        @endslot
        @slot('text_erro')
            {{'Ops! Parece que essa página expirou!'}}
        @endslot
    @endcomponent
@endsection