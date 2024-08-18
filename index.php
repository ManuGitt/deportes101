<?php include('./template/header.php') ?>
<?php include('./conection.php'); 
    $sentenciaSQL = $conexion -> prepare("SELECT * FROM marcas");
    $sentenciaSQL -> execute();
    $listaMarcas = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>
<main>
  <h2 class="titulo">Encuentra a tus marcas favoritas</h2>
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
</main>
<?php include('./template/footer.php') ?>