
//Seleccionamos los inputs
const inputs = document.querySelectorAll('form input');

//Cuando Sea Error 
const fomulario__input__error = document.getElementById('fomulario__input__error');
const fomulario__input__ayuda = document.getElementById('fomulario__input__ayuda');
const formulario__validacion_estado = document.getElementById('formulario__validacion_estado');
const formulario__mensaje = document.getElementById('formulario__mensaje');
const formulario__mensaje_exito = document.getElementById('formulario__mensaje_exito');


const enviar = document.getElementById('enviar');


//ValidarInputs
let inputCorreo = 0;



//alert("hola jajaja"+fomulario__input__error);

const expresionRegular = {
    //correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9_.+-]+\.[a-zA-Z0-9_.+-]+$/
    correo: /^[a-zA-Z0-9_.+-]+(@admin+\.comesafe+\.com|@pseg+\.comesafe+\.com|@gmail+\.com|@hotmail+\.com|@outlook+\.com|@yahoo+\.com|@alumno+\.ipn+\.mx)+$/
}

const validarFormulario = (e) => {
    switch(e.target.name){
        case "correo":
            if(expresionRegular.correo.test(e.target.value)){
                fomulario__input__error.style.display="none";
                fomulario__input__ayuda.style.display="none";
                formulario__mensaje.style.display="none";
                e.target.style.border="solid 4px #09c738";
                formulario__validacion_estado.style.opacity="0";
                enviar.style.pointerEvents = "auto";
                inputCorreo = 1;
            }else{
                fomulario__input__error.style.display="block";
                fomulario__input__ayuda.style.display="block";
                formulario__mensaje.style.display="block";
                e.target.style.border="solid 4px #ff0000";
                formulario__validacion_estado.style.opacity="1";
                enviar.style.pointerEvents = "none";
                inputCorreo = 0;
            }
            break;
        case "pass":
            console.log("es contraseña");
            break;
    }
}

inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);

});


enviar.onclick = function(e) {
    console.log("gol");
    formulario__mensaje_exito.style.display="block";
}