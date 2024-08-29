<?php include('./template/header.php') ?>
<?php include('./conection.php'); ?>

<?php
$id_accesorio = $_GET['id_categoria'];
$sentenciaSQL = $conexion->prepare("SELECT * FROM categorias WHERE id_categoria = :id_accesorio");
$sentenciaSQL->bindParam(':id_accesorio', $id_accesorio);
$sentenciaSQL->execute();
$accesorio = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

$sentenciaSQL = $conexion->prepare("SELECT * FROM productos WHERE categoria_id = :id_accesorio");
$sentenciaSQL->bindParam(':id_accesorio', $id_accesorio);
$sentenciaSQL->execute();
$listaProductos = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

echo $id_accesorio;
?>

<section class="productsList">
    <h2 class="title"><?php echo $accesorio['accesorio'] ?></h2>
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