<?php
include('./conection.php');

if ($_POST) {
    $sentenciaSQL = $conexion->prepare("SELECT * FROM usuarios WHERE nombre_usuario = :username");
    $sentenciaSQL->bindParam(':username', $_POST['usuario']);
    $sentenciaSQL->execute();
    $usuario = $sentenciaSQL->fetch(PDO::FETCH_LAZY);
    if ($_POST['usuario'] == $usuario['nombre_usuario'] && $_POST['password'] == $usuario['contrasenia_usuario']) {
        session_start();
        $_SESSION['check'] = "ok";
        $sentenciaSQL = $conexion->prepare("SELECT * FROM usuarios WHERE nombre_usuario = :username");
        $sentenciaSQL->bindParam(':username', $_POST['usuario']);
        $sentenciaSQL->execute();
        $usuario = $sentenciaSQL->fetch(PDO::FETCH_LAZY);
        $_SESSION['usuario'] = $usuario['nombre_usuario'];
        header('Location:index.php');
    } else {
        $mensaje = "Error: El usuario o contraseña son incorrectos";
    }
}
?>
<?php include('./template/header.php') ?>
<main>
    <div class="container-login">
    <?php  if (isset($mensaje)) { ?>
            <div class="alert alert-danger" role="alert">
                  <?php echo $mensaje; ?>         
            </div>
          <?php } ?>
        <form action="" method="POST">
            <h1>Inicia sesión</h1>
            <input type="text" name="usuario" placeholder="Nombre de Usuario">
            <input type="password" name="password" placeholder="Contraseña">

            <input type="submit" value="Acceder">
        </form>
        <div class="register">
            <h2>¿No tienes una cuenta?</h2>
            <a href="registro.php">Registrate</a>
        </div>
    </div>
</main>
<?php include('./template/footer.php') ?>