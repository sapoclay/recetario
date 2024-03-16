<!-- Categorías de las ventanas Modal. Todas tienen la misma distribución. -->

<!-- Modal Desayuno -->
<div class="modal fade mt-5" id="breakfastModal" tabindex="-1" aria-labelledby="breakfast" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header"> <!-- Cabecera la ventana -->
                <h5 class="modal-title" id="breakfast"><strong>Desayunos</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span> <!-- La X para cerrar la ventana -->
                </button>
            </div>
            <div class="row modal-body"> <!-- Cuerpo de la ventana -->

                <?php
                // Buscamos en la BD todos los registros de la categoría Desayuno
                $stmt = $conn->prepare("SELECT * FROM `tbl_recipe` LEFT JOIN `tbl_category` ON `tbl_recipe`.`tbl_category_id` = `tbl_category`.`tbl_category_id` WHERE `category_name` = 'Desayuno' ");
                $stmt->execute();

                $result = $stmt->fetchAll();
                // En cada iteración guardamos los valores en sus correspondientes variables para utilizarlas a la hora de escribir 
                foreach ($result as $row) {
                    $recipeID = $row['tbl_recipe_id'];
                    $categoryName = $row['category_name'];
                    $recipeImage = $row['recipe_image'];
                    $recipeName = $row['recipe_name'];
                ?>
                
                    <div class="card" style="width:185px; height:200px; margin: 20px">
                        <div class="d-flex justify-content-center align-items-center" style="max-height: 120px;">
                            <a href="#category" onclick="view_recipe(<?php echo $recipeID; ?>)"> <!-- Enlace para que la receta se abra utilizando la función JS view_recipe que nos mostrará la ventana modal correspondiente -->
                                <img src="http://localhost/recetas/uploads/<?php echo $recipeImage ?>" class="card-img-top mt-1" alt="Recipe" style="max-width: 120px; max-height: 180px;">
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="#category" onclick="view_recipe(<?php echo $recipeID; ?>)">
                                <h6 class="card-title text-center"><strong><?php echo $recipeName ?></strong></h6>
                            </a>
                            <i class="text-muted">Categoría: </i><i class="card-subtitle text-muted"><?php echo $categoryName ?></i><br>
                        </div>
                    </div>
                </a>
                <?php
                }
                ?>

            </div>
            <div class="modal-footer"> <!-- Botón cerrar (suprimible, ya que ya existe la X en la parte superior) -->
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Almuerzo -->
<div class="modal fade mt-5" id="lunchModal" tabindex="-1" aria-labelledby="lunch" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="lunch"><strong>Almuerzo</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="row modal-body">

                <?php

                $stmt = $conn->prepare("SELECT * FROM `tbl_recipe` LEFT JOIN `tbl_category` ON `tbl_recipe`.`tbl_category_id` = `tbl_category`.`tbl_category_id` WHERE `category_name` = 'Almuerzo' ");
                $stmt->execute();

                $result = $stmt->fetchAll();

                foreach ($result as $row) {
                    $recipeID = $row['tbl_recipe_id'];
                    $categoryName = $row['category_name'];
                    $recipeImage = $row['recipe_image'];
                    $recipeName = $row['recipe_name'];
                ?>
                    
                    <div class="card" style="width:185px; height:200px; margin: 20px">
                        <div class="d-flex justify-content-center align-items-center" style="height: 120px;">
                            <a href="#category" onclick="view_recipe(<?php echo $recipeID; ?>)">
                                <img src="http://localhost/recetas/uploads/<?php echo $recipeImage ?>" class="card-img-top mt-1" alt="Recipe" style="max-width: 120px; max-height: 180px;">
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="#category" onclick="view_recipe(<?php echo $recipeID; ?>)">
                                <h6 class="card-title text-center"><strong><?php echo $recipeName ?></strong></h6>
                            </a>
                            <i class="text-muted">Categoría: </i><i class="card-subtitle text-muted"><?php echo $categoryName ?></i><br>
                        </div>
                    </div>
                    </a>
                <?php
                }
                ?>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Cenas -->
