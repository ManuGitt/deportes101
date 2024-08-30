function evitarEvento(evt) {
    evt.preventDefault();
}

function actualizarPrecio() {
    let cantidad = document.getElementById('cantidad');
    let precioUnitario = document.getElementById('precioUnitario_card');
    let precioTotal = document.getElementById('precioTotal_card');

    precioTotal.innerText = parseInt(precioUnitario.textContent)*parseInt(cantidad.value); 
}