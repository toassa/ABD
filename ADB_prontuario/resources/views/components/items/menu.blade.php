
<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
    <p>{{$nome_user}}</p>
    <a href="#">
        <!-- <div class="check-theme"> -->
            <input type="checkbox" name="change-theme" id="change-theme">
            <label for="change-theme">
                <span class="material-symbols-outlined" id="icon-theme">
                    light_mode
                </span>
            </label>
        <!-- </div> -->
    </a>
    <a href="{{route('cookies')}}">Política de privacidade</a>
    <a href="#">Contact</a>
    </div>
</div>

<div id="name_usuario">
    <span onclick="openNav()">
        <span class="material-symbols-outlined">
            menu
        </span>
    </span>
</div>