function comprobarDatos(){
    var lleno = true;

    if(document.getElementById("nombre").value==null||document.getElementById("nombre").value==""){
      alert("Introduce un nombre");
      lleno = false;
    }

    if(document.getElementById("apellido").value==null||document.getElementById("apellido").value==""){
      alert("Introduce un apellido");
      lleno = false;
    }

    if(document.getElementById("img").value==null||document.getElementById("img").value==""){
      alert("Introduce una fotografia");
      lleno = false;
    }

    return lleno;
  }
  
  function ejecutar(){
    var pasa = comprobarDatos();
    if(pasa ===true){
      document.getElementById("add").submit();
    }else{
        alert("Rellene todos los campos.");
    }
  }