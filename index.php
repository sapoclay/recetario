<?php
// Inicia la sesión
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    // Si el usuario no ha iniciado sesión, redirección al login
    echo "<script>
        alert('Para acceder debes estar logueado!!');
        window.location.href = 'http://localhost/recetas/login/index.html';
        </script>";
    exit;
}

include(__DIR__ . '/conn/conn.php');
include(__DIR__ . '/assets/modal.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <?php include(__DIR__ . '/includes/head.php'); ?>

</head>

<body>

    <!-- Navbar -->
    <?php include(__DIR__ . '/includes/navbar.php'); ?>

    <section id="home">
        <div class="main">
            <!-- Carrousel -->
            <?php include(__DIR__ . '/includes/carrousel.php'); ?>

            <p></p>

            <!-- Categorías -->
            <?php include(__DIR__ . '/includes/categorias.php'); ?>

            <hr />

            <!-- Addrecetas -->
            <?php include(__DIR__ . '/includes/addrecetas.php'); ?>

            <hr />

    </section>

    <section id="food">
        <!-- ReDispon -->
        <?php include(__DIR__ . '/includes/redispon.php'); ?>
    </section>


    <script src="assets/script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>



</body>

</html>