<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="CssTablas.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <header>
		<div class="wrapper">
|			<div class ="logo">Publicis </div>

			<nav>
			
				<a href="Inicio.php"> Inicio</a>
				<a href="Nosotros.php"> Nosotros</a>
				<a href="Servicio.php"> Servicios</a>
				<a href="Contacto.php"> Contacto</a>
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
    </body>
</html>
