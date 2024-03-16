<?php
include('../../conn/conn.php');

// Verificar si se han enviado los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password']; // La contraseña sin cifrar

    // Verificar si el email tiene un formato de correo electrónico válido
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Si no es un correo electrónico válido, mostrar un mensaje de error y redirigir
        echo "<script>
            alert('La dirección de correo electrónico no es válida.');
            window.location.href = 'http://localhost/recetas/login/index.html';
            </script>";
        exit; // Salir del script
    }

    // Verificar si el correo electrónico ya existe en la base de datos
    $stmt = $conn->prepare("SELECT email FROM usuarios WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->fetch(PDO::FETCH_ASSOC)) {
        // Si el correo electrónico ya existe en la base de datos, mostrar un mensaje de error y redirigir
        echo "<script>
            alert('La dirección de correo electrónico ya está registrada.');
            window.location.href = 'http://localhost/recetas/login/index.html';
            </script>";
        exit; // Salir del script
    }

    // Cifrar la contraseña utilizando la función de hash password_hash()
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Preparar y ejecutar la consulta de inserción
    $stmt = $conn->prepare("INSERT INTO `usuarios` (`email`, `password`) VALUES (:email, :password)");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashed_password);

    $stmt->execute();

    // Mostrar un mensaje de éxito y redirigir al usuario a la página de inicio de sesión
    echo "<script>
        alert('¡Usuario creado correctamente! Ya puedes loguearte.');
        window.location.href = 'http://localhost/recetas/login/index.html';
        </script>";
} else {
    // Si no se ha enviado un formulario POST, redirigir al usuario a la página de inicio de sesión
    echo "<script>
        alert('No tienes permiso para estar aquí!!!');
        window.location.href = 'http://localhost/recetas/login/index.html';
        </script>";
}
