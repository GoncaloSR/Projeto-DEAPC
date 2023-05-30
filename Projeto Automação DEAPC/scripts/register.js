const passwordInput = document.getElementById('password');
const passwordStrength = document.getElementById('password-strength');

passwordInput.addEventListener('input', function() {
  const password = passwordInput.value;
  const strength = checkPasswordStrength(password);
  
  passwordStrength.textContent = `Força da Senha: ${strength}`;
});

function checkPasswordStrength(password) {
  if (password.length < 8) {
    return 'Fraca';
  }
  
  if (/[a-zA-Z]/.test(password) && /[0-9]/.test(password) && /[^a-zA-Z0-9]/.test(password)) {
    return 'Forte';
  }
  
  return 'Média';
}