<div class="modal fade mt-5" id="dinnerModal" tabindex="-1" aria-labelledby="dinner" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dinner"><strong>Cena</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="row modal-body">

                <?php

                $stmt = $conn->prepare("SELECT * FROM `tbl_recipe` LEFT JOIN `tbl_category` ON `tbl_recipe`.`tbl_category_id` = `tbl_category`.`tbl_category_id` WHERE `category_name` = 'Cena' ");
                $stmt->execute();

                $result = $stmt->fetchAll();

                foreach ($result as $row) {
                    $recipeID = $row['tbl_recipe_id'];
                    $categoryName = $row['category_name'];
                    $recipeImage = $row['recipe_image'];
                    $recipeName = $row['recipe_name'];
                ?>
                    
                    <div class="card" style="width: 185px;; height:200px; margin: 20px">
                        <div class="d-flex justify-content-center align-items-center" style="height: 120px;">
                            <a href="#category" onclick="view_recipe(<?php echo $recipeID; ?>)">
                                <img src="http://localhost/recetas/uploads/<?php echo $recipeImage ?>" class="card-img-top mt-1" alt="Recipe" style="max-width: 120px; max-height: 180px;">
                            </a>
                        </div>
                        <div class="card-body">
                        <a href="#category" onclick="view_recipe(<?php echo $recipeID; ?>)">
                            <h6 class="card-title text-center"><strong><?php echo $recipeName ?></strong></h6>
                        </a>
                            <i class="text-muted">Categoría: </i><i class="card-subtitle text-muted"><?php echo $categoryName ?></i><br>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Aperitivos -->
<div class="modal fade mt-5" id="appetizerModal" tabindex="-1" aria-labelledby="appetizer" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="appetizer"><strong>Aperitivo</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="row modal-body">

                <?php

                $stmt = $conn->prepare("SELECT * FROM `tbl_recipe` LEFT JOIN `tbl_category` ON `tbl_recipe`.`tbl_category_id` = `tbl_category`.`tbl_category_id` WHERE `category_name` = 'Aperitivo' ");
                $stmt->execute();

                $result = $stmt->fetchAll();

                foreach ($result as $row) {
                    $recipeID = $row['tbl_recipe_id'];
                    $categoryName = $row['category_name'];
                    $recipeImage = $row['recipe_image'];
                    $recipeName = $row['recipe_name'];
                ?>
                    
                    <div class="card" style="width:200px; height: 185px;; margin: 20px">
                        <div class="d-flex justify-content-center align-items-center" style="height: 120px;">
                            <a href="#category" onclick="view_recipe(<?php echo $recipeID; ?>)">
                                <img src="http://localhost/recetas/uploads/<?php echo $recipeImage ?>" class="card-img-top mt-1" alt="Recipe" style="max-width: 120px; max-height: 180px;">
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="#category" onclick="view_recipe(<?php echo $recipeID; ?>)">
                                <h6 class="card-title text-center"><strong><?php echo $recipeName ?></strong></h6>
                            </a>
                            <i class="text-muted">Categoría: </i><i class="card-subtitle text-muted"><?php echo $categoryName ?></i><br>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Postres -->
<div class="modal fade mt-5" id="dessertModal" tabindex="-1" aria-labelledby="dessert" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dessert"><strong>Postre</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="row modal-body">

                <?php

                $stmt = $conn->prepare("SELECT * FROM `tbl_recipe` LEFT JOIN `tbl_category` ON `tbl_recipe`.`tbl_category_id` = `tbl_category`.`tbl_category_id` WHERE `category_name` = 'Postre' ");
                $stmt->execute();

                $result = $stmt->fetchAll();

                foreach ($result as $row) {
                    $recipeID = $row['tbl_recipe_id'];
                    $categoryName = $row['category_name'];
                    $recipeImage = $row['recipe_image'];
                    $recipeName = $row['recipe_name'];
                ?>
                    
                    <div class="card" style="width: 185px;; height:200px; margin: 20px">
                        <div class="d-flex justify-content-center align-items-center" style="height: 120px;">
                            <a href="#category" onclick="view_recipe(<?php echo $recipeID; ?>)">
                                <img src="http://localhost/recetas/uploads/<?php echo $recipeImage ?>" class="card-img-top mt-1" alt="Recipe" style="max-width: 120px; max-height: 180px;">
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="#category" onclick="view_recipe(<?php echo $recipeID; ?>)">
                                <h6 class="card-title text-center"><strong><?php echo $recipeName ?></strong></h6>
                            </a>
                            <i class="text-muted">Categoría: </i><i class="card-subtitle text-muted"><?php echo $categoryName ?></i><br>
                        </div>
                    </div>  
                <?php
                }
                ?>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal comida rápida -->
<div class="modal fade mt-5" id="fastFoodModal" tabindex="-1" aria-labelledby="fastFood" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="fastFood"><strong>Comida rápida</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="row modal-body">

                <?php

                $stmt = $conn->prepare("SELECT * FROM `tbl_recipe` 
                LEFT JOIN `tbl_category` ON `tbl_recipe`.`tbl_category_id` = `tbl_category`.`tbl_category_id` 
                WHERE `category_name` = 'Comida rápida' ");
                $stmt->execute();

                $result = $stmt->fetchAll();

                foreach ($result as $row) {
                    $recipeID = $row['tbl_recipe_id'];
                    $categoryName = $row['category_name'];
                    $recipeImage = $row['recipe_image'];
                    $recipeName = $row['recipe_name'];
                ?>

                    <div class="card" style="width:185px; height:200px; margin: 20px">
                            <div class="d-flex justify-content-center align-items-center" style="height: 120px;">
                                <a href="#category" onclick="view_recipe(<?php echo $recipeID; ?>)">
                                 <img src="http://localhost/recetas/uploads/<?php echo $recipeImage ?>" class="card-img-top mt-1" alt="Recipe" style="max-width: 120px; max-height: 180px;">
                                </a>
                                </div>
                            <div class="card-body">
                                <a href="#category" onclick="view_recipe(<?php echo $recipeID; ?>)">
                                    <h6 class="card-title text-center"><strong><?php echo $recipeName ?></strong></h6>
                                </a>
                                <i class="text-muted"><?php echo "Categoría: ".$categoryName ?></i>
                            </div>
                    </div>

                <?php
                }
                ?>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<!-- Modales para la lista de recetas -->

<!-- Modal Añadir receta -->
<div class="modal fade mt-5" id="addRecipeModal" tabindex="-1" aria-labelledby="addRecipe" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addRecipe"><strong>Agregar Receta</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="recipeID" action="endpoint/add-recipe.php" method="POST" enctype="multipart/form-data">
                    <input type="text" class="form-control" id="table" name="table" value="tbl_recipe" hidden>
                    <div class="mb-3" hidden>
                        <label for="recipeID" class="form-label">ID</label>
                        <input type="text" class="form-control" id="recipeID" name="tbl_recipe_id">
                    </div>
                    <div class="mb-3">
                        <label for="recipeImage" class="form-label">Imagen Receta</label>
                        <input type="file" class="form-control" id="recipeImage" name="recipe_image" style="border:none;">
                    </div>
                    <div class="mb-3">
                        <label for="recipeName" class="form-label">Nombre de la receta</label>
                        <input type="text" class="form-control" id="recipeName" name="recipe_name">
                    </div>
                    <div class="mb-3">
                        <label for="recipeCategory" class="form-label">Categoría</label>

                        <?php

                        $stmt = $conn->prepare("SELECT * FROM `tbl_category`");
                        $stmt->execute();

                        $recipe_category = $stmt->fetchAll();

                        ?>

                        <select class="form-control" name="tbl_category_id" id="recipeCategory">

                            <option value=""> Seleccionar </option>

                            <?php foreach ($recipe_category as $category) {
                            ?>

                                <option value="<?php echo $category['tbl_category_id']; ?>"><?php echo $category['category_name'] ?></option>

                            <?php
                            } ?>

                        </select>

                    </div>
                    <div>
                        <label for="recipeIngredients" class="form-label">Ingredientes</label>
                        <textarea class="form-control" name="recipe_ingredients" id="recipeIngredients" rows="5"></textarea>
                    </div>
                    <div>
                        <label for="recipeProcedure" class="form-label">Pasos</label>
                        <textarea class="form-control" name="recipe_procedure" id="recipeProcedure" rows="5"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-dark">Guardar Cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal ver receta -->

<div class="modal fade mt-5" id="viewRecipeModal" tabindex="-1" aria-labelledby="viewRecipe" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="viewRecipe"><strong id="viewRecipeName"></strong></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="card">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="" id="viewRecipeImage" class="card-img-top mt-2" alt="Recipe" style="max-width: 300px">
                    </div>
                    <div class="card-body-receta text-center">
                        <p class="text-muted">Categoría: <span class="card-subtitle text-muted" id="viewCategoryName"></span></p>
                    </div>
                    <div class="row text-center mb-5 p-3">
                        <div class="col">
                            <h5><strong>Ingredientes:</strong></h5>
                            <pre id="viewRecipeIngredients"></pre>
                        </div>
                        <div class="col">
                            <h5><strong>Pasos:</strong></h5>
                            <pre id='viewRecipeProcedure'></pre>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal actualizar receta -->
<div class="modal fade mt-5" id="updateRecipeModal" tabindex="-1" aria-labelledby="updateRecipe" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateRecipe"><strong>Actualizar Receta</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="recipeID" action="endpoint/update-recipe.php" method="POST" enctype="multipart/form-data">
                    <input type="text" class="form-control" id="updateTable" name="table" value="tbl_recipe" hidden>
                    <div class="mb-3" hidden>
                        <label for="updateRecipeID" class="form-label">ID</label>
                        <input type="text" class="form-control" id="updateRecipeID" name="tbl_recipe_id">
                    </div>
                    <div class="mb-3">
                        <label for="updateRecipeImage" class="form-label">Imagen Receta</label>
                        <input type="file" class="form-control" id="updateRecipeImage" name="recipe_image" style="border:none;">
                    </div>
                    <div class="mb-3">
                        <label for="updateRecipeName" class="form-label">Nombre de Receta</label>
                        <input type="text" class="form-control" id="updateRecipeName" name="recipe_name">
                    </div>
                    <div class="mb-3">
                        <label for="updateRecipeCategory" class="form-label">Categoría</label>

                        <?php

                        $stmt = $conn->prepare("SELECT * FROM `tbl_category`");
                        $stmt->execute();

                        $recipe_category = $stmt->fetchAll();

                        ?>

                        <select class="form-control" name="tbl_category_id" id="updateRecipeCategory">

                            <option value=""> seleccionar </option>

                            <?php foreach ($recipe_category as $category) {
                            ?>

                                <option value="<?php echo $category['tbl_category_id']; ?>"><?php echo $category['category_name'] ?></option>

                            <?php
                            } ?>

                        </select>

                    </div>
                    <div>
                        <label for="updateRecipeIngredients" class="form-label">Ingredientes</label>
                        <textarea class="form-control" name="recipe_ingredients" id="updateRecipeIngredients" rows="5"></textarea>
                    </div>
                    <div>
                        <label for="updateRecipeProcedure" class="form-label">Pasos</label>
                        <textarea class="form-control" name="recipe_procedure" id="updateRecipeProcedure" rows="5"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-dark">Guardar Cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>