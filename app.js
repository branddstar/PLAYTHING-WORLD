document.addEventListener('keyup', e=>{
    if(e.target.matches('#buscador')){

document.querySelectorAll('.texto').forEach(texto=>{
    console.log(texto.textContent.toLowerCase());
})



}
})