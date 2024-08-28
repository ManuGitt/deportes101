<?php include('./template/header.php') ?>
<?php include('./conection.php'); 
    $sentenciaSQL = $conexion -> prepare("SELECT * FROM marcas");
    $sentenciaSQL -> execute();
    $listaMarcas = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>
<main>
  <?php echo $nombreUsuario ?>
  <h2 class="title">Encuentra a tus marcas favoritas</h2>
  <div class="sliderBrands">
    <div class="sliderBrands-track">
      <?php foreach ($listaMarcas as $marca) { ?>
      
        <div class="slideBrand">
          <a href="<?php echo 'marca.php?id_marca='.$marca['id_marca'] ?>">
            <img src="./img/img-brands/<?php echo $marca['img_marca'] ?>" alt="<?php echo $marca['img_marca'] ?>">
          </a>
        </div>
      
      <?php } ?>
    </div>
  </div>

  
  <?php $sentenciaSQL = $conexion -> prepare("SELECT * FROM productos");
        $sentenciaSQL -> execute();
        $listaProductos = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

        $sentenciaSQL2 = $conexion -> prepare("SELECT * FROM productos ORDER BY cantidadComprada DESC LIMIT 6");
        $sentenciaSQL2 -> execute();
        $productosDestacados = $sentenciaSQL2 ->fetchAll(PDO::FETCH_ASSOC);

  ?>

  <section class="featuredProducts-section">
    <h2 class="title">Productos destacados</h2>
    <div class="featuredProducts-row">

    <?php foreach ($productosDestacados as $producto) { ?>
      <a href=<?php echo "./producto.php?id_producto=".$producto['id_producto'] ?>>
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
  <section style="height: 100vh;"></section> <!-- para agregar la scrollbar y que el ancho de la página no se mueva 
                                                  tanto cuando se usan los dropdown que superan el alto del viewport -->
</main>

<?php include('./template/footer.php') ?>