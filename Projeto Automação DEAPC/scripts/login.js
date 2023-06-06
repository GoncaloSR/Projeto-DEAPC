const mostrarSenhaCheckbox = document.getElementById('mostrarSenha');
const senhaInput = document.getElementById('senha');

mostrarSenhaCheckbox.addEventListener('change', function() {
  if (mostrarSenhaCheckbox.checked) {
    senhaInput.type = 'text';
  } else {
    senhaInput.type = 'password';
  }
}); 


function login() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  // Verifique as credenciais
  if (username === "usuario" && password === "senha") {
      // Login bem-sucedido
      alert("Login realizado com sucesso!");
  } else {
      // Login falhou
      alert("Usuário ou senha incorretos!");
  }
}