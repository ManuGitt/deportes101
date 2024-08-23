<<<<<<< HEAD
<?php include('./conection.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deportes101</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <header>
        <nav>
            <div class="nav-principal">
                <ul>
                    <li id="logo"><a href=""><img src="img/img-web/logobase.jpg" alt=""></a></li>
                    
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
                    $sentenciaSQL = $conexion -> prepare("SELECT * FROM marcas");
                    $sentenciaSQL -> execute();
                    $marcas = $sentenciaSQL ->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($marcas as $marca) {
                    ?>
                    <a href="#"><?php echo $marca['nombre_marca'] ?></a>
                    <?php }?>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" class="dropbtn">DEPORTES</a>
                <div class="dropdown-content">
                    <a href="#">Deporte 1</a>
                    <a href="#">Deporte 2</a>
                    <a href="#">Deporte 3</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" class="dropbtn">ACCESORIOS</a>
                <div class="dropdown-content">
                    <a href="#">Accesorio 1</a>
                    <a href="#">Accesorio 2</a>
                    <a href="#">Accesorio 3</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" class="dropbtn">INDUMENTARIA</a>
                <div class="dropdown-content">
                    <a href="#">Indumentaria 1</a>
                    <a href="#">Indumentaria 2</a>
                    <a href="#">Indumentaria 3</a>
                </div>
            </li>
        </ul>
            </div>
        </nav>
=======
<?php include('./conection.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deportes101</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <header>
        <nav>
            <div class="nav-principal">
                <ul>
                    <li id="logo"><a href=""><img src="img/img-web/logobase.jpg" alt=""></a></li>
                    
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
                    $sentenciaSQL = $conexion -> prepare("SELECT * FROM marcas");
                    $sentenciaSQL -> execute();
                    $marcas = $sentenciaSQL ->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($marcas as $marca) {
                    ?>
                    <a href="#"><?php echo $marca['nombre_marca'] ?></a>
                    <?php }?>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" class="dropbtn">DEPORTES</a>
                <div class="dropdown-content">
                    <a href="#">Deporte 1</a>
                    <a href="#">Deporte 2</a>
                    <a href="#">Deporte 3</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" class="dropbtn">ACCESORIOS</a>
                <div class="dropdown-content">
                    <a href="#">Accesorio 1</a>
                    <a href="#">Accesorio 2</a>
                    <a href="#">Accesorio 3</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" class="dropbtn">INDUMENTARIA</a>
                <div class="dropdown-content">
                    <a href="#">Indumentaria 1</a>
                    <a href="#">Indumentaria 2</a>
                    <a href="#">Indumentaria 3</a>
                </div>
            </li>
        </ul>
            </div>
        </nav>
>>>>>>> c7b24f4b223244bd31650610df6edea4d2242d41
    </header>