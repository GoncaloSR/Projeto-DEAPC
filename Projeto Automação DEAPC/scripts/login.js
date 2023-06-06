const mostrarSenhaCheckbox = document.getElementById('mostrarSenha');
const senhaInput = document.getElementById('senha');

mostrarSenhaCheckbox.addEventListener('change', function() {
  if (mostrarSenhaCheckbox.checked) {
    senhaInput.type = 'text';
  } else {
    senhaInput.type = 'password';
  }
}); 

function validateForm() {
  var nome = document.getElementById("nome").value;
  var senha = document.getElementById("senha").value;

  // Realize a validação das credenciais aqui
  // Por exemplo, você pode verificar se os campos estão preenchidos corretamente

  if (nome === "" || senha === "") {
      alert("Por favor, preencha todos os campos");
      return false; // Impede o envio do formulário se algum campo estiver vazio
  }

  // Se a validação for bem-sucedida, o formulário será enviado
  return true;
}
