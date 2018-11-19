<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Agregar televisión</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styleDaniel.css">
        <script src="contact-form-validation-Tv.js"></script>
    </head>
    <body>
        <header>
        <div class="wrapper">
|           <div class ="logo">The Masters Of Software </div>

            <nav>
            
                <a href="Inicio.html"> Inicio</a>
                <a href="Nosotros.html"> Nosotros</a>
                <a href="Servicios.html"> Servicios</a>
                <a href="Contacto.html"> Contacto</a>
                <?php
                session_start();
                if($_SESSION['tipo_usuario'] == "administrador"){
                    echo '<a href="VistaAdministrador.php"> Ver Anuncios</a>';
                } else if ($_SESSION['tipo_usuario'] == "cliente"){
                    echo '<a href="VistaContratar.php"> Contratar</a>';
                    echo '<a href="VistaVerContrataciones.php"> Ver Mis Contrataciones</a>';
                }

                if($_SESSION['inicio'] == null || $_SESSION['inicio'] == false){
                    echo '<a href="IniciarSesion.php"> Iniciar Sesion</a>';
                } else{
                    echo '<a href="CerrarSesion.php"> Cerrar Sesion</a>';
                }
                ?>

            </nav>
        </div>


        </header>

        <p> Ingrese los siguientes datos del canal de televisión a registrar: <br></p>

        <div class="row">
            <div class="column">
                <form name="contact-form">
                    ID: <br>
                    <input type="text" size="40" name="id">
                    <br><br>
                        
                    Canal: <br>
                    <input type="text" size="40" name="canal">
                    <br><br>
                        
                    Título: <br>
                    <input type="text" size="40" name="titulo">
                    <br><br>
                    
                    Precio: <br>
                    <input type="text" size="40" name="precio">
                    <br><br>
                        
                    <button type="button" onclick="validateForm()">Enviar!</button>                       
                </form>
            </div>
        </div>
        <footer>
        <p class="Foot" align="center">
                                The Masters Of Softwae S.A de C.V&nbsp;&nbsp;

                                Todos los Derechos Reservados
                    </p>
    </footer>
    </body>
</html>
