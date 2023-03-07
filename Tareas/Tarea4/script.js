// función para obtener el valor de una cookie
function getCookie(name) {
    var cookieName = name + "=";
    var cookies = document.cookie.split(';');
    for (var i = 0; i < cookies.length; i++) {
      var cookie = cookies[i].trim();
      if (cookie.indexOf(cookieName) == 0) {
        return cookie.substring(cookieName.length, cookie.length);
      }
    }
    return null;
  }
  
  // función para establecer una cookie
  function setCookie(name, value, days) {
    var expires = "";
    if (days) {
      var date = new Date();
      date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
      expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + value + expires + "; path=/";
  }
  
  // función para aumentar el contador de visitas
  function incrementCounter() {
    var counter = document.getElementById("counter");
    var count = parseInt(getCookie("visits"));
    if (isNaN(count)) {
      count = 0;
    }
    count++;
    setCookie("visits", count, 365);
    counter.innerHTML = count;
  }
  
  // llamar a la función al cargar la página
  window.onload = incrementCounter;
  