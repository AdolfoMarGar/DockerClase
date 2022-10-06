<h1>Formulario para añadir actor.</h1>

<?php
if(!isset($_REQUEST["nombre"])){
    echo('
        <script src="./js/filtroPersona.js"></script>
        <form action="/" method="post" id="add" ><!--enctype="multipart/form-data" para pasar imagen entera-->
            <ul>
                <li>
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre">
                </li>
                <li>
                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido">
                </li>
                <li>
                    <label for="fotografia" >Imagen:</label>
                    <input type="text" id="fotografia" name="fotografia">
                    <!--<input type="file" id="fotografia" name="peli_fotografia">-->
                </li>
            </ul>
            <button name="do" value="addPersona" onclick="ejecutar()">Enviar</button>
            <button type="submit" name="do" value="navigator">Inicio</button>
        </form>

    '
    );
}