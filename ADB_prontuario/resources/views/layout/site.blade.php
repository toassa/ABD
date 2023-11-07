{{-- Chamada do arquivo que contém todo o conteúdo do cabeçalho, e que será padrão em todas as páginas --}}
@include('layout._cabecalho')

{{-- Exibição do conteúdo de cada página. A função 'content' será chamada em cada arquivo referente a uma página --}}
@yield('content')

{{-- Chamada do arquivo que contém todo o conteúdo do rodapé, e que será padrão em todas as páginas --}}
@include('layout._rodape')