function cargarContenido(url) {
    var contenedor = document.getElementById('contenido');
    var ajax = new XMLHttpRequest();
    ajax.open("get", url, true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState === 4) {
            contenedor.innerHTML = ajax.responseText;
        } else if (ajax.readyState === 4 && ajax.status !== 200) {
            console.error('Error al cargar el contenido:', ajax.status);
        }
    };
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf8");
    ajax.send();
}

let currentPlayer = 'X';

function fillPlayer(cellId) {
    const input = document.getElementById(cellId);
    if (input && input.value === '') {
        input.value = currentPlayer;
        input.disabled = true;
        currentPlayer = currentPlayer === 'X' ? 'O' : 'X';
        document.getElementById("message").textContent = `Turno del jugador: ${currentPlayer}`;
    }
}

function resetInputs() {
    currentPlayer = 'X';
    const inputs = document.querySelectorAll('.board input');
    inputs.forEach(input => {
        input.value = '';
        input.disabled = false;
    });
    document.getElementById("message").textContent = `Turno del jugador: ${currentPlayer}`;
}