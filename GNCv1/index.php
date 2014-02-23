<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
        <title>Grupo Nopal Code</title>
        <link rel="stylesheet" type="text/css" href="Vista/Estilos/Index.css">
        <script type="text/javascript" src="./Recursos/Funciones.js" ></script>
        <script type="text/javascript" src="./Recursos/Navegacion/ControladorMenus.js" ></script>
    </head>
    <body onload="iniIndex();">
        <?php
        // put your code here
        include './BarraMenus.html'; //Agregamos la barra de menus
        ?>
        <!-- Seccion de novedades -->
        <div id="shelfnovedades" class="ScrollBox">            
            <ul id="listacontenido">
                <!-- Plantilla ficha novedad -->
                <li class="ScrollBoxItem">
                    <image src="./Recursos/Imagenes/i1.png"/>
                    <div class='SIItemBox'>
                        <input type="submit" value='Titulo contenido'>
                        <p>Resumen novedad</p>  
                    </div>
                </li>
            </ul>
        </div>
    </body>
</html>
