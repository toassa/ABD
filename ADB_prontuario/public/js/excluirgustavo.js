const modal = document.getElementById('modal_excluir');
const btn_cancelar = document.getElementById('btn_cancelar');
const btn_aparece = document.getElementById('btn_aparece');


var ID;
function show_dialog_excluir(userID,userName){
    document.querySelectorAll('.btnexcluir').forEach(function(button){
    // var ID = $(this).data('num_USP')
    document.querySelector('#userexcluir').textContent=userName;   
    modal.style.display = "block";
    ID = userID;
    document.querySelector('#excluirusuarior').textContent=userID;   
 
    });
}



function hide_dialog_excluir(){
    modal.style.display = "none";
}



document.querySelectorAll('.btn-excluir').forEach(function(button) {
    button.addEventListener('click', function(event) {


        window.location.href="http://127.0.0.1:8000/user/form/excluir/"+ID;
    });
});