<?php include('./template/header.php') ?>
<?php
include('./conection.php');

if ($_POST) {
    $sentenciaSQL = $conexion->prepare("SELECT * FROM usuarios WHERE id_usuario = 1");
    $sentenciaSQL->execute();
    $usuario = $sentenciaSQL->fetch(PDO::FETCH_LAZY);
    if ($_POST['usernameAdmin'] == $usuario['nombre_usuario'] && $_POST['passwordAdmin'] == $usuario['cont_usuario']) {
        $_SESSION['usuario'] = "ok";
        $sentenciaSQL = $conexion->prepare("SELECT nombre_usuario FROM usuarios WHERE Id_usuario = 1");
        $sentenciaSQL->execute();
        $usuario = $sentenciaSQL->fetch(PDO::FETCH_LAZY);
        $_SESSION['nombreUsuario'] = $usuario['nombre_usuario'];
        header('Location:inicio.php');
    } else {
        $mensaje = "Error: El usuario o contraseña son incorrectos";
    }
}
?>
<main>
    <div class="container-login">
        <form action="" method="POST">
            <h1>Regístrate</h1>
            <input type="text" name="usuario" placeholder="Nombre de Usuario">
            <input type="password" name="password" placeholder="Contraseña">

            <input type="submit" value="Acceder">
        </form>
        <div class="register">
            <h2>¿Ya tienes una cuenta?</h2>
            <a href="login.php">Inicia sesión</a>
        </div>
    </div>
</main>
<?php include('./template/footer.php') ?>