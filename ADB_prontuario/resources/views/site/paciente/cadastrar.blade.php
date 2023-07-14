@extends('layout.site')

@section('titulo-pagina', 'Opções')

@section('content')
  @component('components.voltar')
    @slot('rota_voltar')
        {{route('admin.opcoes')}}
    @endslot
  @endcomponent
@endsection