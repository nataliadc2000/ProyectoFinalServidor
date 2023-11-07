
<?php 
require_once("../connection/Connection.php");
require("../model/product.php");

function selectProductForPerifericos($pdo) {
    try {
        //Hacemos la query
        $statement = $pdo->query("SELECT * from products where categoryProduct ='periféricos'");
        // $statementparts = $pdo->query("SELECT * from products where categoryProduct ='parts of the computer'");
        
        $resultsPeri = [];
        // $resultsParts = [];


        foreach ($statement->fetchAll() as $p) {
            $objectP = new Product($p['imagenProduct'],$p['nameProduct'],$p['descriptionProduct'],$p['priceProduct'],$p['categoryProduct']);
            array_push($resultsPeri, $objectP);
            return $resultsPeri;
        }

       

    }catch (PDOException $e) {
        echo "No se ha podido completar la transaccion" .$e;
    }
}
function selectProductForPartsOfTheComputer($pdo) {
    try {
        //Hacemos la query
        $statementparts = $pdo->query("SELECT * from products where categoryProduct ='parts of the computer'");

        $resultsParts = [];

        foreach ($statementparts->fetchAll() as $par) {
            $objectPar = new Product($par['imagenProduct'],$par['nameProduct'],$par['descriptionProduct'],$par['priceProduct'],$par['categoryProduct']);
            array_push($resultsParts, $objectPar);
            return $resultsParts;
        }

    }catch (PDOException $e) {
        echo "No se ha podido completar la transaccion" .$e;
    }
}





?>