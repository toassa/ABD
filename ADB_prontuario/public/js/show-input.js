let select = document.getElementById('validationCustomSelectDefine');
let input = document.getElementById('input_show');

let select2 = document.getElementById('validationCustomSelectDefine2');
let input2 = document.getElementById('input_show2');

let select_double = document.getElementById('validationCustomSelectDefineDouble');
let input_double = document.getElementById('input_show_double');
let input_double2 = document.getElementById('input_show_double2');

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

// console.log("Selected value:", select_double.value);
select_double.addEventListener('change', function() {
    if (select_double.value == '1') {
        input_double.style.display = 'block';
        input_double2.style.display = 'block';
    } else {
        input_double.style.display = 'none';
        input_double2.style.display = 'none';
    }
});