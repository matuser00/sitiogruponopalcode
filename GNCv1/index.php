<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
        <title>Grupo Nopal Code</title>
        <link rel="stylesheet" type="text/css" href="Vista/Estilos/Index.css">
        <link href="./Recursos/Librerias/bootstrap-3.0.3-dist/dist/css/bootstrap.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="./Recursos/Librerias/bootstrap-3.0.3-dist/dist/js/bootstrap.js"></script>
        <script type="text/javascript" src="./Recursos/Controladores/ControladorMenus.js"></script>
    </head>
    <body>

        <!-- Barra de navegación -->
        <!--<div class="BarraNavegacion">
            <div class="ContenedorLogo"><img id="IndexLogo" src="Recursos/Imagenes/Logo_Index.png" class="ItemBN"/></div>
            <div class="BarraMenus">
                <ul><a class="ItemBN">Acerca de...</a></ul>
                <ul>
                    <a class="ItemBN">Productos y servicios</a>
                    <li>Desarrollo a la medida</li>
                    <li>Desarrollo móvil</li>
                    <li>Paginas web</li>
                    <li>Licencias</li>
                    <li>Asesoria</li>
                </ul>
                <ul><a class="ItemBN">Casos de exito</a></ul>
            </div>            
        </div>    
        <div id="shelfcontenido" class="notshow">
            <ul id="listacontenido">lista</ul>
        </div>-->

       <?php include_once './BarraNavegacion.php'; ?>

        <!--<div id="shelfnovedades" class="boxnovedades">            
            <ul id="listacontenido">
        <!-- Plantilla ficha novedad -->
        <!--     <li class="fichanovedad">
                 <a>Ver todo...</a>
                 <image src="Recursos/Imagenes/i1.png"/>
                 <p>Resumen novedad</p>
             </li>
         </ul>
     </div>    -->

        <!-- Feed novedades -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            </ol>
            <div class="carousel-inner">
                <div class="item">
                    <img class="ImagenFeedNovedades" src="Recursos/Imagenes/i1.png">
                    <div class="container">
                        <div class="carousel-caption DescripcionNovedad">
                            <h1 style="color: #b92c28">Novedad 1</h1>
                            <p>Descripcion novedad</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Leer</a></p>
                        </div>
                    </div>
                </div>
                <div class="item active">
                    <img class="ImagenFeedNovedades" src="Recursos/Imagenes/i2.jpg">
                    <div class="container">
                        <div class="carousel-caption DescripcionNovedad">
                            <h1 style="color: slateblue" >Novedad 2</h1>
                            <p>Descripcion novedad 2</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Probar</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="ImagenFeedNovedades" src="Recursos/Imagenes/i3.png">
                    <div class="container">
                        <div class="carousel-caption DescripcionNovedad">
                            <h1>Novedad 3</h1>
                            <p>Descripcion novedad 3</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Reproducir video</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>



        <!-- Shelf de categorias y links cortos -->
        <!-- Soporte: Clientes, FAQ's, Manuales -->
        <!-- Contratación: Filosofía, Metodología, Contacto -->
        <!-- Aportes: Articulos, Tutoriales -->
        <div class="container marketing">
            <div class="row Shelf">
                <div class="col-lg-4 ItemShelf">
                    <img class="ImagenShelf" src="Recursos/Imagenes/soporte.jpg">
                    <h2><a href="#">Soporte</a></h2>          
                    <p><a class="btn btn-default" href="#" role="button">Clientes</a></p>
                    <p><a class="btn btn-default" href="#" role="button">FAQ's</a></p>
                    <p><a class="btn btn-default" href="#" role="button">Manuales</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 ItemShelf">
                    <img class="ImagenShelf" src="Recursos/Imagenes/contrato.jpg">
                    <h2><a href="#">Contratacion</a></h2>
                    <p><a class="btn btn-default" href="#" role="button">Filosofia</a></p>
                    <p><a class="btn btn-default" href="#" role="button">Metodologia</a></p>
                    <p><a class="btn btn-default" href="#" role="button">Contacto</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 ItemShelf">
                    <img class="ImagenShelf" src="Recursos/Imagenes/aporte.jpg">
                    <h2><a href="#">Aportes</a></h2>
                    <p><a class="btn btn-default" href="#" role="button">Articulos</a></p>
                    <p><a class="btn btn-default" href="#" role="button">Tutoriales</a></p>
                    <p><a class="btn btn-default" href="#" role="button">Media</a></p>
                </div><!-- /.col-lg-4 -->
            </div>
        </div>

        <?php
        // put your code here
        ?>
    </body>
</html>
