<?php
// Verificar si se recibieron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los datos del formulario
  $usuario = $_POST["usuario"];
  $correo = $_POST["correo"];
  $contraseña = $_POST["contraseña"];

  // Realizar las validaciones necesarias
  
  if (empty($usuario) || empty($correo) || empty($contraseña)) {
    // Al menos uno de los campos requeridos está vacío
    echo "Todos los campos son obligatorios";
    return;
  }
  
  if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    // El campo de correo electrónico no tiene un formato válido
    echo "El correo electrónico no es válido";
    return;
  }
  
  if (strlen($contraseña) < 5) {
    // La contraseña debe tener al menos 5 caracteres
    echo "La contraseña debe tener al menos 5 caracteres";
    return;
  }

  // Guardar los datos en un archivo de texto
  $contenido = "Usuario: $usuario\nCorreo: $correo\nContraseña: $contraseña\n";

  // Guardar los datos en un archivo
  file_put_contents("datos.txt", $contenido, FILE_APPEND);

  // Enviar una respuesta al cliente
  echo "Los datos se han procesado correctamente";

  $usuario = $_POST['usuario'];
echo "<script>localStorage.setItem('usuario', '$usuario');</script>";
}
?>