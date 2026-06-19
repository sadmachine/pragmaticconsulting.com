const input = document.querySelector("#phone");
const iti = window.intlTelInput(input, {
    utilsScript: "intl-tel-input/js/utils.js"
});

const contactForm = document.querySelector('#contactForm');

contactForm.addEventListener('submit', (e) => {
    const phone = document.querySelector("#phone");
    phone.value = iti.getNumber();
    return true;
})

function onSubmit(token) {
    const contactForm = document.querySelector('#contactForm');
    contactForm.requestSubmit();
}

