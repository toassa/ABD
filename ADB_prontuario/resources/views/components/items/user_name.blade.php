<div class="usuario">
    <a href="{{route('login.sair')}}">
        <a href="{{route('login.sair')}}">{{$primeiroNome = explode(' ', Auth::user()->name)[0]}}</a>
        <img src="{{asset('images/icons/out-icon.svg')}}" alt="Ícone de log-out">
    </a>
</div>