let validadCheckBox = document.getElementById('check');
let menuPrincipal = document.getElementById('contenedorMenuPrincipal');
let checkBoxDesactivado = document.getElementById('botonMenuResponsive01');
let checkBoxActivado = document.getElementById('botonMenuResponsive02');


validadCheckBox.addEventListener("change", validarCheckbox, false);

function validarCheckbox(){
    let checkBox = validadCheckBox.checked;
    if(checkBox){
        menuPrincipal.classList.add('contenedorMenuPrincipalActivo');
        checkBoxDesactivado.style.display = "none";
        checkBoxActivado.style.display = "flex";

        //checkBoxDesactivado.classList.add('checkBoxiconInactivo');
    }else{
        menuPrincipal.classList.remove('contenedorMenuPrincipalActivo');
        checkBoxDesactivado.style.display = "flex";
        checkBoxActivado.style.display = "none";
    }
}
/*
if(validadCheckBox){
    alert("Esta seleccionado");
}else{
    alert("No esta seleccionado");
}*/