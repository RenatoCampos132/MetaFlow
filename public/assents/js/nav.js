document.addEventListener('DOMContentLoaded', function() {
    const searchForm = document.getElementById('searchForm');
    const searchInput = document.getElementById('searchInput');
    const btnSearch = document.getElementById('btnSearch');
    const btnMenu = document.getElementById('btnMenu');
    const menuIcon = document.getElementById('menuIcon');
    const dropdownMenu = document.getElementById('dropdownMenu');

    // --- Lógica da Busca ---
    btnSearch.addEventListener('click', function(e) {
        if (!searchForm.classList.contains('active')) {
            e.preventDefault(); 
            searchForm.classList.add('active');
            searchInput.focus();
        } 
        else if (searchInput.value.trim() === "") {
            e.preventDefault();
            searchForm.classList.remove('active');
        }
    });

    // --- Lógica do Menu (Com troca de ícone) ---
    btnMenu.addEventListener('click', () => {
        const isOpen = dropdownMenu.classList.toggle('open');
        
        // Troca visual do ícone
        if (isOpen) {
            menuIcon.classList.replace('bi-list', 'bi-x-lg');
            searchForm.classList.remove('active'); // Fecha busca se abrir menu
        } else {
            menuIcon.classList.replace('bi-x-lg', 'bi-list');
        }
    });

    // --- Cliques Externos ---
    document.addEventListener('click', function(event) {
        // Fecha busca se clicar fora
        if (!searchForm.contains(event.target)) {
            if (searchInput.value.trim() === "") {
                searchForm.classList.remove('active');
            }
        }
        // Fecha menu se clicar fora
        if (!dropdownMenu.contains(event.target) && !btnMenu.contains(event.target)) {
            if (dropdownMenu.classList.contains('open')) {
                dropdownMenu.classList.remove('open');
                menuIcon.classList.replace('bi-x-lg', 'bi-list');
            }
        }
    });
});