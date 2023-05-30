function cargarDepartamento(){
    var contenedor;
    contenedor = document.getElementById('departamentos');
    fetch('opciones_dep.php')
        .then(response => response.text())
        .then(data => contenedor.innerHTML = data);
}

function cargarProvincia(id){
    var contenedor;
    contenedor = document.getElementById('provincias');
    fetch('opciones_pro.php?id='+id)
        .then(response => response.text())
        .then(data => contenedor.innerHTML = data);
}