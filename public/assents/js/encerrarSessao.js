
    document.addEventListener('visibilitychange', function() {
        // 'hidden' significa que o usuário fechou a aba, 
        // minimizou o navegador ou mudou de site.
        if (document.visibilityState === 'hidden') {
            
            // navigator.sendBeacon envia dados de forma assíncrona 
            // mesmo depois que a página é fechada.
            navigator.sendBeacon('logout.php');
        }
    });