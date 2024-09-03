<?php include('./template/header.php') ?>
<?php
    if (!isset($_SESSION['usuario'])) {
        echo "No tiene autorización";
        die();
    }
  echo $nombreUsuario;
?>
