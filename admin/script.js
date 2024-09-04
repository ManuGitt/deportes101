const agregarWindow = document.querySelector('.agregarWindow');
const agregarBtn = document.querySelector('.footer-container');

agregarBtn.addEventListener('click', () => {
    agregarWindow.classList.toggle('abrir');
})