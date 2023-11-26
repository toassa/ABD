
<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
    <p>{{$nome_user}}</p>
    <a href="{{route('cookies')}}">Política de privacidade</a>
    @if(Auth::user()->administrador == true)
    <a href="https://drive.google.com/file/d/1ly6houAfwCPTdzpWZ-ycW26Tdp4Uk3pI/view?usp=sharing" target="_blank" rel="noopener noreferrer">Precisa de ajuda?</a>
    @else
    <a href="https://drive.google.com/file/d/1NyzsgdI6SuJz33WC3cWBHwwkzGBeDNVc/view?usp=sharing" target="_blank" rel="noopener noreferrer">Precisa de ajuda?</a>
    @endif
    <a href="#">
        <input type="checkbox" name="change-theme" id="change-theme">
        <label for="change-theme">
            <span class="material-symbols-outlined" id="icon-theme">
                light_mode
            </span>
        </label>
    </a>
    <a href="{{$rota_sair}}" class="sair">
        Sair
    </a>
    </div>
</div>

<div id="name_usuario">
    <span onclick="openNav()">
        <span class="material-symbols-outlined">
            menu
        </span>
    </span>
</div>

<script>
    function openNav() {
        document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }
</script>