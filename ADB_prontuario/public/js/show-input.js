function mostraDados(){
    let select = document.getElementById('validationCustomSelectDefine');
    let input = document.getElementById('input_show');
    let input_multiple = document.getElementById('input_show_multiple');
    let input_multiple2 = document.getElementById('input_show_multiple2');
    let input_multiple3 = document.getElementById('input_show_multiple3');
    let input_multiple4 = document.getElementById('input_show_multiple4');
    let input_multiple5 = document.getElementById('input_show_multiple5');
    let input_multiple6 = document.getElementById('input_show_multiple6');
    let input_multiple7 = document.getElementById('input_show_multiple7');
    let input_multiple8 = document.getElementById('input_show_multiple8');
    
    if (select.value == '0') {
        input.style.display = 'none';
        input_multiple.style.display = 'none';
        input_multiple2.style.display = 'none';
        input_multiple3.style.display = 'none';
        input_multiple4.style.display = 'none';
        input_multiple5.style.display = 'none';
        input_multiple6.style.display = 'none';
        input_multiple7.style.display = 'none';
        input_multiple8.style.display = 'none';
    } else {
        input.style.display = 'block';
        input_multiple.style.display = 'block';
        input_multiple2.style.display = 'block';
        input_multiple3.style.display = 'block';
        input_multiple4.style.display = 'block';
        input_multiple5.style.display = 'block';
        input_multiple6.style.display = 'block';
        input_multiple7.style.display = 'block';
        input_multiple8.style.display = 'block';
    }
}

function mostraDados2(){
    let select2 = document.getElementById('validationCustomSelectDefine2');
    let input2 = document.getElementById('input_show2');

    if (select2.value == '1') {
        input2.style.display = 'block';
    } else {
        input2.style.display = 'none';
    }
}

function mostraDadosMultiple(){
    let select_double = document.getElementById('validationCustomSelectDefineDouble');
    let input_double = document.getElementById('input_show_double');
    let input_double2 = document.getElementById('input_show_double2');

    if (select_double.value == '1') {
        input_double.style.display = 'block';
        input_double2.style.display = 'block';
    } else {
        input_double.style.display = 'none';
        input_double2.style.display = 'none';
    }
}

function mostraDados3(){
    let select = document.getElementById('validationCustomSelectDefine3');
    let input = document.getElementById('input_show3');
    let input_multiple = document.getElementById('input_show_multiple3');
    let input_multiple2 = document.getElementById('input_show_multiple23');
    let input_multiple3 = document.getElementById('input_show_multiple33');
    let input_multiple4 = document.getElementById('input_show_multiple43');
    
    if(select.value == 'Sim') {
        input.style.display = 'block';
        input_multiple.style.display = 'block';
        input_multiple2.style.display = 'block';
        input_multiple3.style.display = 'block';
        input_multiple4.style.display = 'block';
    }else {
        input.style.display = 'none';
        input_multiple.style.display = 'none';
        input_multiple2.style.display = 'none';
        input_multiple3.style.display = 'none';
        input_multiple4.style.display = 'none';
    }
}

function verificarSelect() {
    mostraDados();
    mostraDados2();
    mostraDados3();
    mostraDadosMultiple();
}

document.addEventListener("DOMContentLoaded", function() {
    verificarSelect(); // Chama a função para verificar o select inicial
});





