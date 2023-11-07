
<?php

require_once("./model/productDAO.php");

$resultsP = selectProductForPerifericos($pdo); 

$resultsPerifericos = selectProductForPartsOfTheComputer($pdo);

$pdo = null;

header("./view/ProductView.php");

?>