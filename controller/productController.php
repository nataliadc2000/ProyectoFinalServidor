<?php 
require_once("../model/productDAO.php"); 
require_once("../controller/usuariosController.php");


// Obtener los productos de la columna categoria =  "Perifericos" 
$resultsPeri = selectProductForPerifericos($pdo); 

// Obtener los productos de la columna categoria =  "PartsOfTheComputer" 
$resultsParts = selectProductForPartsOfTheComputer($pdo); 

//Obtener los productos de la columna categoria = "Teclas"
$resultTeclas = selectProductForTeclas($pdo);

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
    }elseif ($categoria == 'Boton3') {
        $resultsprod = $resultTeclas;
    }
} 
header("../view/productView.php")
?>

<!DOCTYPE html>
<html>
<head>
    <title>Productos</title>
</head>
<body>

<?php foreach($results as $user): ?>
     <nav class="navbar navbar navbar-dark bg-info" style="height: 10vh;"> 
    <a class="navbar-brand mx-2">Bienvenido a la pagina <?= $user->username ?></a> 
    <form class="form-inline" action="../errors/logout.php">
           <input class="btn btn-primary btn-lg" type="submit" value="LOGOUT">
   </form> 
</nav>
<?php endforeach ?>

    <button onclick="location.href='?categoria=Boton1'">Periféricos</button>
    <button onclick="location.href='?categoria=Boton2'">Parts of the Computer</button>
    <button onclick="location.href='?categoria=Boton3'">Teclas</button>
    
    <div>
        <?php foreach($resultsprod as $product): ?>
            <div>
            <img src=<?=$product->imagenProduct;?>></img>
            <h2><?=$product->nameProduct; ?></h2>
            <p><?=$product->descriptionProduct; ?></p>
            <p>Precio: <?=$product->priceProduct; ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
  
