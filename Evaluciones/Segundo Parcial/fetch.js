function cargarContenidoFetch(url, titulo) {
    cargarTitulo(titulo);
    //carga el contenido de una pagina en el lugar done estan los datos
    var contenedor = document.getElementById("contenido");
    fetch(url)
        .then(response => response.text())
        .then(data => contenedor.innerHTML = data);
}

function cargarTitulo(titulo) {
    document.getElementById("titulo").textContent = titulo;
}

function listar(titulo) {
    cargarTitulo(titulo)
    var contenedor = document.getElementById('contenido');
    fetch('datos.php')
        .then(response => response.text())
        .then(data => {
            objeto = JSON.parse(data)
            html = dibujar(objeto);
            contenedor.innerHTML = html;
        }
        );
    function dibujar(objeto) {
        console.log(objeto);
        let html = "<select id='optitulo' onclick='cargarImagen()'>";
        for (let i = 0; i < objeto.length; i++) {
            html += `<option value="${i}">${objeto[i].titulo}</option>`
        }
        html+='</select>';
        html += `<div id="imag"><img width="100px" src="images/${objeto[0].imagen}"></img></div>`
        return html;
    }
}
function cargarImagen(){
    console.log("entro a cargar img");
    let id = document.getElementById("optitulo").value;
    document.getElementById("imag").innerHTML = `<img width="100px" src="images/${objeto[id].imagen}"></img>`;
}
