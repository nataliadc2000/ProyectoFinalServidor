
<?php 
require_once("./controller/usuariosController.php");
?>

<!DOCTYPE html>
 <head>

    <meta charset="UTF-8">
    <meta name="description" content="Este es mi portfolio personal">
    <meta name="keywords" content="html, css, sass, bootstrap, js, portfolio, proyectos">
    <meta name="language" content="EN">
    <meta name="author" content="tumail@vedruna.es">
    <meta name="robots" content="index,follow">
    <meta name="revised" content="Tuesday, February 28th, 2023, 23:00pm">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome1">

    <!-- Añado la fuente Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"
        defer></script>


    <!-- Icono al lado del titulo -->
    <link rel="shortcut icon" href="media/icon/favicon.png" type="image/xpng">

    <!-- Titulo -->
    <title>Tu nombre's portfolio</title>

</head>
 <body>
 



<form action="../controller/usuariosController.php">
<?php foreach($results as $user): ?>
    <?php 
        setcookie("username",$user->username,time ()+ 60*60*24*30,"/");
    ?>
     <nav class="navbar navbar navbar-dark bg-info" style="height: 10vh;"> 
    <a class="navbar-brand mx-2">Bienvenido a la pagina <?= $user->username ?></a> 
    <form class="form-inline" action="../errors/logout.php">
           <input class="btn btn-primary btn-lg" type="submit" value="LOGOUT">
   </form> 
</nav>
<?php endforeach ?>
</form>
<button onclick="location.href='?categoria=Boton1'" onclick="perifericosSelect()">Periféricos</button>
<button onclick="location.href='?categoria=Boton2'" onclick="partsSelect()">Parts of the Computer</button>

<form action="../controller/productController.php">

    <?php foreach($results as $product): ?>
    <!-- Aquí puedes mostrar los detalles del producto -->
    <h2><?php echo $product->nameProduct; ?></h2>
    <p><?php echo $product->descriptionProduct; ?></p>
    <p>Precio: <?php echo $product->priceProduct; ?></p>
<?php endforeach; ?>
</form>


 </body>
 </html>