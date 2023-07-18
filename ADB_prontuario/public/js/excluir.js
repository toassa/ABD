const modal = document.getElementById('modal_excluir');
const btn_cancelar = document.getElementById('btn_cancelar');
const btn_aparece = document.getElementById('btn_aparece');

btn_aparece.onclick = function(){
    modal.showModal();
}

btn_cancelar.onclick = function(){
    modal.close();
}

// function show_dialog_excluir(num_usp){
//     document.getElementById('excluir'+num_usp).close();
// }

// function hide_dialog_excluir(num_usp){
//     document.getElementById('excluir'+num_usp).showModal();
// }