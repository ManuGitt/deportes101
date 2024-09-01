<?php include('./template/header.php') ?>
<?php include('./conection.php') ?>

<div class="contenedor-carrito">

<div class="container-info">

<?php
    /* error_reporting(0); */

    $userQuery = $conexion->prepare("SELECT * FROM usuarios WHERE nombre_usuario = :usuario");
    $userQuery->bindParam(':usuario', $_SESSION['usuario']);
    $userQuery->execute();
    $usuario = $userQuery->fetch(PDO::FETCH_LAZY);
    
    $sentenciaSQL = $conexion->prepare("SELECT * FROM carrito_producto cp INNER JOIN productos p ON cp.producto_id = p.id_producto WHERE cp.carrito_id = :carrito_id;");
    $sentenciaSQL->bindParam(':carrito_id', $usuario['carrito_id']);
    $sentenciaSQL->execute();
    $productos = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

    foreach ($productos as $producto) {
?>
<div class="info">
    <div class="info-hijo">
        <img src="./img/img-products/zapatillasPrueba.jpg" alt="foto">
        <p><?php echo $producto['nombre_producto']; ?></p>
        <p id="precioUnitario_card"><?php echo $producto['precio_producto']; ?></p>
        <input type="number" name="cant_producto" class="cant-product" id="cantidad" value="1" min="1" max="10" onchange="actualizarPrecio()">
        <p>TOTAL</p>
        <p id="precioTotal_card"><?php echo number_format($producto['precio_producto'], 0) ?></p>
    </div>
</div>
<?php } ?>


</div>
<div class="container-product">
    <div class="product">
        <p>CONFIRMA TU COMPRA</p>
        <p>Total</p>
        <p>$120.000</p>
        <button>MEDIOS DE PAGO</button>
        <p>Segui buscando lo mejor en <a href="#">101 deportes</a></p>
        <img src="./img/img-web/logobase.jpg" alt="#">
    </div>
    
</div>
</div>

<?php include('./template/footer.php') ?>