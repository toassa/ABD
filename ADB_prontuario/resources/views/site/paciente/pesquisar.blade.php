@extends('layout.site')

@section('titulo-pagina', 'Opções')

@section('content')
  @component('components.voltar')
    @slot('rota_voltar')
        {{route('admin.opcoes')}}
    @endslot
  @endcomponent
  <section class="square-content square-content--pacientes-pesquisar">¨
    <h1 class="text-center">Pesquisar Paciente</h1>
    <div class="row g-3 row-pesquisar">
        <div class="col-sm-8">
            <input type="text" class="form-control" placeholder="Digite o paciente" aria-label="Nome do paciente">
        </div>
        <div class="col-sm">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </div>
    <a href="{{route('paciente.cadastrar')}}" class="btn btn-primary">Cadastrar novo Paciente</a>
  </section>
@endsection