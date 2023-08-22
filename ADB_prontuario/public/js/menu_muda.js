// <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

$(document).ready(function() {
    var pathName = window.location.pathname;

    // Mapear caminho da URL para identificar a página atual
    var pageMapping = {
        "/login": "login",
        "/home": "home",
        "/perfil": "perfil",
        "/cadastro": "cadastro"
    };

    var currentPage = pageMapping[pathName];

    // Se a página atual não for encontrada no mapeamento, assuma "home"
    if (!currentPage) {
        currentPage = "home";
    }

    // Remover a classe "active" de todos os botões e adicionar à página atual
    $(".button").removeClass("active");
    $("#" + currentPage + "Button").addClass("active");

    $(".button").click(function() {
        // Remover a classe "active" de todos os botões
        $(".button").removeClass("active");
        // Adicionar a classe "active" apenas ao botão clicado
        $(this).addClass("active");
    });
});