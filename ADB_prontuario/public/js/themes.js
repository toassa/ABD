var checkTheme = document.getElementById('change-theme');
var contentTheme = document.getElementById('content');
var iconTheme = document.getElementById('icon-theme');


function changeDarkMode() {
    if (checkTheme.checked) {
        iconTheme.innerHTML = "dark_mode";
        contentTheme.classList.add('dark');
        localStorage.setItem('dark', '1');
    } else {
        iconTheme.innerHTML = "light_mode";
        contentTheme.classList.remove('dark');
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
