<?php

require_once("../connection/Connection.php");

try {
  
        $stmt = $pdo->prepare("INSERT INTO users (id, username, mail, pass, description) 
                               VALUES (null, :username, :mail, :pass, :description)");
    
        // Asignar valores a los parámetros
        $username =$_POST["username"];
        $mail = $_POST["mail"];
        $pass = $_POST["pass"];
        $description = $_POST["description"];
    
        // Vincular los parámetros
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':mail', $mail);
        $stmt->bindParam(':pass', $pass);
        $stmt->bindParam(':description', $description);
    
        // Ejecutar la declaración de inserción
        $stmt->execute();
    
        echo ("Registro insertado correctamente.");
        header("Location: ../view/RegistroView.php");

} catch (PDOException $e) {
    echo "Error al insertar el registro: " . $e->getMessage();
}
?>