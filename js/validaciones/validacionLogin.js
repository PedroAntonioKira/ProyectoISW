//Seleccionamos los inputs
const inputs = document.querySelectorAll('form input');

//Cuando Sea Error 
const fomulario__input__error = document.getElementById('fomulario__input__error');
const formulario__validacion_estado = document.getElementById('formulario__validacion_estado');
const formulario__mensaje = document.getElementById('formulario__mensaje');
const formulario__mensaje_exito = document.getElementById('formulario__mensaje_exito');

const enviar = document.getElementById('enviar');

//ValidarInputs
let inputCorreo = 0;

const expresionRegular = {
    //correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9_.+-]+\.[a-zA-Z0-9_.+-]+$/
    //correo: /^[a-zA-Z0-9_.+-]+(@admin+\.comesafe+\.com|@pseg+\.comesafe+\.com|@gmail+\.com|@hotmail+\.com|@outlook+\.com|@yahoo+\.com|@alumno+\.ipn+\.mx)+$/
    correo: /^[a-zA-Z0-9_.+-]+(@admin+\.comesafe+\.com|@pseg+\.comesafe+\.com|@gmail+\.com|@hotmail+\.com|@outlook+\.com|@yahoo+\.com|@alumno+\.ipn+\.mx|@pseguridad+\.comesafe+\.com)+$/
}

const validarFormulario = (e) => {
    //console.log(e.target.value);
    switch(e.target.name){
        case "correo":
            if(expresionRegular.correo.test(e.target.value)){
                fomulario__input__error.style.display="none";
                e.target.style.border="solid 4px #09c738";
                formulario__validacion_estado.style.opacity="0";
                enviar.style.pointerEvents = "auto";
                inputCorreo = 1;
            }else{
                fomulario__input__error.style.display="block";
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

let mensajeAyuda =  " -No puedes usar simbolos Raros en tu correo. \n "+
                    " Ejemplo:     £  ,  #  ,  $  ,  %  ,  &,   * \n\n" +
                    " -Asegurate de poner una terminacion de dominio Correcto: \n" +
                    " Ejemplo:\n                    @admin.comsafe.com    \n" + 
                    "                    @pseg.comsafe.com    \n" +
                    "                    @pseguridad.comsafe.com    \n" +
                    "                    @gmail.com   \n" +
                    "                    @outlook.com    \n" +
                    "                    @hotmail.com    \n" +
                    "                    @yahoo.com    \n" +
                    "                    @alumno.ipn.com    \n";

function mostrarAyuda(){
    alert(mensajeAyuda);
}
