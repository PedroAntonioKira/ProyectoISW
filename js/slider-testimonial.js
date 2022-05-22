let slider = document.querySelector('.slider-contenedor');
let sliderId = document.querySelectorAll('.slider-test');
let cont = 1;
let tamW = sliderId[0].clientWidth;
let intervalo = 3000;

window.addEventListener("resize",function(){
    tamW = sliderId[0].clientWidth;
})

setInterval(function tiempo(){
    slides();
}, intervalo);

function slides(){
    slider.style.transform = 'translate(' + (- tamW * cont) + 'px';
    slider.style.transition = 'transform 1s';
    cont++;

    if(cont == sliderId.length){
        cont = 0;
        setTimeout(function(){
            slider.style.transform = 'translate(0px)';
            slider.style.transition = 'transform 0s';
        },intervalo)
    }
}