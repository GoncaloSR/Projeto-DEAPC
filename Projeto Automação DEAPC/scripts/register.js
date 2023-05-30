/*const passwordInput = document.getElementById('password');
const passwordStrength = document.getElementById('password-strength');

passwordInput.addEventListener('input', function() {
  const password = passwordInput.value;
  const strength = checkPasswordStrength(password);
  
  passwordStrength.textContent = `Força da Senha: ${strength}`;
});

function checkPasswordStrength(password) {
  
  var forcaMinima = 8; // Tamanho mínimo da senha
  var caracteresEspeciais = /[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/; // Pelo menos um caractere especial
  var numeros = /[0-9]/; // Pelo menos um número
  
  if (password.length < forcaMinima) {
    return "A senha deve ter no mínimo " + forcaMinima + " caracteres.";
  }
  
  if (!caracteresEspeciais.test(senha)) {
    return "A senha deve conter pelo menos um caractere especial.";
  }
  if (!numeros.test(senha)) {
    return "A senha deve conter pelo menos um número.";
  }
  return "A senha é forte.";


  //if (/[0-9]/.test(password)) {
    //return 'Média';
  //}
  //if (password.length > 8) {
    //return 'Media';
  //}
}*/
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
  document.forms[0].action = 'xxxx.php';
  document.forms[0].submit();
}

