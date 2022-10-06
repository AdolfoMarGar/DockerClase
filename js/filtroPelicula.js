function comprobarDatos(){
    var lleno = true;

    if(document.getElementById("titulo").value==null||document.getElementById("titulo").value==""){
      alert("Introduce un titulo");
      lleno = false;
    }

    if(document.getElementById("genero").value==null||document.getElementById("genero").value==""){
      alert("Introduce un genero");
      lleno = false;
    }

    if(document.getElementById("pais").value==null||document.getElementById("pais").value==""){
      alert("Introduce un pais");
      lleno = false;
    }

    if(document.getElementById("anio").value==null||document.getElementById("anio").value==""){
      alert("Introduce un anio");
      lleno = false;
    }

    if(document.getElementById("img").value==null||document.getElementById("img").value==""){
      alert("Introduce una imagen");
      lleno = false;
    }
    return lleno;

  }
  
  function ejecutar(){
    var pasa = comprobarDatos();
    alert(pasa);
    if(pasa ===true){
      document.getElementById("formulario").submit();
    }
  }
  