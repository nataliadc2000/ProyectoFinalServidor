
<?php
// require_once("./model/usersDAO.php");

require_once("../model/usersDAO.php");

$results = selectUsuarios($pdo); 

$pdo = null;

header("./view/UsuariosView.php");

?>