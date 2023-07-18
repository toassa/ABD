@extends('layout.site')

@section('titulo-pagina', 'Pesquisar Paciente')

@section('content')
  @component('components.voltar')
    @slot('rota_voltar')
        {{route('admin.opcoes')}}
    @endslot
  @endcomponent
  <section class="square-content square-content--pacientes-pesquisar">¨
    <h1 class="text-center">Pesquisar Paciente</h1>
    <form action="{{route('paciente.buscar')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="row g-3 row-pesquisar">
        <div class="col-sm-8">
            <input type="text" class="form-control" placeholder="Digite o paciente" name="name" aria-label="Nome do paciente">
        </div>
        <div class="col-sm">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
      </div>
    </form>
    <a href="{{route('paciente.cadastrar')}}" class="btn btn-primary">Cadastrar novo Paciente</a>
  </section>
@endsection