<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
   <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
    <div class="container">
        <h2>Recuperar Contraseña</h2>
        <p>Escribe tu correo electrónico y te enviaremos instrucciones sobre cómo restablecer tu contraseña.</p>
        <form action="enviar_correo.php" method="post">
            <input type="email" name="email" required placeholder="Correo Electrónico">
            <button type="submit">Enviar Instrucciones</button>
        </form>
    </div>
</body>
</html>