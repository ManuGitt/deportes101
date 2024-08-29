<?php include('./template/header.php') ?>
<?php include('./conection.php'); ?>

<?php
$id_marca = $_GET['id_marca'];
$sentenciaSQL = $conexion->prepare("SELECT * FROM marcas WHERE id_marca = :id_marca");
$sentenciaSQL->bindParam(':id_marca', $id_marca);
$sentenciaSQL->execute();
$marca = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

$sentenciaSQL = $conexion->prepare("SELECT * FROM productos WHERE marca_id = :id_marca");
$sentenciaSQL->bindParam(':id_marca', $id_marca);
$sentenciaSQL->execute();
$listaProductos = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

echo $id_marca;
?>

<section class="productsList">
    <h2 class="title">Productos de <?php echo $marca['nombre_marca'] ?></h2>
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