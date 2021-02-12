ScrollReveal().reveal('.nav-brand');
ScrollReveal().reveal('.nav-elements', { delay: 500 });
ScrollReveal().reveal('.principal-slide', { delay: 500 });
ScrollReveal().reveal('.section-1', { delay : 500 });
ScrollReveal().reveal('.section-text', { delay : 500 });
ScrollReveal().reveal('.newsletter', { delay : 500 });
ScrollReveal().reveal('.footer', { delay: 500 });
ScrollReveal().reveal('.nav-elements-2', { delay: 500 });
document.querySelector('.menu-btn').addEventListener('click', () => {
    document.querySelector('.nav-elements').classList.toggle('show');
});