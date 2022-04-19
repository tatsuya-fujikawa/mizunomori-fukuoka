export function humbergerButton() {
    const button = document.querySelector('.js-humberger');
    const nav = document.getElementById('js-nav')
    button.addEventListener('click', () => {
        button.classList.toggle('is-open');
        nav.classList.toggle('is-open');
    });
};