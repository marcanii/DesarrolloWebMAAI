function cargarContenidoAjax(url){
    //carga el contenido de una pagina en el lugar donde estan los datos
    var contenedor = document.getElementById("contenido");
    var ajax = new XMLHttpRequest();
    ajax.open('GET', url, true);
    ajax.onreadystatechange = function (){
        if(ajax.readyState == 4 )
        //4 se ha recibido todos los datos de las repsuesta del servidor
        {
            contenedor.innerHTML = ajax.responseText;
        }
    };
    ajax.send();
}

function cargarContenidoFetch(url){
    //carga el contenido de una pagina en el lugar done estan los datos
    var contenedor = document.getElementById("contenidocrear");
    fetch(url)
    .then(response => response.text())
    .then(data => contenedor.innerHTML = data);
}

function insertarProducto(){
    //carga el contenido de una pagina en el lugar done estan los datos
    var contenedor = document.getElementById("contenidocrear");
    var formulario =document.getElementById("form_producto");//le pasamos todo el  formulario en uno
    var parametros = new FormData(formulario);//aqui el formulario lo transforma en un objeto de tipo formdata
    f=new FormData();
    f.add
    //var n = document.getElementById("n").value;
    var ajax = new XMLHttpRequest();
    ajax.open('POST','crear.php', true);
    ajax.onreadystatechange = function (){
        if(ajax.readyState == 4 )
        //4 se ha recibido todos los datos de las repsuesta del servidor
        {
            contenedor.innerHTML = ajax.responseText;
            setTimeout(function() {
                cargarContenidoAjax('read.php');
            }, 2000);
        }
    };
    ajax.send(parametros);
}
