    </main>
    {{-- Div que exibe o aviso de cookies --}}
    <div class="cookies" id="cookies">
        <div class="cookies-content">
            {{-- Imagem do cookie --}}
            <img class="cookies-img" src="{{asset('images/cookie.png')}}" alt="Cookie">
            {{-- Texto da div --}}
            <div class="cookies-txt">
                <h3>Esse site utiliza Cookies</h3>
                <p>Ao utilizar nosso sistema, você concorda com a nossa política de privacidade e gerenciamento dos seus dados. Clique no botão a seguir para consentir. Caso tenha dúvidas, acesse nossos termos pelo link abaixo.</p>
                {{-- Link que redireciona à pagina de privacidade --}}
                <a href="{{route('cookies')}}">Política de privacidade</a>
            </div>
            {{-- Botão de concordo --}}
            <div class="cookies-btn">
                <button onclick="aceita()">Concordo</button>
            </div>
        </div>
    </div> {{-- Cookies --}}

    {{-- Chamada dos arquivos CSS --}}

    {{-- Modo escuro --}}
    <script src="{{asset('js/themes.js')}}"></script>

    {{-- Cookies --}}
    <script src="{{asset('js/cookies.js')}}"></script>

    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
    {{-- Validação dos formulários --}}
    <script src="{{asset('js/form-cadastrar.js')}}"></script>
    
    {{-- Pop-up que exibe informações dos formulários do paciente --}}
    <script src="{{asset('js/popup.js')}}"></script>
</body>
</html>