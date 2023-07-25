const escreve_tel = (event) => {
    let input = event.target;
    input.value = mascara_tel(input.value);
}

const mascara_tel = (value) =>{
    if(!value) return "";
    value = value.replace(/\D/g,'');
    value = value.replace(/(\d{2})(\d)/,"($1) $2");
    value = value.replace(/(\d)(\d{4})$/,"$1-$2");
    return value;
}

document.addEventListener('DOMContentLoaded', function() {
    const dataInput = document.getElementById('validationCustom40');

    dataInput.addEventListener('input', function() {
      let value = dataInput.value;
      value = value.replace(/\D/g, ''); // Remove todos os caracteres que não sejam dígitos
      value = value.replace(/(\d{2})(\d)/, '$1/$2'); // Adiciona uma barra após os primeiros dois dígitos
      value = value.replace(/(\d{2})(\d)/, '$1/$2'); // Adiciona uma segunda barra após os próximos dois dígitos
      value = value.replace(/(\d{4})\d+?$/, '$1'); // Limita o campo a apenas 10 dígitos (DD/MM/AAAA)

      dataInput.value = value;
    });
  });