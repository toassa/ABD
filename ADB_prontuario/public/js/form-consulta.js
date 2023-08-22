document.addEventListener('DOMContentLoaded', function() {
    const Letra = document.getElementById('validationCustomLetra');
    const Num = document.getElementById('validationCustomNum');
    
    Num.addEventListener('input', function() {
        let value1 = Num.value;
        value1 = value1.replace(/\D/g, ''); // Remove todos os caracteres que não sejam dígitos
        value1 = value1.replace(/(\d{50})\d+?$/, '$1');
        Letra.value = value1;
    });

    Letra.addEventListener('input', function() {
        let value = Letra.value;
        value = value.replace(/[^a-zA-Z\u00C0-\u024F\s]+/g, ''); // Aceita letras e acentos
        value = value.replace(/(\d{50})\d+?$/, '$1');
        Letra.value = value;
      });
  
    
  });

  