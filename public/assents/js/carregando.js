// Aguarda 5 segundos e redireciona
setTimeout(() => {
    // Adiciona uma transição de saída suave antes de mudar a página (opcional)
    document.body.style.opacity = '0';
    document.body.style.transition = 'opacity 0.5s ease';
    
    setTimeout(() => {
        window.location.href = '../views/index.php';
    }, 500);
}, 5000);