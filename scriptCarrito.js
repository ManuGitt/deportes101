function sumaSubtotales(array) {
    let total=0;
    array.forEach(element => {
        total += element;
    });
    return total;
}

function modificarSubtotales(index){
    const preciosUnitarios = document.querySelectorAll(".precioUnitario_card");
    const cantidades = document.querySelectorAll(".cant-product");
    const subtotales = document.querySelectorAll(".precioTotal_card");
    
    subtotales[index].textContent = cantidades[index].value * preciosUnitarios[index].textContent;

    let subtotalesValues = [];
    subtotales.forEach(element => {
        subtotalesValues.push(parseInt(element.textContent));
    });
    total.textContent = sumaSubtotales(subtotalesValues);
}

const subtotales = document.querySelectorAll(".precioTotal_card");
let subtotalesValues = [];
subtotales.forEach(element => {
    subtotalesValues.push(parseInt(element.textContent));
})

const total = document.querySelector('.total');
window.addEventListener('load', () => {
    total.textContent = sumaSubtotales(subtotalesValues);
})
