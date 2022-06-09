const form = document.getElementsByTagName('form');
const btn = document.getElementById('btn');

// NAME VALIDATION
const nombre = document.getElementById('NAC');
const nomError = document.querySelector('#NAC + span.errorNAC');

var regexNAC = /[a-zA-Z ]{2,254}/;

nombre.addEventListener('input', function(event) {
    var test = showErrorC();

    if (test) {
        // If there is still an error, show the correct error
        nombre.className = 'invalid  form-control';
        btn.disabled = true;
        showErrorC();

    } else {
        nombre.className = ' form-control';
        btn.disabled = false;
        nomError.innerHTML = ''; // Reset the content of the message
        nomError.className = 'error'; // Reset the visual state of the message
    }
});

function showErrorC() {
    if (nombre.value.length === 0) {
        nomError.textContent = 'Ingresa el nombre el área';
        nomError.className = 'error active';
        return true;
    }

    if (!regexC.test(nombre.value)) {
        nomError.textContent = 'Formato incorrecto';
        nomError.className = 'error active';
        return true;
    }
    return false;
}