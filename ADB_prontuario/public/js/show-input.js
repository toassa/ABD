let select = document.getElementById('validationCustomSelectDefine');
let input = document.getElementById('input_show');


let select2 = document.getElementById('validationCustomSelectDefine2');
let input2 = document.getElementById('input_show2');

// console.log("Selected value:", select.value);
select.addEventListener('change', function() {
    if (select.value == '1') {
        input.style.display = 'block';
    } else {
        input.style.display = 'none';
    }
});

select2.addEventListener('change', function() {
    if (select2.value == '1') {
        input2.style.display = 'block';
    } else {
        input2.style.display = 'none';
    }
});