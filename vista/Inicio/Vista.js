//Botones dirreccionales
let score = document.querySelector('#score');
let editor = document.querySelector('#editar');
let perfil = document.querySelector('#perfil');
let record = document.querySelector('#record');

//botonoes de regresar
let regresarScore = document.querySelector('#regresarScore');
let regresarEdit = document.querySelector('#regresarEdit');
let regresarProfile = document.querySelector('#regresarProfile');
let regresarrecord = document.querySelector('#regresarrecord');

//botones de cerrar
let cerrar = document.querySelector('#cerrarbtn');
let cerrarEdit = document.querySelector('#cerrarbtnEdit');
let cerrarProfile = document.querySelector('#cerrarbtnProfile');
let cerrarbtnrecord = document.querySelector('#cerrarbtnrecord');

//layouts
let infoPerfil = document.querySelector('.infoPerfil');
let scores = document.querySelector('.scores');
let editar = document.querySelector('.edit');
let profile = document.querySelector('.profile');
let records = document.querySelector('.record');

/*---------------------------------------------------*/
/*score.addEventListener('click', ()=>{
    infoPerfil.style.display = 'none'
    scores.style.display = 'block'
})

editor.addEventListener('click', ()=>{
    infoPerfil.style.display = 'none'
    editar.style.display = 'block'
})

perfil.addEventListener('click', ()=>{
    infoPerfil.style.display = 'none'
    profile.style.display = 'block'
})

record.addEventListener('click', ()=>{
    infoPerfil.style.display = 'none'
    records.style.display = 'block'
})*/

/*---------------------------------------------------*/
/*regresarScore.addEventListener('click', () => {
    infoPerfil.style.display = 'block'
    scores.style.display = 'none'
})

regresarEdit.addEventListener('click', () => {
    infoPerfil.style.display = 'block'
    editar.style.display = 'none'
})

regresarProfile.addEventListener('click', () => {
    infoPerfil.style.display = 'block'
    profile.style.display = 'none'
})

regresarrecord.addEventListener('click', () => {
    infoPerfil.style.display = 'block'
    records.style.display = 'none'
})*/

/*---------------------------------------------------*/
/*cerrar.addEventListener('click', ()=> {
    infoPerfil.style.display = 'block'
    scores.style.display = 'none'
})

cerrarEdit.addEventListener('click', ()=> {
    infoPerfil.style.display = 'block'
    editar.style.display = 'none'
})

cerrarProfile.addEventListener('click', () => {
    infoPerfil.style.display = 'block'
    profile.style.display = 'none'
})

cerrarbtnrecord.addEventListener('click', () => {
    infoPerfil.style.display = 'block'
    records.style.display = 'none'
})*/

function cerrarVentana(layouts, btnCerrar) {
    btnCerrar.addEventListener('click', () => {
        infoPerfil.style.display = 'block';
        layouts.style.display = 'none';
    });
}

function mostrarVentana(layouts, btnCerrar) {
    btnCerrar.addEventListener('click', () => {
        infoPerfil.style.display = 'none';
        layouts.style.display = 'block';
    });
}

mostrarVentana(scores, score);
mostrarVentana(editar, editor);
mostrarVentana(profile, perfil);
mostrarVentana(records, record);

cerrarVentana(scores, regresarScore);
cerrarVentana(editar, regresarEdit);
cerrarVentana(profile, regresarProfile);
cerrarVentana(records, regresarrecord);

cerrarVentana(scores, cerrar);
cerrarVentana(editar, cerrarEdit);
cerrarVentana(profile, cerrarProfile);
cerrarVentana(records, cerrarbtnrecord);