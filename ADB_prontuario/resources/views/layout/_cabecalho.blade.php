{{-- Cabeçalho padrão a todas as páginas --}}
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

    <link rel="icon" type="imagem/png" href="{{asset('images/logo_ADB.png')}}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    {{-- Apresenta o título de cada página de acordo com o valor fornecido por no início das páginas --}}
    <title>@yield('titulo-pagina')</title>
</head>
{{-- Chama a função javascript --}}
<body>
    {{-- Classe principal, main, que engloba todas as outras --}}
    <main class="content align-content" id="content">
    {{-- Função que verifica a condição de usuário logado ou não --}}
    @if(Auth::check())
        {{-- Caso o usuário esteja logado, os itens do menu lateral são exibidos --}}

        {{-- Chamada dos components que contém o HTML do menu --}}
        @component('components.items.menu')
            {{-- Envio do valor da rota --}}
            @slot('rota_sair')
            	{{route('login.sair')}}
            @endslot
            {{-- Envio do valor do nome --}}
            @slot('nome_user')
            	{{$primeiroNome = explode(' ', Auth::user()->name)[0]}}
            @endslot
    	@endcomponent
    @endif    