<?php include('../conection.php') ?>
<?php 
/* if (!isset($_SESSION['usuario'])) {
  echo "No tiene autorización";
  die();
}  */

include('./template/header.php'); ?>
<?php
if ($_POST) {
  $nombre = $_POST['nombre'];
  $precio = $_POST['precio'];
  $stock = $_POST['stock'];
  $marca = $_POST['marca'];
  $tipo = $_POST['tipo'];
  $categoria = $_POST['categoria'];
  $deporte = $_POST['deporte'];

  $sentenciaSQL = $conexion->prepare("INSERT INTO `productos`(`id_producto`, `nombre_producto`, `precio_producto`, `stock_producto`, `cantidadComprada`, `tipoproducto_id`, `categoria_id`, `deporte_id`, `marca_id`) VALUES (NULL,':nombre',':precio',':stock','0',':tipo',':categoria',':deporte',':marca')");
  $sentenciaSQL->bindParam(':nombre', $nombre);
  $sentenciaSQL->bindParam(':precio', $precio);
  $sentenciaSQL->bindParam(':stock', $stock);
  $sentenciaSQL->bindParam(':tipo', $tipo);
  $sentenciaSQL->bindParam(':categoria', $categoria);
  $sentenciaSQL->bindParam(':deporte', $deporte);
  $sentenciaSQL->bindParam(':marca', $marca);
  $sentenciaSQL->execute(); 
}
    
  //echo $nombreUsuario;

  $sentenciaSQL = $conexion->prepare("SELECT * FROM productos");
  $sentenciaSQL->execute();
  $productos = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);  
?>

<div class="container">
<div class="table-container">
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Marca</th>
        <th>Tipo</th>
        <th>Categoría</th>
        <th>Deporte</th>
        <th>Precio</th>
        <th>Stock</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($productos as $producto) { 
        //MARCA
        $sentenciaSQL = $conexion->prepare("SELECT * FROM marcas WHERE id_marca = :id_marca");
        $sentenciaSQL->bindParam(':id_marca', $producto['marca_id']);
        $sentenciaSQL->execute();
        $marca = $sentenciaSQL->fetch(PDO::FETCH_LAZY);
        //TIPO PRODUCTO
        $sentenciaSQL = $conexion->prepare("SELECT * FROM tiposproductos WHERE id_tipoProducto = :id_tP");
        $sentenciaSQL->bindParam(':id_tP', $producto['tipoproducto_id']);
        $sentenciaSQL->execute();
        $tipo = $sentenciaSQL->fetch(PDO::FETCH_LAZY);
        //CATEGORIA
        $sentenciaSQL = $conexion->prepare("SELECT * FROM categorias WHERE id_categoria = :id_c");
        $sentenciaSQL->bindParam(':id_c', $producto['categoria_id']);
        $sentenciaSQL->execute();
        $categoria = $sentenciaSQL->fetch(PDO::FETCH_LAZY);
        //DEPORTE
        $sentenciaSQL = $conexion->prepare("SELECT * FROM deportes WHERE id_deporte = :id_d");
        $sentenciaSQL->bindParam(':id_d', $producto['deporte_id']);
        $sentenciaSQL->execute();
        $deporte = $sentenciaSQL->fetch(PDO::FETCH_LAZY);
        
        ?>
        
      <tr>
        <td><?php echo $producto['id_producto'] ?></td>
        <td><?php echo $producto['nombre_producto'] ?></td>
        <td><?php echo $marca['nombre_marca'] ?></td>
        <td><?php echo ucfirst($tipo['tipoProducto']) ?></td>
        <td><?php echo ucfirst($categoria['categoria']) ?></td>
        <td><?php echo ucfirst($deporte['deporte']) ?></td>
        <td><?php echo $producto['precio_producto'] ?></td>
        <td><?php echo $producto['stock_producto'] ?></td>
      </tr>
      <?php } ?>
    </tbody>
    
  </table>
</div>
</div>


<?php include('./template/footer.php'); ?>
