function cargarContenido(url){
    
    //carga el contenido de una pagina en el lugar done estan los datos
    var contenedor = document.getElementById("datos");
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



function crearPersona(){
    alert("entro")
    //carga el contenido de una pagina en el lugar done estan los datos
    var contenedor;
    contenedor = document.getElementById("datos");
    var formulario =document.getElementById("formpersona");//le pasamos todo el  formulario en uno
    var parametros = new FormData(formulario);//aqui el formulario lo transforma en un objeto de tipo formdata
    f=new FormData();
    f.add
    //var n = document.getElementById("n").value;
    var ajax = new XMLHttpRequest();
    ajax.open('POST','create.php', true);
    ajax.onreadystatechange = function (){
        if(ajax.readyState == 4 )
        //4 se ha recibido todos los datos de las repsuesta del servidor
        {
            contenedor.innerHTML = ajax.responseText;
     
        }
    };
    ajax.send(parametros);
    //peticion http al servidor
}

function eliminarPersona(idenviado){
    alert("entro")
    //carga el contenido de un apagina en el lugar done estan los datos
    var contenedor = document.getElementById("datos");
    //var n = document.getElementById("n").value;
    var ajax = new XMLHttpRequest();
    ajax.open('GET','delete.php?id='+idenviado , true);
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

function editarPersona(){
    alert("entro")
    //carga el contenido de una pagina en el lugar done estan los datos
    var contenedor;
    contenedor = document.getElementById("datos");
    var formulario =document.getElementById("formpersona2");//le pasamos todo el  formulario en uno
    var parametros = new FormData(formulario);//aqui el formulario lo transforma en un objeto de tipo formdata
    f=new FormData();
    f.add
    //var n = document.getElementById("n").value;
    var ajax = new XMLHttpRequest();
    ajax.open('POST','update.php', true);
    ajax.onreadystatechange = function (){
        if(ajax.readyState == 4 )
        //4 se ha recibido todos los datos de las repsuesta del servidor
        {
            contenedor.innerHTML = ajax.responseText;
        
        }
    };
    ajax.send(parametros);

}