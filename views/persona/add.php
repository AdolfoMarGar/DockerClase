<?php

$nombre = $datos["nombre"] ??"";


if($nombre==""&&$datos["resDB"]!=1){
    echo('<h1>Inserción de actor</h1>');
    echo('
        <form action="/" method="get" id="add" ><!--enctype="multipart/form-data" para pasar imagen entera-->
            <ul>
                <li>
                    Nombre:<input type="text" name="nombre">
                </li>
                <li>
                    Apellido:<input type="text" name="apellido">
                </li>
                <li>
                    Fotografia:<input type="text" name="fotografia">
                    <!--<input type="file" id="fotografia" name="peli_fotografia">-->
                </li>
            </ul>
            <h3>Rellene todos los campos</h3>
            <button type="submit" name="do" value="addPersona">Insertar</button>
            <button type="submit" name="do" value="navigator">Inicio</button>
        </form>

    '
    );
}else{
    echo('
        <form action="/" method="get" id="add" >

            <h1>Insert realizado con exito.</h1>
            <button type="submit" name="do" value="navigator">Inicio</button>
        </form>
    ');
}