@extends('layout.site')

@section('titulo-pagina', 'Opções')

@section('content')
    @component('components.leave')
        @slot('rota_sair')
            {{route('admin.login')}}
        @endslot
    @endcomponent
    <nav class="user-index">
        <h1 class="text-center">Bem-vindo(a)</h1>
        <div class="square-content square-content--user-index">
            <div class="container text-center">
                <div class="row">
                  <div class="col">
                    1 of 3
                  </div>
                  <div class="col">
                    2 of 3
                  </div>
                  <div class="col">
                    3 of 3
                  </div>
                </div>
                <div class="row">
                    <div class="col">
                      1 of 3
                    </div>
                    <div class="col">
                      2 of 3
                    </div>
                    <div class="col">
                      3 of 3
                    </div>
                  </div>
              </div>
        </div>
    </nav>
@endsection