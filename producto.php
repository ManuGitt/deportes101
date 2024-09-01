<?php include('./conection.php') ?>

<?php
    $id_producto = $_GET['id_producto'];
    $sentenciaSQL = $conexion->prepare("SELECT * FROM productos WHERE id_producto = :id_producto");
    $sentenciaSQL->bindParam(':id_producto', $id_producto);
    $sentenciaSQL->execute();
    $producto = $sentenciaSQL->fetch(PDO::FETCH_LAZY);  
    
    $sentenciaSQL = $conexion->prepare("SELECT * FROM carrito_producto WHERE producto_id = :producto_id");
    $sentenciaSQL->bindParam(':producto_id', $id_producto);
    $sentenciaSQL->execute();
    $prod = $sentenciaSQL->fetch(PDO::FETCH_LAZY);
?>

<?php include('./template/header.php'); echo $nombreUsuario;?>
<div class="container">
        <div class="product-container">
            <div class="photo-container">
                <img src="./img/img-products/zapatillasPrueba.jpg" alt="">
            </div>
            <div class="info-container">
                <p><?php echo $producto['nombre_producto'] ?></p>
                <div class="price">
                    <a>$<?php echo $producto['precio_producto'] ?></a>
                </div>
                <br>
                <br>
                <div class="description">
                    <a>DESCRIPCIÓN</a>
                    <br>
                    <br>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. In esse nihil architecto laborum odit praesentium sunt dolorem possimus, corrupti quisquam? Architecto adipisci illum inventore corporis fugit delectus hic aliquid aut.</p>
                </div>
                

               <div class="talles">
                <p>TALLES</p>
                <input type="radio"  id="radio-1" name="talle" value="37">
                <label for="radio-1">37</label>
                <input type="radio"  id="radio-2" name="talle" value="38">
                <label for="radio-2">38</label>
                <input type="radio"  id="radio-3" name="talle" value="39">
                <label for="radio-3">39</label>
                <input type="radio"  id="radio-4" name="talle" value="40">
                <label for="radio-4">40</label>
                <input type="radio"  id="radio-5" name="talle" value="40">
                <label for="radio-5">41</label>
              
               </div>
               
                
                
            </div>

            <?php if(empty($prod)) { ?>
                <a href="agregarProducto.php?id_producto=<?php echo $id_producto ?>" class="carrito-container">
                    Agregar al carrito
                </a>
            <?php } else { ?>
                <a href="agregarProducto.php?id_producto=<?php echo $id_producto ?>" class="carrito-container"> 
                    Ya se encuentra en el carrito
                </a>
            <?php } ?>
            
        
        </div>
    </div>

<?php include('./template/footer.php') ?>