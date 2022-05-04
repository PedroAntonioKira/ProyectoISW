let menu = document.getElementById('contenedorMenuPrincipal');
let altura = menu.offsetTop;



window.addEventListener( 'scroll', function(){

    if(window.pageYOffset >= altura){
        menu.classList.add('MenuPegajoso');
    }else{
        menu.classList.remove('MenuPegajoso');
    }
} );

