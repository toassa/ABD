const modal = document.getElementById('modal_excluir');
const btn_cancelar = document.getElementById('btn_cancelar');
const btn_aparece = document.getElementById('btn_aparece');

function show_dialog_excluir(){
    // var ID = $(this).data('num_USP')
    modal.style.display = "block";
}

function hide_dialog_excluir(){
    modal.style.display = "none";
}