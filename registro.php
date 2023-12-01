<?php
include("d:/xampie/htdocs/Garden/modelo/conexion.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    $es_admin = 0;
    if (isset($_POST["es_admin"])){
        $es_admin = 1;
    }

    $conexion= new conexion();
    if($conexion->getConexion() === null){
        die("error al obtener la conexion");
    }
    $pdo= $conexion->getConexion();

    $contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (usuario, contrasena, es_admin) VALUES (:usuario, :contrasena, :es_admin)";

    $stmt= $pdo->prepare($sql);
    //asigna valores a los parametros siguientes;
    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':contrasena', $contrasena_hash);
    $stmt->bindParam(':es_admin', $es_admin, PDO::PARAM_INT);

    if ($stmt->execute()) {
        echo "Usuario registrado exitosamente.";
        header("location: index.php");
    } else {
        echo "Error al registrar el usuario: " . $stmt->errorInfo()[2];
    }
}
?>
