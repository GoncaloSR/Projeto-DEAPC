
function registrar() {
  // Obter os valores dos campos do formulário
  var nome = document.getElementById('nome').value;
  var email = document.getElementById('email').value;
  var senha = document.getElementById('senha').value;

  // Validar os campos do formulário
  if (nome === '' || email === '' || senha === '') {
      alert('Por favor, preencha todos os campos.');
      return;
  }

  // Enviar os dados para o arquivo de processamento do registro
  // Esta parte precisa de .php
  document.forms[0].action = 'processar_registro.php';
  document.forms[0].submit();
}

