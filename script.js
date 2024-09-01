function evitarEvento(evt) {
    evt.preventDefault();
}

function actualizarPrecio() {
    let cantidad = document.querySelector('.cant_product');
    let precioUnitario = document.querySelector('.precioUnitario_card');
    let precioTotal = document.querySelector('.precioTotal_card');

    precioTotal.innerText = parseInt(precioUnitario.textContent)*parseInt(cantidad.value); 
}




