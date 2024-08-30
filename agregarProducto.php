<?php
    include('./conection.php');
    session_start();

    $id_producto = $_GET['id_producto'];

    $sentenciaSQL = $conexion->prepare("SELECT * FROM productos WHERE id_producto = :id_producto");
    $sentenciaSQL->bindParam(':id_producto', $id_producto);
    $sentenciaSQL->execute();
    $producto = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

    $userQuery = $conexion->prepare("SELECT * FROM usuarios WHERE nombre_usuario = :usuario");
    $userQuery->bindParam(':usuario', $_SESSION['usuario']);
    $userQuery->execute();
    $usuario = $userQuery->fetch(PDO::FETCH_LAZY);

    $sentenciaSQL = $conexion->prepare("INSERT INTO carrito_producto (id_carritoProducto, producto_id, carrito_id, cantidad) VALUES (NULL, :producto_id, :carrito_id, 1)");
    $sentenciaSQL->bindParam(':producto_id', $id_producto);
    $sentenciaSQL->bindParam(':carrito_id', $usuario['carrito_id']);
    $sentenciaSQL->execute();
    
    header('Location:carrito.php');
?>