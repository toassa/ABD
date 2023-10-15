var cookies = document.getElementById('cookies');

function aceita(){
    localStorage.lgpd = 'true';
    cookies.classList.remove('cookies-show');
}

if(localStorage.lgpd == 'true'){
    cookies.classList.remove('cookies-show');
}else{
    cookies.classList.add('cookies-show');
}