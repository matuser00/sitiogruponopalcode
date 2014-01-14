<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
        <title>Grupo Nopal Code</title>
        <link rel="stylesheet" type="text/css" href="Vista/Estilos/Index.css">
    </head>
    <body onload="barraMenusIni();">

        <!-- Barra de navegación -->
        <div class="BarraNavegacion">
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
        </div>
        
        <div id="shelfnovedades" class="boxnovedades">            
            <ul id="listacontenido">
                <!-- Plantilla ficha novedad -->
                <li class="fichanovedad">
                    <a>Ver todo...</a>
                    <image src=""/>
                    <p>Resumen novedad</p>                    
                </li>
            </ul>
        </div>

        <script type="text/javascript">
        var MenusBarra = new Array();
        //Inicializacion de la barra de menus:            
        function barraMenusIni() {
            var menus = document.getElementsByClassName("BarraMenus")[0];
            var barramenus = menus.getElementsByTagName("ul");
            //Verificar si existe una barra de menus:
            if (barramenus != undefined) {
                //Configuramos los menus:
                for (var r = 0; r < barramenus.length; r++) {
                    var idMenu = "menu" + r;
                    barramenus[r].setAttribute("id", idMenu);
                    var listitems = barramenus[r].getElementsByTagName("li");
                    var listitemsc = new Array();
                    for (var e = 0; e < listitems.length; e++) {
                        listitemsc[e] = listitems[e];
                    }
                    MenusBarra[idMenu] = listitemsc;
                    //console.log(MenusBarra[idMenu]);
                    //Llenamos el arreglo de menus                        
                    var iltags = new Array();
                    var longitud = barramenus[r].getElementsByTagName("li").length;

                    for (var t = 0; t < longitud; t++) {
                        iltags[t] = barramenus[r].getElementsByTagName("li")[t];
                    }

                    //console.log("#li's :" + iltags.length);
                    //Quitamos los il
                    for (var t = 0; t < longitud; t++) {
                        //console.log("#li's:" + iltags[t].innerHTML+","+longitud);
                        barramenus[r].removeChild(iltags[t]);
                    }

                    //Agregamos escuchas a los menus:
                    //console.log(barramenus[r].id + "," + idMenu + ".");
                    barramenus[r].addEventListener("click", escuchaMenuSeleccionado, false);
                }
            } else {
                console.log("Barra de menus no encontrada...");
            }

        }

        //Funcion que sirve de escucha para el menu seleccionado:
        function escuchaMenuSeleccionado(e) {
            var idmenuseleccionado = e.currentTarget.id;
            //Agregamos los notos del menu seleccionado
            if (MenusBarra != null) {
                var contenido = MenusBarra[idmenuseleccionado];
                //console.log(contenido + "," + contenido.length);
                if (contenido != undefined) {
                    //Agregamos el contenido:
                    if (contenido.length > 0) {
                        var listacontenido = document.getElementById("listacontenido");
                        listacontenido.innerHTML = "";
                        for (var r = 0; r < contenido.length; r++) {
                            //console.log(contenido);
                            listacontenido.appendChild(contenido[r]);
                        }
                        mostrarMenu();
                    }
                } else {
                    console.log("El menu seleccionado no existe: " + idmenuseleccionado);
                }
            } else {
                console.log("No hay ningun menu registrado");
            }
        }
        //Codigo para mostrar el menu:
        function mostrarMenu() {
            var contenido = document.getElementById("shelfcontenido");
            contenido.setAttribute("class", "show");
            contenido.addEventListener("click", function() {
                document.getElementById("shelfcontenido").setAttribute("class", "notshow");
            }, false);
        }
        </script>

        <?php
        // put your code here
        ?>
    </body>
</html>
