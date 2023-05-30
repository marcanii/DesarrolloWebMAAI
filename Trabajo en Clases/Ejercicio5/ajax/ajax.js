function cargarDepartamento(){
    var contenedor;
    contenedor = document.getElementById('departamentos');
    var ajax = new XMLHttpRequest() //crea el objeto ajax 
    ajax.open("get", 'opciones_dep.php', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function cargarProvincia(id){
    var contenedor;
    contenedor = document.getElementById('provincias');
    var ajax = new XMLHttpRequest() //crea el objeto ajax 
    ajax.open("get", 'opciones_pro.php?id='+id, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}