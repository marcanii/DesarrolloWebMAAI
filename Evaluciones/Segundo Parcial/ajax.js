function insertarLibro(){
    //carga el contenido de una pagina en el lugar done estan los datos
    var contenedor = document.getElementById("contenido");
    var formulario =document.getElementById("form_libro");//le pasamos todo el  formulario en uno
    var parametros = new FormData(formulario);//aqui el formulario lo transforma en un objeto de tipo formdata
    f=new FormData();
    f.add
    //var n = document.getElementById("n").value;
    var ajax = new XMLHttpRequest();
    ajax.open('POST','insertar.php', true);
    ajax.onreadystatechange = function (){
        if(ajax.readyState == 4 )
        //4 se ha recibido todos los datos de las repsuesta del servidor
        {
            contenedor.innerHTML = ajax.responseText;
            document.getElementById("mensaje").textContent = 'Se anadio el registro correctamente';
            setTimeout(function() {
                cargarFecha();
            }, 2000);
        }
    };
    ajax.send(parametros);
    //peticion http al servidor
}

function cargarFecha(){
    document.getElementById("mensaje").textContent = 'Fecha: 10/06/2023';
}

function cargarContenidoAjax(url, titulo){
    cargarTitulo(titulo)
    //carga el contenido de una pagina en el lugar done estan los datos
    var contenedor = document.getElementById("contenido");
    contenedor.style.height='auto';
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