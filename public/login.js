function check() {
    const invalid = document.querySelector("#controllo");
    invalid.textContent = '';
}

const form = document.querySelector('form')
form.addEventListener('submit', check)