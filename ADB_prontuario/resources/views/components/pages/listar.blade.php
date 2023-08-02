<section class="square-content square-content--listar">
    {{$title}}
    <form action="{{$form_route}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row g-3 row-pesquisar row-pesquisar">
            <div class="col-sm-8">
                <input type="text" name="nome" class="form-control" placeholder="Digite o {{$quem}}" aria-label="Nome do {{$quem}}">
            </div>
            <div class="col-sm">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </div>
    </form>
    <div class="grid">
        {{$grid_titles}}
    </div>
    <div class="grid">
        {{$grid_content}}
    </div>
    <a href="{{$route_btn}}" class="btn btn-primary  btn-giga btn-list-editar">{{$text_btn}}</a>
</section>