<?php
session_start();
include('../../conn/conn.php');

// Verificar si se han enviado los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consultar la base de datos para verificar si el usuario existe
    $stmt = $conn->prepare("SELECT * FROM `usuarios` WHERE `email` = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch();

    // Verificar si se encontró un usuario con el correo electrónico proporcionado
    if ($user) {
        // Verificar la contraseña
        if (password_verify($password, $user['password'])) {
            $_SESSION['usuario'] = $email; 
            // La contraseña es correcta, iniciar sesión y redirigir al usuario a la página de inicio
            // Aquí podrías establecer una sesión de usuario o cualquier otra lógica de inicio de sesión que utilices en tu aplicación
            echo "<script>
                alert('¡Inicio de sesión correcto! Bienvenid@');
                window.location.href = 'http://localhost/recetas/index.php';
                </script>";
            exit;
        } else {
            // La contraseña es incorrecta, mostrar un mensaje de error
            echo "<script>
                alert('La contraseña es incorrecta.');
                window.location.href = 'http://localhost/recetas/login/index.html';
                </script>";
            exit;
        }
    } else {
        // No se encontró ningún usuario con el correo electrónico proporcionado, mostrar un mensaje de error
        echo "<script>
            alert('No se encontró ningún usuario con ese correo electrónico.');
            window.location.href = 'http://localhost/recetas/login/index.html';
            </script>";
        exit;
    }
} else {
    // Si no se ha enviado un formulario POST, redirigir al usuario a la página de inicio de sesión
    echo "<script>
        alert('No tienes permiso para estar aquí!!!');
        window.location.href = 'http://localhost/recetas/login/index.html';
        </script>";
}
?>
