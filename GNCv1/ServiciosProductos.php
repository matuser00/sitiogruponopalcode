<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
        <title>Grupo Nopal Code</title>
        <link rel="stylesheet" type="text/css" href="Vista/Estilos/ServiciosProductos.css">
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
                <p class="texto">Concientes de las nececidades actuales en lo que a T.I. respecta hemos decidido abrir un catalogo de servicios.
                    En el podrá encontrar diversas soluciones que podrían ayudarle a resolver problemas en su organizacion.</p>
            </div>
            <!-- Política de servicios -->
            <div>
                <h1><a class="titulo" href="#">Politica de servicios.</a></h1>
                <p class="texto">Los servicios contratados en el grupo son responsabilidad de los usuarios finales y de los profesionales directamente involucrados en el desarrollo.</p>
            </div>
            <!-- Contratación de servicios -->
            <a class="linkproceso" href="#">Si desea mas información del proceso de contratación de click aquí.</a>            
        </div>        

        <!-- Categorias -->
        <select>
            <option value="volvo">Software</option>
            <option value="saab">Web</option>
            <option value="mercedes">Asesoria</option>            
        </select>

        <!-- Lista de servicios -->
        <div class="row">
            <div class="col-lg-4">
                <h2>Software</h2>
                <p class="text-danger">Descripcion de proyectos de categoria.</p>
                <p><a class="btn btn-primary" href="#" role="button">Explorar »</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Web</h2>
                <p class="text-danger">Descripcion de proyectos de categoria.</p>
                <p><a class="btn btn-primary" href="#" role="button">Explorar »</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Asesoria</h2>
                <p class="text-danger">Descripcion de proyectos de categoria.</p>
                <p><a class="btn btn-primary" href="#" role="button">Explorar »</a></p>
            </div>
        </div>

        <?php
        // put your code here
        ?>
    </body>
</html>
