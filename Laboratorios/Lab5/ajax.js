function cargarContenido(url){
    var contenedor = document.getElementById('contenido');
    var ajax = new XMLHttpRequest() //crea el objeto ajax 
    ajax.open("get", url, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function cambiarAtributos() {
    var objeto = document.getElementById("objeto").value;
    var opcolor = document.getElementById("color_select").value;
    var micolor = document.getElementById("color").value;
    var alto = document.getElementById("alto").value;
    var ancho = document.getElementById("ancho").value;

    if(opcolor == 'backgroundColor'){
        document.getElementById(objeto).style.backgroundColor = micolor;
    }
    else{
        document.getElementById(objeto).children[0].style.color = micolor;
    }
    document.getElementById(objeto).style.width += parseInt(ancho)+'px';
    document.getElementById(objeto).style.height += parseInt(alto)+'px';
}

function cargarCalendario(mes, anio){
    var contenedor = document.getElementById('resultado');
    var ajax = new XMLHttpRequest() //crea el objeto ajax 
    ajax.open("get", "calendario.php?mes="+mes+"&anio="+anio, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function cargar(){
    var mes = document.getElementById("opmes").value;
    var anio = document.getElementById("opanio").value;
    console.log(mes);
    console.log(anio);
    cargarCalendario(mes,anio);
}
