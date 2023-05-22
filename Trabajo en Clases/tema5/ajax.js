function cargarContenido(abrir){
    var contenedor;
    contenedor = document.getElementById('resultado');
    var ajax = new XMLHttpRequest();
    ajax.open("get", abrir+"?n="+document.getElementById('n').value, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4){
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf8");
    ajax.send();
}
