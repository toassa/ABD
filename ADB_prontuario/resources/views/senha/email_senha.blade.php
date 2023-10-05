<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
<div class="mail-container" style="color: #000; font-family: var(--font-family, sans-serif);">
    <center>
        {{-- <img src="{{asset('images/logo_ADB.png')}}" alt="Logo da ADB"> --}}
    </center>
    <h2>Associação dos Diabéticos de Bauru</h2>
    <h1>Caro usuário,</h1>
    <p>Esse é seu código de autenticação para conseguir mudar de senha: <b>{{$info->codigo}}</b></p><br>
    <p>Caso não tenha sido você ou tenha ocorrido uma falha, entre em contato com os administradores da plataforma.</p>
    <pre>
    Contato:
        E-mail: adb.bauru@gmail.com;
        Telefone: (14) 3224-2905;
        Endereço: Av. Nações Unidas, 28-40 - Jardim Panorama, Bauru - SP, 17012-202;
    </pre>
</div>