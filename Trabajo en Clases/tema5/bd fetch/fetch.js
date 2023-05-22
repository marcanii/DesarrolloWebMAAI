function cargarContenido(url){
    
    //carga el contenido de una pagina en el lugar done estan los datos
    var contenedor = document.getElementById("datos");
    fetch(url)
    .then(response => response.text())
    .then(data => contenedor.innerHTML = data);
}

function crearPersona(){
    alert("entro")
    //carga el contenido de una pagina en el lugar done estan los datos
    var contenedor;
    contenedor = document.getElementById("datos");
    var formulario =document.getElementById("formpersona");//le pasamos todo el  formulario en uno
    var parametros = new FormData(formulario);//aqui el formulario lo transforma en un objeto de tipo formdata
    fetch("create.php",
        {
            method: "POST",
            body: parametros
        })
    .then(response => response.text())
    .then(data => contenedor.innerHTML = data);
}

function eliminarPersona(idenviado){
    alert("entro")
    //carga el contenido de un apagina en el lugar done estan los datos
    var contenedor = document.getElementById("datos");
    //var n = document.getElementById("n").value;

    fetch("delete.php?id="+idenviado)
    .then(response => response.text())
    .then(data => contenedor.innerHTML = data);

}

function editarPersona(){
    alert("entro")
    //carga el contenido de una pagina en el lugar done estan los datos
    var contenedor;
    contenedor = document.getElementById("datos");
    var formulario =document.getElementById("formpersona2");//le pasamos todo el  formulario en uno
    var parametros = new FormData(formulario);//aqui el formulario lo transforma en un objeto de tipo formdata
    fetch("update.php",
        {
            method: "POST",
            body: parametros
        })
        .then(response => response.text())
        .then(data => contenedor.innerHTML = data);
}