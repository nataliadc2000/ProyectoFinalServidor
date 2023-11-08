
<?php

require_once("../model/productDAO.php");

// Obtener los productos de la tabla "Perifericos"
$resultsPeri = selectProductForPerifericos($pdo);

// Obtener los productos de la tabla "PartsOfTheComputer"
$resultsParts = selectProductForPartsOfTheComputer($pdo);

// Cerrar la conexión a la base de datos
$pdo = null;

// Inicializar el arreglo de resultados
$resultsprod = [];

// Verificar si se ha pulsado algún botón
if (isset($_GET['categoria'])) {
    $categoria = $_GET['categoria'];
    
    // Realizar una consulta diferente según la categoría seleccionada
    if ($categoria == 'Boton1') {
        $resultsprod = $resultsPeri;
    } elseif ($categoria == 'Boton2') {
        $resultsprod = $resultsParts;
    }

}



header("./view/ProductView.php");

?>
