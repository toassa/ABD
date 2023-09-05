document.addEventListener('DOMContentLoaded', function() {
    const Letra = document.getElementById('validationCustomLetra');
    const Num = document.getElementById('validationCustomNum');


    Letra.addEventListener('input', function() {
        let value = Letra.value;
        value = value.replace(/[^a-zA-Z\u00C0-\u024F\s]+/g, ''); // Aceita letras e acentos
        value = value.replace(/(\d{10})\d+?$/, '$1');
        Letra.value = value;
    });
    
    
    Num.addEventListener('input', function() {
        let value = Num.value;
        value = value.replace(/\D/g, ''); // Remove todos os caracteres que não sejam dígitos
        value = value.replace(/(\d{50})\d+?$/, '$1');
        Num.value = value;
    });

  });

  