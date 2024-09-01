<?php include('./conection.php');?>
<?php
  session_start();
  if (isset($_SESSION['usuario'])) {
    $nombreUsuario = $_SESSION['usuario'];
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Deportes101</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="./css/producto.css">
  <link rel="stylesheet" href="./css/login.css">
  <link rel="stylesheet" href="./css/carrito.css">
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

          <li id="carrito" class="navbar-item navbar-item2">
          <a href="carrito.php"><img src="img/img-web/MdiCart.png" alt=""></a>  
          </li>
          <li id="account" class="navbar-item navbar-item2 dropdown">
            <a href=""><img src="img/img-web/PhUserCircle.png" alt=""></a> 
            <div class="dropdown-content">
              <?php if (!isset($_SESSION['usuario'])) { ?>
                <a href="login.php">Iniciar sesión</a>
                <a href="registro.php">Registrarse</a>
              <?php } ?>
              <a href="cerrar.php">Cerrar sesión</a>
            </div>
          </li>
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