<?php include('./template/header.php') ?>
<?php
include('./conection.php');

if ($_POST) {
    $sentenciaSQL = $conexion->prepare("SELECT * FROM usuarios WHERE nombre_usuario = :username");
    $sentenciaSQL->bindParam(':username', $_POST['username']);
    $sentenciaSQL->execute();
    $checkUsername = $sentenciaSQL->fetch(PDO::FETCH_LAZY);
    $sentenciaSQL = $conexion->prepare("SELECT * FROM usuarios WHERE correo_usuario = :correo");
    $sentenciaSQL->bindParam(':correo', $_POST['email']);
    $sentenciaSQL->execute();
    $checkEmail = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

    if (!isset($checkEmail)) {
        if (!isset($checkUsername)) {
            // Agregar nuevo carrito
            $sentenciaSQL = $conexion->prepare("INSERT INTO `carritos`(`id_carrito`) VALUES (NULL)");
            $sentenciaSQL->execute();
            // Guardar carrito en $carrito
            $sentenciaSQL = $conexion->prepare("SELECT * FROM `carritos` ORDER BY `id_carrito` DESC LIMIT 1");
            $sentenciaSQL->execute();
            $carrito = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $carrito_id = $carrito['id_carrito'];
            

            $sentenciaSQL = $conexion->prepare("INSERT INTO `usuarios`(`id_usuario`, `nombre`, `apellido`, `nombre_usuario`, `contrasenia_usuario`, `correo_usuario`, `admin`, `carrito_id`) VALUES (NULL,':nombre',':apellido',':username',':password',':correo','0',':carrito_id')");
            $sentenciaSQL->bindParam(':nombre', $nombre);
            $sentenciaSQL->bindParam(':apellido', $apellido);
            $sentenciaSQL->bindParam(':username', $username);
            $sentenciaSQL->bindParam(':password', $password);
            $sentenciaSQL->bindParam(':correo', $email);
            $sentenciaSQL->bindParam(':carrito_id', $carrito_id);
            $sentenciaSQL->execute();


        } else {
            $mensajeUsername = "El nombre de usuario ya está en uso";
        }
    } else {
        $mensajeMail = "El correo electrónico ya está en uso";
        }
}

    /* $sentenciaSQL = $conexion->prepare("SELECT * FROM usuarios WHERE id_usuario = 1");
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
    } */

?>
<main>
    <div class="container-login">
        <form action="" method="POST">
            <h1>Regístrate</h1>
            <input type="text" name="username" placeholder="Nombre de Usuario">
            <input type="password" name="password" placeholder="Contraseña">
            <input type="email" name="email" placeholder="Correo electrónico">
            <div class="nombreYApellido">
                <input type="text" name="nombre" placeholder="Nombre completo">
                <input type="text" name="apellido" placeholder="Apellido">
            </div>
           

            <input type="submit" value="Crear cuenta">
        </form>
        <div class="register">
            <h2>¿Ya tienes una cuenta?</h2>
            <a href="login.php">Inicia sesión</a>
        </div>
    </div>
</main>
<?php include('./template/footer.php') ?>