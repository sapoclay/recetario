<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL); 
include('../conn/conn.php');

// Recibir datos del formulario
$recipeName = $_POST['recipe_name'];
$recipeCategory = $_POST['tbl_category_id'];
$recipeIngredients = $_POST['recipe_ingredients'];
$recipeProcedure = $_POST['recipe_procedure'];

// Nombre y ruta temporal del archivo de imagen de la receta
$recipeImageName = $_FILES['recipe_image']['name'];
$recipeImageTmpName = $_FILES['recipe_image']['tmp_name'];

// Directorio de destino para cargar la imagen
$target_dir = "../uploads/";
$target_file = $target_dir . basename($recipeImageName);
$uploadOk = 1; // Variable para verificar si la carga es posible
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Verificar si se envió un formulario para cargar la imagen
if (isset($_POST['submit'])) {
    // Verificar si la imagen es válida
    $check = getimagesize($recipeImageTmpName);
    if ($check === false) {
        $uploadOk = 0;
        echo "<script>
        alert('El archivo seleccionado no es una imagen válida.');
        window.location.href = 'http://localhost/recetas/index.php#food';
        </script>";
    }
}

// Verificar si el archivo ya existe
if (file_exists($target_file)) {
    $uploadOk = 0;
    echo "<script>
    alert('La imagen ya existe. Por favor, cambie el nombre del archivo.');
    window.location.href = 'http://localhost/recetas/index.php#food';
    </script>";
}

// Verificar el tamaño del archivo
if ($_FILES["recipe_image"]["size"] > 500000) {
    $uploadOk = 0;
    echo "<script>
    alert('El tamaño del archivo supera el límite permitido (500KB).');
    window.location.href = 'http://localhost/recetas/index.php#food';
    </script>";
}

// Permitir solo ciertos formatos de imagen
$allowed_formats = ["jpg", "png", "jpeg", "gif"];
if (!in_array($imageFileType, $allowed_formats)) {
    $uploadOk = 0;
    echo "<script>
    alert('Solo se permiten archivos JPG, JPEG, PNG o GIF.');
    window.location.href = 'http://localhost/recetas/index.php#food';
    </script>";
}

// Insertar si la carga fue exitosa
if ($uploadOk == 0) {
    echo "<script>
    alert('Tenemos problemas con tu imagen. ¡Inténtalo con otra imagen!');
    window.location.href = 'http://localhost/recetas/index.php#food';
    </script>";
} else {
    if (move_uploaded_file($recipeImageTmpName, $target_file)) {
        $recipeImage = $recipeImageName;

        // Preparar y ejecutar la consulta de inserción
        $stmt = $conn->prepare("INSERT INTO `tbl_recipe` (`tbl_recipe_id`, `tbl_category_id`, `recipe_image`, `recipe_name`, `recipe_ingredients`, `recipe_procedure`) VALUES (NULL, :recipeCategory, :recipeImage, :recipeName, :recipeIngredients, :recipeProcedure)");
        $stmt->bindParam(':recipeCategory', $recipeCategory);
        $stmt->bindParam(':recipeImage', $recipeImage);
        $stmt->bindParam(':recipeName', $recipeName);
        $stmt->bindParam(':recipeIngredients', $recipeIngredients);
        $stmt->bindParam(':recipeProcedure', $recipeProcedure);

        $stmt->execute();

        // Cerramos la conexión
        $conn = null;

        echo "<script>
        alert('¡Añadido correctamente!');
        window.location.href = 'http://localhost/recetas/index.php#food';
        </script>";
    } else {
        echo "<script>
        alert('Fallo al cargar la imagen!');
        window.location.href = 'http://localhost/recetas/index.php#food';
        </script>";
    }
}
