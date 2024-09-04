<?php 
session_start();
if (isset($_SESSION['usuario'])) {
    $_SESSION = array();
}
include('../conection.php'); ?>
<?php
if ($_POST) {
    $sentenciaSQL = $conexion->prepare("SELECT * FROM usuarios WHERE `admin` = 1");
    $sentenciaSQL->execute();
    $userAdmin = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

    if ($_POST['username'] == $userAdmin['nombre_usuario'] && $_POST['password'] == $userAdmin['contrasenia_usuario']) {
        $_SESSION['check'] = "ok";
        $sentenciaSQL = $conexion->prepare("SELECT * FROM usuarios WHERE nombre_usuario = :username");
        $sentenciaSQL->bindParam(':username', $_POST['username']);
        $sentenciaSQL->execute();
        $usuario = $sentenciaSQL->fetch(PDO::FETCH_LAZY);
        $_SESSION['usuario'] = $userAdmin['nombre_usuario'];
        header('Location:./inicio.php');
    } else {
        $mensaje = "Error: El usuario o contraseña son incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="./css/admin.css">
</head>
<body>
    <div class="login-container">
        <div class="login-content">
            <form action="" method="POST">
                <?php  if (isset($mensaje)) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $mensaje; ?>         
                    </div>
                <?php } ?>
                <label for="username">Nombre de usuario</label>
                <input type="text" name="username" id="username" autocomplete="nope">

                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password">

                <input type="submit" value="Ingresar">
            </form>
            


        </div>
    </div>
</body>
</html>
