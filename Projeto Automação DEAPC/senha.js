// login.js
document.addEventListener("DOMContentLoaded", function() {
    var passwordField = document.getElementById("password");
    var toggleButton = document.getElementById("toggleButton");
  
    toggleButton.addEventListener("click", function() {
      if (passwordField.type === "password") {
        passwordField.type = "text";
        toggleButton.textContent = "Ocultar senha";
      } else {
        passwordField.type = "password";
        toggleButton.textContent = "Mostrar senha";
      }
    });
  });