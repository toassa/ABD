document.addEventListener('DOMContentLoaded', function() {
    const nomeInput = document.getElementById('validationCustomUsername');
    const numUSPInput = document.getElementById('validationCustomNumUSP');
    const mesaInput = document.getElementById('validationCustomUserMesa');

    numUSPInput.addEventListener('input', function() {
        let value1 = numUSPInput.value;
        value1 = value1.replace(/\D/g, ''); // Remove todos os caracteres que não sejam dígitos
        value1 = value1.replace(/(\d{12})\d+?$/, '$1');
        numUSPInput.value = value1;
    });

    nomeInput.addEventListener('input', function() {
        let value = nomeInput.value;
        value = value.replace(/[^a-zA-Z\u00C0-\u024F\s]+/g, ''); // Aceita letras e acentos
        value = value.replace(/(\d{200})\d+?$/, '$1');
        nomeInput.value = value;
    });

    mesaInput.addEventListener('input', function() {
        let value = mesaInput.value;
        value = value.replace(/\D/g, ''); // Remove todos os caracteres que não sejam dígitos
        value = value.replace(/(\d{2})\d+?$/, '$1');
        mesaInput.value = value;''
    });
});