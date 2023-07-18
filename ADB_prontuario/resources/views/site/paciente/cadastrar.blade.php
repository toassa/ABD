@extends('layout.site')

@section('titulo-pagina', 'Cadastrar Paciente')

@section('content')
  @component('components.voltar')
    @slot('rota_voltar')
        {{route('admin.opcoes')}}
    @endslot
  @endcomponent
@endsection