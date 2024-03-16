<?php
// Inicia la sesión (solo si necesitas almacenar información del usuario durante el proceso)
session_start();
 // Configurar PHPMailer para enviar el correo electrónico
require 'vendor/autoload.php';
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;

 // Verificar si se ha enviado el formulario de recuperación de contraseña
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el correo electrónico del formulario
    $email = $_POST['email'];

    // Generar un token único para el usuario
    $token = uniqid();

    // Guardar el token en la base de datos asociado al correo electrónico del usuario
    // (aquí debes implementar la lógica para almacenar el token en tu base de datos)

    // Construir el enlace de restablecimiento de contraseña
    $reset_link = "http://tu_sitio_web/reset_password.php?email=" . urlencode($email) . "&token=" . urlencode($token);

  

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Cambia esto según tu servidor SMTP
    $mail->SMTPAuth = true;
    $mail->Username = 'tu_correo@gmail.com'; // Cambia esto según tu correo electrónico
    $mail->Password = 'tu_contraseña'; // Cambia esto según tu contraseña
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Configurar el correo electrónico
    $mail->setFrom('tu_correo@gmail.com', 'Nombre Remitente'); // Cambia esto según tu correo electrónico y nombre
    $mail->addAddress($email); // Dirección de correo electrónico del destinatario
    $mail->Subject = 'Recuperar Contraseña';
    $mail->Body = "Hola,\n\nPara restablecer tu contraseña, haz clic en el siguiente enlace:\n\n$reset_link\n\nSi no solicitaste restablecer tu contraseña, puedes ignorar este mensaje.";

    // Enviar el correo electrónico
    if ($mail->send()) {
        // Si el correo electrónico se envió correctamente, muestra un mensaje al usuario
        echo "Se ha enviado un correo electrónico con instrucciones para restablecer tu contraseña.";
    } else {
        // Si hubo un error al enviar el correo electrónico, muestra un mensaje de error
        echo "Ha ocurrido un error al enviar el correo electrónico. Por favor, inténtalo de nuevo más tarde.";
    }
}
?>
