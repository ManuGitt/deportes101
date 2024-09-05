<footer class="agregarWindow">
    <div class="footer-container">
        <h2 class="agregarBtn">AGREGAR PRODUCTO</h2>
    </div>
    <div class="form-container">
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group-left">
                <label class="label-footer" for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" required>
                <input type="file" class="form-control" name="txtImg" id="txtImg" required> 
            </div>
            <div class="form-group-right">
                <div class="form-group-rightTop">
                    <div class="rightTop-items">
                        <label class="label-footer" for="precio">Precio</label>
                        <input type="number" name="precio" id="precio" min="0" max="1000000" required>
                    </div>
                    <div class="rightTop-items">
                        <label class="label-footer" for="stock">Stock</label>
                        <input type="number" name="stock" id="stock" min="1" max="500" required>
                    </div>
                    
                </div>
                <div class="form-group-rightBottom">
                    <div class="rightBottom-items">
                        <?php 
                        $sentenciaSQL = $conexion->prepare("SELECT * FROM marcas");
                        $sentenciaSQL->execute();
                        $marcas = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
                        $sentenciaSQL = $conexion->prepare("SELECT * FROM tiposproductos");
                        $sentenciaSQL->execute();
                        $tipos = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
                        $sentenciaSQL = $conexion->prepare("SELECT * FROM categorias");
                        $sentenciaSQL->execute();
                        $categorias = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
                        $sentenciaSQL = $conexion->prepare("SELECT * FROM deportes");
                        $sentenciaSQL->execute();
                        $deportes = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
                        
                        ?>
                        <label class="label-footer" for="marca">Marca</label>
                        <select name="marca" id="marca">
                            <?php foreach($marcas as $marca) {?>
                            <option value="<?php echo $marca['id_marca']; ?>"><?php echo $marca['nombre_marca']; ?></option>
                            <?php } ?>
                        </select>
                        <label class="label-footer" for="tipo">Tipo</label>
                        <select name="tipo" id="tipo">
                            <?php foreach($tipos as $tipo) {?>
                            <option value="<?php echo $tipo['id_tipoProducto']; ?>"><?php echo $tipo['tipoProducto']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="rightBottom-items">
                        <label class="label-footer" for="categoria">Categoria</label>
                        <select name="categoria" id="categoria">
                            <?php foreach($categorias as $categoria) {?>
                            <option value="<?php echo $categoria['id_categoria']; ?>"><?php echo $categoria['categoria']; ?></option>
                            <?php } ?>
                        </select>
                        <label class="label-footer" for="deporte">Deporte</label>
                        <select name="deporte" id="deporte">
                            <?php foreach($deportes as $deporte) {?>
                            <option value="<?php echo $deporte['id_deporte']; ?>"><?php echo $deporte['deporte']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <form method="POST">
                        <button type="submit" value="agregar" name="accion">Agregar producto</button>
                    </form>
                    
                   
                </div>
            </div>
            
        </form>
    </div>
</footer>

<script src="./script.js"></script>
</body>
</html>