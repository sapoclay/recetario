<?php
// Inicia la sesión
session_start();

// Elimina todas las variables de sesión
session_unset();

// Destruye la sesión
session_destroy();

// Redirige al usuario a la página de inicio o a donde desees
header("Location: http://localhost/recetas/login/index.html");
exit;
?>
