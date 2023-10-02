let score = document.querySelector('#score');
let regresarScore = document.querySelector('#regresarScore');
let cerrar = document.querySelector('#cerrarbtn');
let infoPerfil = document.querySelector('.infoPerfil');
let scores = document.querySelector('.scores');

score.addEventListener('click', ()=>{
    infoPerfil.style.display = 'none'
    scores.style.display = 'block'
})

regresarScore.addEventListener('click', () => {
    infoPerfil.style.display = 'block'
    scores.style.display = 'none'
})

cerrar.addEventListener('click', ()=> {
    infoPerfil.style.display = 'block'
    scores.style.display = 'none'
})