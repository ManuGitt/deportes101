const agregarWindow = document.querySelector('.agregarWindow');
const agregarBtn = document.querySelector('.footer-container');

agregarBtn.addEventListener('click', () => {
    agregarWindow.classList.toggle('abrir');
})

const editIcon = document.querySelector('.editIcon');
const agregarBtnText = document.querySelector('.agregarBtn');
const agregarProdBtn = document.querySelector('.agregarProdBtn');

editIcon.addEventListener('click', (evt) => {
    evt.preventDefault();
    agregarBtnText.textContent = "Editar producto";
    agregarProdBtn.value = "modificar";
    agregarProdBtn.textContent = "Modificar";
    agregarWindow.classList.toggle('abrir');
})



