function updateClock() {
    const now = new Date();

    // 1. Formatar Hora (HH:MM:SS)
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');
    const seconds = String(now.getSeconds()).padStart(2, '0');
    const timeString = `${hours}:${minutes}:${seconds}`;
    
    // Atualiza todos os relógios
    document.querySelectorAll('.digital-clock').forEach(el => {
        el.textContent = timeString;
    });

    // 2. Formatar Data
    const options = { 
        weekday: 'long', 
        day: 'numeric', 
        month: 'long'
    };
    const dateString = now.toLocaleDateString('pt-BR', options);
    
    // Atualiza todas as datas (Desktop e Mobile)
    document.querySelectorAll('.current-date').forEach(el => {
        el.textContent = dateString;
    });
}

// Iniciar o relógio e atualizar a cada 1 segundo
setInterval(updateClock, 1000);
updateClock();