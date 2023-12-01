<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>eGarden</title>
</head>
<body class="bg-dark" >
    <div class="">
        
        
    <form class="form-index" action="control.php" method="POST">
    <img src="logo.png" alt="">    
    <table>
        <tr>
            <td colspan="2" align="center">
            <?php if (isset($_GET["errorusuario"]) && $_GET["errorusuario"] == "si") { ?> <p class= "text-white"><b>Datos incorrectos</b></p>
            <?php } else { ?>
            <p class= "text-white">Introduce tu clave de acceso</p>
            <?php } ?></td>
        </tr><br/>
        <tr class="">
        <td align="right" class= "text-white" >Usuario: </td>
        <td><input class="input-box" type="text" name="usuario" size="8" maxlength="50"/></td>
        </tr><br/>   
        <tr>
            <td align="right" class= "text-white">Clave:</td>
            <td><input class="input-box" type="password" name="contrasena" size="8" maxlength="50"/></td>
        </tr><br/>
        <tr> <td> <input class="input-box" type="submit" value="Entrar"/></td>
        </tr>
    </table>
    <p class= "text-white">¿No tienes una cuenta? <a href="registro.html" class= "text-white">Regístrate aquí</a></p>
    </form>
    
    </div>

</body>
</html>