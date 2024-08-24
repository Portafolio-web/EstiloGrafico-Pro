function filterCategory(category) {
    const articles = document.querySelectorAll('.article');
    articles.forEach(article => {
        if (category === 'todas' || article.classList.contains(category)) {
            article.style.display = 'block';
        } else {
            article.style.display = 'none';
        }
    });
}

// Inicializa con todos los artículos visibles
filterCategory('todas');

// Manejo del formulario de suscripción
document.getElementById('subscribe-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const email = document.getElementById('email').value;
    alert(`Gracias por suscribirte con el correo: ${email}`);
    document.getElementById('subscribe-form').reset();
});