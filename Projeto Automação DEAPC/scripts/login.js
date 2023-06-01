const mostrarSenhaCheckbox = document.getElementById('mostrarSenha');
const senhaInput = document.getElementById('senha');

mostrarSenhaCheckbox.addEventListener('change', function() {
  if (mostrarSenhaCheckbox.checked) {
    senhaInput.type = 'text';
  } else {
    senhaInput.type = 'password';
  }
}); 


/*
document.getElementById("loginForm").addEventListener("submit", function(event) {
  var username = document.getElementsByName("username")[0].value;
  var password = document.getElementsByName("password")[0].value;
  
  // Verifique as credenciais aqui (isso é apenas um exemplo)
  if (username === "admin" && password === "password") {
    // Credenciais válidas, permita o login
    alert("Login bem-sucedido!");
  } else {
    // Credenciais inválidas, exiba o alerta
    event.preventDefault(); // Impede o envio do formulário
    
    var alertDiv = document.createElement("div");
    alertDiv.classList.add("alert");
    alertDiv.innerText = "Credenciais inválidas!";
    
    document.body.appendChild(alertDiv);
    setTimeout(function() {
      alertDiv.style.display = "none";
    }, 3000); // Exibe o alerta por 3 segundos
  }
});

****JS para alerta caso credenciais forem as erradas

*/ 
