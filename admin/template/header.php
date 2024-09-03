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
</head>
<body>
    
