let presente = false;

function validazione(event) {
    const check = document.querySelector('#controllo');
    check.textContent = '';
    const compilacampi = document.querySelector('#compilacampi');
    const pass1 = document.querySelector('#pass-corta');
    const pass2 = document.querySelector('#special-char');
    const confermapassword = document.querySelector('#confermapassword');
    const usrinuso = document.querySelector('#usrinuso');

    compilacampi.classList.add('hidden');
    pass1.classList.add('hidden');
    pass2.classList.add('hidden');
    confermapassword.classList.add('hidden');
    usrinuso.classList.add('hidden');


    if (!presente) {
        if (form.username.value === "" || form.password.value === "" || form.confermapassword.value === "") {
            compilacampi.classList.remove('hidden')
            event.preventDefault();
        } else {
            if (form.password.value.length < 8) {
                pass1.classList.remove('hidden');
                event.preventDefault();
            }

            if (!ck_pass.test(form.password.value)) {
                pass2.classList.remove('hidden');
                event.preventDefault();
            }

            if (form.confermapassword.value !== form.password.value) {
                confermapassword.classList.remove('hidden');
                event.preventDefault();
            }
        }
    } else {
        usrinuso.classList.remove('hidden');
        event.preventDefault();
    }

}

function onResponse(response) {
    return response.json();
}


function onJson(json) {
    presente = false;
    if (json.presente) {
        presente = true;
    }
}

function ControlloUser() {
    fetch("http://localhost/hw2/public/signup/username/" + encodeURIComponent(username_selector.value)).then(onResponse).then(onJson);
}
const ck_pass = /[\,\#\@\%\&\!\£\=\-\_\+\-\.]/
const username_selector = document.querySelector('.username');
username_selector.addEventListener('blur', ControlloUser);
const form = document.querySelector('form');
// Aggiungi listener
form.addEventListener('submit', validazione);