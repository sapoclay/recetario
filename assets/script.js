// Sección de cambio
const anclas = document.querySelectorAll('a[href^="#"]');
if (anclas.length > 0) {
    anclas.forEach(ancla => {
        ancla.addEventListener('click', function (e) {
            e.preventDefault();
            const idDestino = this.getAttribute('href');
            if (idDestino !== '#') {
                document.querySelector(idDestino).scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
}

// ver receta
function view_recipe(id) {
    $("#viewRecipeModal").modal("show");

    let nombreReceta = $("#recipeName-" + id).text();
    let nombreCategoria = $("#categoryName-" + id).text();
    let imagenReceta = $("#recipeImage-" + id).find('img').attr('src');
    let ingredientesReceta = $("#recipeIngredients-" + id).text();
    let procedimientoReceta = $("#recipeProcedure-" + id).text();

    // Actualizar el contenido modal con los datos obtenidos
    $("#viewRecipeName").text(nombreReceta);
    $("#viewCategoryName").text(nombreCategoria);
    $("#viewRecipeImage").attr('src', imagenReceta);
    $("#viewRecipeIngredients").text(ingredientesReceta);
    $("#viewRecipeProcedure").text(procedimientoReceta);
}

// actualizar receta
function update_recipe(id) {
    $("#updateRecipeModal").modal("show");

    let idReceta = $("#recipeID-" + id).text();
    let nombreCategoria = $("#categoryName-" + id).text();
    let imagenReceta = $("#recipeImage-" + id).find('img').attr('src');
    let nombreReceta = $("#recipeName-" + id).text();
    let ingredientesReceta = $("#recipeIngredients-" + id).text();
    let procedimientoReceta = $("#recipeProcedure-" + id).text();

    $("#updateRecipeID").val(idReceta);
    $("#updateRecipeCategory option").each(function() {
        let categoria = $(this).text();
        if (categoria === nombreCategoria) {
            $(this).prop("selected", true);
            return false;
        }
    });
    $("#updateRecipeName").val(nombreReceta);
    $("#updateRecipeIngredients").val(ingredientesReceta);
    $("#updateRecipeProcedure").val(procedimientoReceta);
    $("#updateRecipeImage").html(imagenReceta);
}

// eliminar receta
function delete_recipe(id) {

    if (confirm("¿Quieres eliminar esta receta?")) {
        window.location = "endpoint/delete-recipe.php?recipe=" + id
    }
}

// búsqueda
function performSearch() {
    var input, filtro, tabla, tr, td, i, valorTexto;
    input = document.getElementById("searchInput");
    filtro = input.value.toLowerCase();
    tabla = document.getElementById("foodListTable");
    tr = tabla.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
        var columnaNombre = tr[i].getElementsByTagName("td")[1]; // Columna para Nombre de Receta
        var columnaCategoria = tr[i].getElementsByTagName("td")[2]; // Columna para Categoría

        if (columnaNombre || columnaCategoria) {
            var textoNombre = columnaNombre.textContent || columnaNombre.innerText;
            var textoCategoria = columnaCategoria.textContent || columnaCategoria.innerText;

            if (textoNombre.toLowerCase().indexOf(filtro) > -1 || textoCategoria.toLowerCase().indexOf(filtro) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

// Adjuntar un evento de escucha al campo de entrada de búsqueda
document.getElementById("searchInput").addEventListener("keyup", performSearch);