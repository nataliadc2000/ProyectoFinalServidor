<?php
include_once("../connection/connection.php");

$sql = "SELECT * FROM users WHERE username = :nombre";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':nombre', $nombre);
$stmt->execute();

if ($stmt->rowCount() === 1) {
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
    if (password_verify($pass, $usuario["pass"])) {
        
        $_SESSION["usuarios"] = $usuario;
        header("Location:../view/productsView.php");
    } else {
        $_SESSION["error_login"] = "Login incorrecto";
        header("Location: ../index.php");
    }
} else {
    $_SESSION["error_login"] = "Login incorrecto";
    header("Location: ../index.php");
}
?>