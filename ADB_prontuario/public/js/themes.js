var checkTheme = document.getElementById('change-theme');
var content = document.getElementById('content');
var icon = document.getElementById('icon-theme');


function changeDarkMode() {
    if (checkTheme.checked) {
        icon.innerHTML = "dark_mode";
        content.classList.add('dark');
        localStorage.setItem('dark', '1');
    } else {
        icon.innerHTML = "light_mode";
        content.classList.remove('dark');
        localStorage.removeItem('dark');
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
