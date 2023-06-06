const mostrarSenhaCheckbox = document.getElementById('mostrarSenha');
const senhaInput = document.getElementById('senha');

mostrarSenhaCheckbox.addEventListener('change', function() {
  if (mostrarSenhaCheckbox.checked) {
    senhaInput.type = 'text';
  } else {
    senhaInput.type = 'password';
  }
}); 

