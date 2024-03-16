<div class="card card-food-list">
            <h1 class="text-center"><strong>Recetas Disponibles</strong></h1>
            <div class="mt-4">
                <div class="row"> <!-- Botón añadir receta que llama a la función JS addRecipeModal -->
                    <div class="col-md-2 mr-auto">
                        <button type="button" class="btn btn-add-food btn-secondary" data-toggle="modal" data-target="#addRecipeModal">Añadir Receta</button>
                    </div>
                    <div class="col-md-2"> <!-- Caja para la búsqueda mediante JS-->
                        <input class="form-control p-4" type="text" id="searchInput" placeholder="Buscar...">
                    </div>
                </div>
            </div>

            <!-- Tabla para escribir todas las recetas guardadas-->
            <table id="foodListTable" class="table table-responsive mt-4" style="text-align:center;">
                <thead> <!-- Cabecera de la tabla-->
                    <tr> 
                        <th scope="col" style="width: 5%;">ID</th>
                        <th scope="col" style="width: 10%;">Imagen</th>
                        <th scope="col" style="width: 10%;">Nombre Receta</th>
                        <th scope="col" style="width: 10%;">Categoría</th>
                        <th scope="col" style="width: 10%;">Acción</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    // Consulta para obtener las recetas guardadas en la BD
                    $stmt = $conn->prepare("
                        SELECT * 
                        FROM 
                            `tbl_recipe`
                        LEFT JOIN
                            `tbl_category` ON
                            `tbl_recipe`.`tbl_category_id` = `tbl_category`.`tbl_category_id` 
                        ");
                    $stmt->execute();

                    $result = $stmt->fetchAll();
                    // En cada iteración se guarda el valor dentro de su correspondiente variable
                    foreach ($result as $row) {
                        $recipeID = $row['tbl_recipe_id'];
                        $categoryID = $row['tbl_category_id'];
                        $categoryName = $row['category_name'];
                        $recipeImage = $row['recipe_image'];
                        $recipeName = $row['recipe_name'];
                        $recipeIngredients = $row['recipe_ingredients'];
                        $recipeProcedure = $row['recipe_procedure'];
                    ?>
                    <!-- En cada iteración de foreach se escribe una línea con sus correspondientes td,  sus valores y los botones de acción-->
                        <tr>
                            <th id="recipeID-<?= $recipeID ?>"><?php echo $recipeID ?></th>
                            <td id="recipeImage-<?= $recipeID ?>"><img src="http://localhost/recetas/uploads/<?php echo $recipeImage ?>" class="img-fluid" style="height: 50px; width: 90px" alt="<?php echo $recipeName ?>"></td>
                            <td id="recipeName-<?= $recipeID ?>"><?php echo $recipeName ?></td>
                            <td id="categoryName-<?= $recipeID ?>"><?php echo $categoryName ?></td>
                            <td id="recipeIngredients-<?= $recipeID ?>" hidden><?php echo $recipeIngredients ?></td>
                            <td id="recipeProcedure-<?= $recipeID ?>" hidden><?php echo $recipeProcedure ?></td>

                            <td>
                                <button type="button" onclick="view_recipe('<?php echo $recipeID ?>')" title="Ver"><i class="fa-solid fa-eye p-1"></i></button>
                                <button type="button" onclick="update_recipe('<?php echo $recipeID ?>')" title="Editar"><i class="fa-solid fa-pencil p-1"></i></button>
                                <button type="button" onclick="delete_recipe('<?php echo $recipeID ?>')" title="Borrar"><i class="fa-solid fa-trash p-1"></i></button>
                            </td>
                        </tr>

                    <?php
                    }
                    // cierre conexión
                    $conn = null;
                    ?>

                </tbody>
            </table>
        </div>