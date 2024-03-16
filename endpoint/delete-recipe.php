<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
include('../conn/conn.php');

if (isset($_GET['recipe'])) {
    $recipeID = $_GET['recipe'];

    // Obtener el nombre del archivo de imagen de la receta
    $stmt = $conn->prepare("SELECT `recipe_image` FROM `tbl_recipe` WHERE `tbl_recipe_id` = ?");
    $stmt->execute([$recipeID]);
    $row = $stmt->fetch();

    $recipeImage = $row['recipe_image'];

    // Eliminar la receta de la base de datos
    $stmt = $conn->prepare("DELETE FROM `tbl_recipe` WHERE `tbl_recipe_id` = ?");
    $stmt->execute([$recipeID]);

    // Eliminar el archivo de imagen asociado
    if (!empty($recipeImage)) {
        $imagePath = "../uploads/" . $recipeImage;
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }

    // Cerramos la conexión
    $conn = null;

    // Redirigir a la página donde se desea mostrar la lista de recetas actualizada
    echo "<script>
    alert('¡Se ha eliminado correctamente!');
    window.location.href = 'http://localhost/recetas/index.php#food';
    </script>";
    exit();
}
?>