/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


var MenusBarra = new Array();////Almacena los menus de la barra de navegacion
        /**
         * Funcion que inicializa la barra de menus de la barra de navegacion
         */          
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

        /**
         * Funcion de escucha de un menu seleccionado
         * @param {evento} e variable que contiene informacion del evento que disparo esta funcion
         */
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
        /**
         * Funcion que muestra un menu en especifico. Carga el contenido de ese  menu en el shelf de contenido
         * @returns {undefined}
         */
        function mostrarMenu() {
            var contenido = document.getElementById("shelfcontenido");
            contenido.setAttribute("class", "show");
            contenido.addEventListener("click", function() {
                document.getElementById("shelfcontenido").setAttribute("class", "notshow");
            }, false);
        }