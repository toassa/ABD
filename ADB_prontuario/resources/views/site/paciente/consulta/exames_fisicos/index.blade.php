@component('components.pages.menu_consulta')
    @slot('rota_volta')
        {{route('consulta.menu_atendimento', $dados->num_registro)}}
    @endslot
    @slot('num_registro')
        {{$dados->num_registro}}
    @endslot
    @slot('nome')
        {{$dados->nome}}
    @endslot
    @slot('content_menu')
        <form action="{{route('exames_fisicos.salvar', ['num_registro' => $dados->num_registro, 'num_USP' => $dados->num_USP])}}" method="post" class="row g-3 needs-validation" novalidate>
            {{ csrf_field() }}
            <h1 class="text-center">Exames físicos</h1>
            <p>Atenção, seguir o roteiro físico para guiar o exame. Adicionar aqui as alterações observadas em cada aparelho. Caso não se observe alterações, anotar NDN (nada digno de nota), especificando no roteiro físico os achados.</p>
            @include('site.paciente.consulta.exames_fisicos._form')
            <div class="col-12 col-btn-form">
                <button class="btn btn-giga btn-primary-darker" type="reset">Limpar</button>
                <button class="btn btn-giga btn-primary" type="submit">Cadastrar</button>
            </div>
        </form>
    @endslot
@endcomponent