<?php include('./conection.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Deportes101</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="./css/producto.css">
</head>

<body>
  <header>
    <nav>
      <div class="nav-principal">
        <ul>
          <li id="logo"><a href="index.php"><img src="img/img-web/logobase.jpg" alt=""></a></li>

          <li id="searchbar">
            <div class="searcher">
              <img src="img/img-web/pngegg.png" alt="">
            </div>
            <input type="text">
          </li>

          <li id="carrito" class="navbar-item"><img src="img/img-web/MdiCart.png" alt=""></li>
          <li id="account" class="navbar-item"><img src="img/img-web/PhUserCircle.png" alt=""></li>
        </ul>
      </div>

      <div class="nav-secundaria">
        <ul>
          <li class="dropdown">
            <a href="#" class="dropbtn">MARCAS</a>
            <div class="dropdown-content">
              <?php
              $sentenciaSQL = $conexion->prepare("SELECT * FROM marcas");
              $sentenciaSQL->execute();
              $marcas = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

              foreach ($marcas as $marca) {
              ?>
                <a href="<?php echo 'marca.php?id_marca=' . $marca['id_marca'] ?>"><?php echo $marca['nombre_marca'] ?></a>
              <?php } ?>
            </div>
          </li>
          <li class="dropdown">
            <a href="#" class="dropbtn">DEPORTES</a>
            <div class="dropdown-content">
              <?php
              $sentenciaSQL = $conexion->prepare("SELECT * FROM deportes");
              $sentenciaSQL->execute();
              $deportes = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

              foreach ($deportes as $deporte) {
              ?>
                <a href="<?php echo 'deporte.php?id_deporte=' . $deporte['id_deporte'] ?>"><?php echo $deporte['deporte'] ?></a>
              <?php } ?>
            </div>
          </li>
          <li class="dropdown">
            <a href="#" class="dropbtn">INDUMENTARIA</a>
            <div class="dropdown-content">
              <?php
              $sentenciaSQL = $conexion->prepare("SELECT * FROM categorias");
              $sentenciaSQL->execute();
              $categorias = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

              foreach ($categorias as $categoria) {
                if ($categoria['tipoproducto_id'] == 2) {
              ?>

                  <a href="<?php echo 'indumentaria.php?id_categoria=' . $categoria['id_categoria'] ?>"><?php echo $categoria['categoria'] ?></a>
              <?php }
              } ?>
            </div>
          </li>
          <li class="dropdown">
            <a href="#" class="dropbtn">ACCESORIOS</a>
            <div class="dropdown-content">
              <?php
              $sentenciaSQL = $conexion->prepare("SELECT * FROM categorias");
              $sentenciaSQL->execute();
              $categorias = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

              foreach ($categorias as $categoria) {
                if ($categoria['tipoproducto_id'] == 1) {
              ?>

                  <a href="<?php echo "accesorio.php?id_categoria=" . $categoria['id_categoria'] ?>"><?php echo $categoria['categoria'] ?></a>
              <?php }
              } ?>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>