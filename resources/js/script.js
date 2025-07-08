// Efeito scroll no título
window.addEventListener('scroll', () => {
    const title = document.querySelector('.hero-title');
    if (!title) return;

    if (window.scrollY > 100) {
        title.classList.add('transparent');
    } else {
        title.classList.remove('transparent');
    }
});