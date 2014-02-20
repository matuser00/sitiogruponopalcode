<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
        <title>Grupo Nopal Code</title>        
        <link href="./Recursos/Librerias/bootstrap-3.0.3-dist/dist/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="Vista/Estilos/Contacto.css">
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="./Recursos/Librerias/bootstrap-3.0.3-dist/dist/js/bootstrap.js"></script>        
    </head>
    <body>
        <!-- Barra de navegacion -->
        <?php include_once './BarraNavegacion.php'; ?>
        <!-- Formulario de contacto -->
        <div class="SeccionContacto">
            <h3 class="titulo">Contacto:</h3>        
            <form>
                <p class="texto">E-Mail:</p> <input type="email"/>
                <p class="texto">Mensaje:</p> <input type="text"/>
            </form>
        </div>        
        
        <!-- Seccion informacion contacto -->
        <div class="SeccionInformacionContacto">
            <!-- Direccion -->
            <h3 class="titulo">Dirección:</h3>
            <p class="texto">Calle 111, Colonia AAA, Ciudad AAA, Estado AAA, C.P. 111</p>
            <!-- Telefono -->
            <h3 class="titulo">Teléfono:</h3>
            <p class="texto">111-111-111-111</p>
            <!-- Correo electronico -->
            <h3 class="titulo">Correo electronico:</h3>
            <p class="texto">gncodemexico@gmail.com</p>
        </div>        
        <?php
        // put your code here
        ?>
        
    </body>
</html>
