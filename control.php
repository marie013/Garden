<?php
$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];
session_start();


include("d:/xampie/htdocs/Garden/modelo/conexion.php");

$conexion = new conexion();//se instancia un obj conexion
$pdo= $conexion->getConexion();//obtiene la conexion
$sql = "SELECT id_usuario, usuario, contrasena, es_admin FROM usuarios WHERE usuario = :usuario";
$stmt=$pdo->prepare($sql);
$stmt->bindParam(':usuario', $usuario);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row) {
    if ($row["es_admin"] == 1) {
        $_SESSION["autentificado"] = "1";
        $_SESSION["id"] = $row["id_usuario"];
        $_SESSION["user"] = $row["usuario"];
        $_SESSION["pass"] = $row["contrasena"];
        header("location: admin.php");
    } else {
        $_SESSION["autentificado"] = "1";
        $_SESSION["id"] = $row["id_usuario"];
        $_SESSION["user"] = $row["usuario"];
        $_SESSION["pass"] = $row["contrasena"];
        header("location: aplicacion.php");
    }
} else {
    echo "Usuario o contraseña incorrecta";
    header("location: index.php?errorusuario=si");
}

?>
