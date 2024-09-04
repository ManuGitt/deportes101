<footer class="agregarWindow">
    <div class="footer-container">
        <h2 class="agregarBtn">AGREGAR PRODUCTO</h2>
    </div>
    <div class="form-container">
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group-left">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre">
                <input type="file" class="form-control" name="txtImg" id="txtImg">
            </div>
            <div class="form-group-right">
                <div class="form-group-rightTop">
                    <label for="precio">Precio</label>
                    <input type="text" name="precio" id="precio">
                    <label for="stock">Stock</label>
                    <input type="number" name="stock" id="stock" min="1" max="500">
                </div>
                <div class="form-group-rightBottom">

                </div>
            </div>
            
        </form>
    </div>
</footer>

<script src="./script.js"></script>
</body>
</html>