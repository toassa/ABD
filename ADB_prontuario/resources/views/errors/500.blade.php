@extends('layout.site')

@section('titulo-pagina', 'Erro 500')

@section('content')
    @component('components.items.error')
        @slot('rota_erro')
            {{asset('images/pack/500_error.png')}}
        @endslot
        @slot('nome_erro')
            {{'Erro 500'}}
        @endslot
        @slot('text_erro')
            {{'Parece que tivemos um problema interno no servidor.'}}
        @endslot
    @endcomponent
@endsection