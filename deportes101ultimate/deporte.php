<?php include('./template/header.php') ?>
<?php include('./conection.php'); ?>

<?php
$id_deporte = $_GET['id_deporte'];
$sentenciaSQL = $conexion->prepare("SELECT * FROM deportes WHERE id_deporte = :id_deporte");
$sentenciaSQL->bindParam(':id_deporte', $id_deporte);
$sentenciaSQL->execute();
$deporte = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

$sentenciaSQL = $conexion->prepare("SELECT * FROM productos WHERE deporte_id = :id_deporte");
$sentenciaSQL->bindParam(':id_deporte', $id_deporte);
$sentenciaSQL->execute();
$listaProductos = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

echo $id_deporte;
?>

<section class="productsList">
    <h2 class="title">Productos de <?php echo $deporte['deporte'] ?></h2>
    <div class="products-row">

    <?php foreach ($listaProductos as $producto) { ?>
      <a href=<?php echo "./producto.php?id_producto=".$producto['id_producto'] ?> class="productCard-link">
        <div class="productCard">
            <img class="productCard-img" src="./img/img-products/zapatillasPrueba.jpg" alt="">
            <div class="productCard-body">
              <h3 class="productCard-title"><?php echo $producto['nombre_producto'] ?></h3>
              <p class="productCard-price">$<?php echo $producto['precio_producto'] ?></p>
            </div>
        </div>
      </a>
    <?php }?>

    </div>
  </section>


<?php include('./template/footer.php') ?>