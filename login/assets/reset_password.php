<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer Contraseña</title>
   <!-- <link rel="stylesheet" href="style.css">-->
</head>
<body>
    <div class="container">
        <h2>Restablecer Contraseña</h2>
        <form action="guardar_nueva_password.php" method="post">
            <input type="password" name="password" required placeholder="Nueva Contraseña">
            <input type="password" name="confirm_password" required placeholder="Confirmar Nueva Contraseña">
            <button type="submit">Restablecer Contraseña</button>
        </form>
    </div>
</body>
</html>