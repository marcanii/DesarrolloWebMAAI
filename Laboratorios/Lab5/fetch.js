function cargarContenidoFetch(url) {
    //carga el contenido de una pagina en el lugar done estan los datos
    var contenedor = document.getElementById("contenido");
    fetch(url)
        .then(response => response.text())
        .then(data => contenedor.innerHTML = data);
}

function calcularOperacion() {
    //carga el contenido de una pagina en el lugar done estan los datos
    var contenedor = document.getElementById("resultado");
    var formulario = document.getElementById("options_nm");//le pasamos todo el  formulario en uno
    var parametros = new FormData(formulario);//aqui el formulario lo transforma en un objeto de tipo formdata
    console.log(parametros);
    fetch("calcular.php",
        {
            method: "POST",
            body: parametros
        })
        .then(response => response.text())
        .then(data => contenedor.innerHTML = data);
}