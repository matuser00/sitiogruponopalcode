<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
        <title>Grupo Nopal Code</title>
        <link rel="stylesheet" type="text/css" href="Vista/Estilos/CatalogoSP.css">
        <link href="./Recursos/Librerias/bootstrap-3.0.3-dist/dist/css/bootstrap.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="./Recursos/Librerias/bootstrap-3.0.3-dist/dist/js/bootstrap.js"></script>
    </head>
    <body>
        <!-- Barra de navegacion -->
        <?php include_once './BarraNavegacion.php'; ?>
        <!-- Presentación de servicios -->
        <div class="Presentacion">
            <!-- Descripcion -->
            <div>
                <h1 class="titulo">Descripcion.</h1>
                <p class="texto">Concientes de las nececidades actuales en lo que a T.I. respecta hemos decidido abrir un catalogo de servicios y productos.
                    En el podrá encontrar diversas soluciones que podrían ayudarle a resolver problemas en su organizacion.</p>
            </div>
            <!-- Políticas servicios y productos-->            
            <a class="linkproceso" href="#">Politica de servicios.</a><br>
            <a class="linkproceso" href="#">Politica de productos.</a>
        </div>        
        <br>        
        <!-- Filtro -->
        <p style="color:white">Filtro: </p>
        <!-- Categorias -->
        <select>
            <option value="volvo">Software</option>
            <option value="saab">Web</option>
            <option value="mercedes">Asesoria</option>            
            <option value="mercedes">Todo</option>
        </select>     
        <!-- Seleccionar servicios y/o productos -->        
        <input type="checkbox" name="Servicios" value="Servicios"><p style="display: inline; color:white;">Servicios</p>
        <input type="checkbox" name="Productos" value="Productos" checked><p style="display: inline; color:white;">Productos</p>
        

        <!-- Lista de servicios -->
        <div class="Catalogo">
            <div class="row">
                <div class="col-lg-4" style="background-color: #b9def0">
                    <h2>Software</h2>
                    <p class="text-danger">Descripcion de proyectos de categoria.</p>
                    <p><a class="btn btn-primary" href="#" role="button">Explorar »</a></p>
                </div>
                <div class="col-lg-4" style="background-color: salmon">
                    <h2>Web</h2>
                    <p class="text-danger">Descripcion de proyectos de categoria.</p>
                    <p><a class="btn btn-primary" href="#" role="button">Explorar »</a></p>
                </div>
                <div class="col-lg-4" style="background-color: lightgreen">
                    <h2>Asesoria</h2>
                    <p class="text-danger">Descripcion de proyectos de categoria.</p>
                    <p><a class="btn btn-primary" href="#" role="button">Explorar »</a></p>
                </div>
            </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
