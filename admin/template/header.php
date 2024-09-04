<?php include('../conection.php'); ?>
<?php
  session_start();
  if (isset($_SESSION['usuario'])) {
    $nombreUsuario = $_SESSION['usuario'];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="stylesheet" href="./css/navbar.css">
</head>
<body>
<nav>
  <ul>
    <li><a href="">Administrador</a></li>
    <li><a href="">Productos</a></li>
    <li><a href="">Ver sitio web</a></li>
    <li><a href="../cerrar.php">Cerrar sesión</a></li>
  </ul>
</nav>
    
