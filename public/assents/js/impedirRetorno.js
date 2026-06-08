let navegandoInternamente = false;

// Marca como "navegação interna" se clicar em qualquer link
document.addEventListener('click', function(e) {
    if (e.target.tagName === 'A') {
        navegandoInternamente = true;
    }
});

// Antes de fechar/esconder, verifica se não é navegação interna
document.addEventListener('visibilitychange', function() {
    if (document.visibilityState === 'hidden' && !navegandoInternamente) {
        navigator.sendBeacon('logout.php');
    }
});