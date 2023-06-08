function cargarContenido(url){
    //carga el contenido de una pagina en el lugar done estan los datos
    var contenedor = document.getElementById("contenido");
    //var n = document.getElementById("n").value;
    var ajax = new XMLHttpRequest();
    ajax.open('GET',url , true);
    ajax.onreadystatechange = function (){
        if(ajax.readyState == 4 )
        //4 se ha recibido todos los datos de las repsuesta del servidor
        {
            contenedor.innerHTML = ajax.responseText;
          
        }
    };
    ajax.send();
    //peticion http al servidor
}