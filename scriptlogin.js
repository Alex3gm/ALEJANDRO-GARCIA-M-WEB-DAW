// Obtener los elementos de los formularios de login y registro
var loginForm = document.getElementById("login-form");
var registerForm = document.getElementById("register-form");

// Ocultar el formulario de registro y mostrar el formulario de login
loginForm.style.display = "block";
registerForm.style.display = "none";

// Función para mostrar el formulario de registro y ocultar el formulario de login
function showRegisterForm() {
  loginForm.style.display = "none";
  registerForm.style.display = "block";
}

// Función para mostrar el formulario de login y ocultar el formulario de registro
function showLoginForm() {
  loginForm.style.display = "block";
  registerForm.style.display = "none";
}