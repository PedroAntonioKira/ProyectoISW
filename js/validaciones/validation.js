const form = document.getElementsByTagName('form');
const btn = document.getElementById('btn');

// EMAIL VALIDATION
const email = document.getElementById('Correo_Electronico');
const emailError = document.querySelector('#Correo_Electronico + span.errorE');

var regexE = /(?:[a-z0-9!#$%&'+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/;

email.addEventListener('input', function(event) {
    var test = showErrorE();

    if (test) {
        // If there is still an error, show the correct error
        email.className = 'invalid  form-control';
        btn.disabled = true;
        showErrorE();

    } else {
        email.className = ' form-control';
        btn.disabled = false;
        emailError.innerHTML = ''; // Reset the content of the message
        emailError.className = 'error'; // Reset the visual state of the message
    }
});

function showErrorE() {
    if (email.value.length === 0) {
        emailError.textContent = 'Ingresa tu correo electronico.';
        emailError.className = 'error active';
        return true;
    }

    if (!regexE.test(email.value)) {
        emailError.textContent = 'Correo electrónico no válido.';
        emailError.className = 'error active';
        return true;
    }
    return false;
}

//NAME VALIDATION
var regexN = /^[\w'\-,.][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){},.\-\´|~<>;:[\]]{2,}$/;

const nameU = document.getElementById('Nombre');
const nameError = document.querySelector('#Nombre + span.errorN');

nameU.addEventListener('input', function(event) {
    var test = showErrorN(nameU, nameError);

    if (test) {
        // If there is still an error, show the correct error
        nameU.className = 'invalid  form-control';
        btn.disabled = true;
        showErrorN(nameU, nameError);

    } else {
        nameU.className = ' form-control';
        btn.disabled = false;
        nameError.innerHTML = ''; // Reset the content of the message
        nameError.className = 'error'; // Reset the visual state of the message
    }
});

// LAST NAME
const nameL = document.getElementById('AP');
const nameLError = document.querySelector('#AP + span.errorAP');

nameL.addEventListener('input', function(event) {
    var test = showErrorN(nameL, nameLError);

    if (test) {
        // If there is still an error, show the correct error
        nameL.className = 'invalid  form-control';
        btn.disabled = true;
        showErrorN(nameL, nameLError);

    } else {
        nameL.className = ' form-control';
        btn.disabled = false;
        nameLError.innerHTML = ''; // Reset the content of the message
        nameLError.className = 'error'; // Reset the visual state of the message
    }
});

// LAST NAME 2
const nameLL = document.getElementById('AM');
const nameLLError = document.querySelector('#AM + span.errorAM');

nameLL.addEventListener('input', function(event) {
    var test = showErrorN(nameLL, nameLLError);

    if (test) {
        // If there is still an error, show the correct error
        nameLL.className = 'invalid  form-control';
        btn.disabled = true;
        showErrorN(nameLL, nameLLError);

    } else {
        nameLL.className = ' form-control';
        btn.disabled = false;
        nameLLError.innerHTML = ''; // Reset the content of the message
        nameLLError.className = 'error'; // Reset the visual state of the message
    }
});

function showErrorN(campo, errorC) {
    if (campo.value.length === 0) {
        errorC.textContent = 'Campo requerido.';
        errorC.className = 'error active';
        return true;
    }

    if (!regexN.test(campo.value)) {
        errorC.textContent = 'Formato inválido';
        errorC.className = 'error active';
        return true;
    }
    return false;
}

// CURP VALIDATION
const curp = document.getElementById('CP');
const curpError = document.querySelector('#CP + span.errorC');

var regexC = /^[A-Z]{1}[AEIOU]{1}[A-Z]{2}[0-9]{2}(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM]{1}(AS|BC|BS|CC|CS|CH|CL|CM|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[B-DF-HJ-NP-TV-Z]{3}[0-9A-Z]{1}[0-9]{1}$/;

curp.addEventListener('input', function(event) {
    var test = showErrorC();

    if (test) {
        // If there is still an error, show the correct error
        curp.className = 'invalid  form-control';
        btn.disabled = true;
        showErrorC();

    } else {
        curp.className = ' form-control';
        btn.disabled = false;
        curpError.innerHTML = ''; // Reset the content of the message
        curpError.className = 'error'; // Reset the visual state of the message
    }
});

function showErrorC() {
    if (curp.value.length === 0) {
        curpError.textContent = 'Ingresa tu CURP';
        curpError.className = 'error active';
        return true;
    }

    if (!regexC.test(curp.value)) {
        curpError.textContent = 'CURP no válida';
        curpError.className = 'error active';
        return true;
    }
    return false;
}

// NUM CONTRATACION VALIDATION
const nc = document.getElementById('NC');
const ncError = document.querySelector('#NC + span.errorNC');

var regexNC = /^[0-9]+$/;

nc.addEventListener('input', function(event) {
    var test = showErrorNC();

    if (test) {
        // If there is still an error, show the correct error
        nc.className = 'invalid  form-control';
        btn.disabled = true;
        showErrorNC();

    } else {
        nc.className = ' form-control';
        btn.disabled = false;
        ncError.innerHTML = ''; // Reset the content of the message
        ncError.className = 'error'; // Reset the visual state of the message
    }
});

function showErrorNC() {
    if (nc.value.length === 0) {
        ncError.textContent = 'Ingresa el número de contrato';
        ncError.className = 'error active';
        return true;
    }
    if (!regexNC.test(nc.value)) {
        ncError.textContent = 'Número de contrato no válido';
        ncError.className = 'error active';
        return true;
    }
    return false;
}