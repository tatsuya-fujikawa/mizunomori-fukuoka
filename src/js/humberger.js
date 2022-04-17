export function humbergerButton() {
    const button = document.querySelector('.js-humberger');
    button.addEventListener('click', () => {
        button.classList.toggle('is-open');
    });
};