let menu01 = document.getElementById('contenedorMenuPrincipal');
let menu02 = document.getElementById('AjusteMenu');
let altura = menu01.offsetTop-1;
if (screen.width>1280){//codigo resolución mediana
    
    window.addEventListener( 'scroll', function(){
        if(window.pageYOffset >= altura){
            menu01.classList.add('MenuPegajoso');
            menu02.classList.add('AjusteMenu');
        }else{
            menu01.classList.remove('MenuPegajoso');
            menu02.classList.remove('AjusteMenu');
        }
    } );    
}
