<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
include('../conn/conn.php');

$recipeID = $_POST['tbl_recipe_id'];
$updateRecipeName = $_POST['recipe_name'];
$updateRecipeCategory = $_POST['tbl_category_id'];
$updateRecipeIngredients = $_POST['recipe_ingredients'];
$updateRecipeProcedure = $_POST['recipe_procedure'];

// Verificar si la receta existe antes de intentar actualizarla
$stmt = $conn->prepare("SELECT * FROM tbl_recipe WHERE tbl_recipe_id = ?");
$stmt->execute([$recipeID]);
$existingRecipe = $stmt->fetch();

if (!$existingRecipe) {
    // Si la receta no existe, mostrar un mensaje de error y redirigir
    echo "<script>
    alert('¡¡¡La receta que intentas actualizar no existe!!!');
    window.location.href = 'http://localhost/recetas/index.php#food';
    </script>";
    exit();
}

// Verificar si se ha subido un nuevo archivo de imagen
if ($_FILES['recipe_image']['tmp_name'] != "") {
    $targetDir = "../uploads/";
    $targetFile = $targetDir . basename($_FILES['recipe_image']['name']);
    move_uploaded_file($_FILES['recipe_image']['tmp_name'], $targetFile);

    // Actualizar la información de la receta incluyendo la imagen
    $stmt = $conn->prepare("UPDATE tbl_recipe SET recipe_name = ?, tbl_category_id = ?, recipe_image = ?, recipe_ingredients = ?, recipe_procedure = ? WHERE tbl_recipe_id = ?");
    $stmt->execute([$updateRecipeName, $updateRecipeCategory, $_FILES['recipe_image']['name'], $updateRecipeIngredients, $updateRecipeProcedure, $recipeID]);
} else {
    // Actualizar la información de la receta sin cambiar la imagen
    $stmt = $conn->prepare("UPDATE tbl_recipe SET recipe_name = ?, tbl_category_id = ?, recipe_ingredients = ?, recipe_procedure = ? WHERE tbl_recipe_id = ?");
    $stmt->execute([$updateRecipeName, $updateRecipeCategory, $updateRecipeIngredients, $updateRecipeProcedure, $recipeID]);
}

// Redirigir de nuevo a la página principal después de la actualización
echo "<script>
    alert('¡La receta se ha actualizado correctamente!');
    window.location.href = 'http://localhost/recetas/index.php#food';
    </script>";
exit();
?>
