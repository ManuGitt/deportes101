<?php include('./template/header.php') ?>
<?php include('./conection.php'); 
    $sentenciaSQL = $conexion -> prepare("SELECT * FROM marcas");
    $sentenciaSQL -> execute();
    $listaMarcas = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>
<main>
  <h2 class="title">Encuentra a tus marcas favoritas</h2>
  <div class="sliderBrands">
    <div class="sliderBrands-track">
      <?php foreach ($listaMarcas as $marca) { ?>
      
        <div class="slideBrand">
          <a href="">
            <img src="./img/img-brands/<?php echo $marca['img_marca'] ?>" alt="<?php echo $marca['img_marca'] ?>">
          </a>
        </div>
      
      <?php } ?>
    </div>
  </div>


  <section class="featuredProducts-section">
    <h2 class="title">Productos destacados</h2>
    <div class="featuredProducts-row">

        <div class="productCard">
          <img class="productCard-img" src="./img/img-products/zapatillasPrueba.jpg" alt="">
          <div class="productCard-body">
            <h3 class="productCard-title"></h3>
            <p class="productCard-price"></p>
          </div>
        </div>

    </div>
  </section>
</main>
<?php include('./template/footer.php') ?>