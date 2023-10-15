var checkTheme = document.getElementById('change-theme');
var content = document.getElementById('content');

function changeDarkMode() {
    if (checkTheme.checked) {
        content.classList.add('dark');
        localStorage.setItem('dark', '1'); // Armazene a preferência do usuário
    } else {
        content.classList.remove('dark');
        localStorage.removeItem('dark'); // Remova a preferência do usuário
    }
}

function loadTheme() {
    const darkMode = localStorage.getItem('dark');
    if (darkMode === '1') {
        checkTheme.checked = true; // Marque a caixa de seleção se a preferência do usuário existir
        changeDarkMode();
    }
}

loadTheme();

checkTheme.addEventListener("change", function() {
    changeDarkMode();
});
