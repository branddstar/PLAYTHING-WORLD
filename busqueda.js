document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('.btn-search').addEventListener('click', function() {
        var searchTerm = document.getElementById('buscador').value.toLowerCase();
        var elements = document.querySelectorAll('*');
        var resultados = document.getElementById('resultados');
        var encontrado = false;

        resultados.innerHTML = '';

        elements.forEach(function(element) {
            if (element.textContent.toLowerCase().includes(searchTerm)) {
                element.style.display = 'block'; // Mostrar el elemento
                resultados.innerHTML += '<p>' + element.textContent + '</p>';
                encontrado = true;
            } else {
                element.style.display = 'none'; // Ocultar el elemento si no coincide
            }
        });

        if (!encontrado) {
            resultados.innerHTML = '<p>No se encontraron resultados para la búsqueda.</p>';
        }
    });
});