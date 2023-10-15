    </main>
    <div class="cookies" id="cookies">
        <div class="cookies-content">
            <img class="cookies-img" src="{{asset('images/cookie.png')}}" alt="Cookie">
            <div class="cookies-txt">
                <h3>Esse site utiliza Cookies</h3>
                <p>Ao utilizar nosso sistema, você concorda com a nossa política de privacidade e gerenciamento dos seus dados. Clique no botão a seguir para consentir. Caso tenha dúvidas, acesse nossos termos pelo link abaixo.</p>
                <a href="{{route('cookies')}}">Política de privacidade</a>
            </div>
            <div class="cookies-btn">
                <button onclick="aceita()">Concordo</button>
            </div>
        </div>
    </div>
    <script src="{{asset('js/themes.js')}}"></script>
    <script src="{{asset('js/cookies.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="{{asset('js/form-cadastrar.js')}}"></script>
    <script src="{{asset('js/popup.js')}}"></script>
</body>
</html>