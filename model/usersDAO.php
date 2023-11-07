
<?php 
require_once("./connection/Connection.php");
require("./model/users.php");

function selectUsuarios($pdo) {
    try {
        //Hacemos la query
        $statement = $pdo->query("SELECT username,mail,pass,description from usuarios");

        $results = [];

        foreach ($statement->fetchAll() as $p) {
            $objectP = new Usuarios($p["username"], $p["mail"],$p["pass"],$p["description"]);
            array_push($results, $objectP);
        }
        return $results;
    }catch (PDOException $e) {
        echo "No se ha podido completar la transaccion";
    }
}





?>