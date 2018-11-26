<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Contacto</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="HeaderStyleSheet.css">
        <link rel="stylesheet" href="ContactoStyleSheet.css"> 
        <link href="https://file.myfontastic.com/qp8yPnhRsVhXCzhpKiRbnF/icons.css" rel="stylesheet">
        <script src="contact-form-validation.js"></script>
    </head>
    <body>
        
        <header class="main-header">	
            <div class="container container--flex">
                <div class ="logo-container column column--50">
                    <h1 class="logo">Inicio</h1>
                </div>
                <div class="main-header__contactInfo column column--50">
                    <p class="main-header__contactInfo__phone">
                        <span class="icon-phone">999-999-999</span>
                    </p>
                    <p class="main-header__contactInfo__adress">
                        <span class="icon-map-marca">Mérida,Yucatán, México</span>
                    </p>    
                </div>    
            </div>
        </header>
        <nav class="main-nav">
            <div class="container container--flex">
                    <span class="icon-menu" id="btnmenu"></span>
                    <ul class="menu" id="menu">
                            <li class="menu__item">
                                    <a href="Inicio.php" class="menu__link menu__link--select"> Inicio</a>
                            </li>
                            <li class="menu__item">
                                    <a href="Nosotros.php" class="menu__link"> Nosotros</a>
                            </li>
                            <li class="menu__item">
                                    <a href="Servicio.php" class="menu__link "> Servicios</a>
                            </li>
                            <li class="menu__item">
                                    <a href="Contacto.php" class="menu__link "> Contacto</a>
                            </li>
                    </ul>
                    <div class="social-icon">
                            <a href="" class="social-icon__link"><span class="icon-mail"></span></a> 			
                    </div>

            </div>      
                <?php
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
        
        <div class="row">
            <div class="column">
                <form name="contact-form">
                    Nombre: <br>
                    <input type="text" size="40" name="name">
                    <br><br>
                        
                    Correo: <br>
                    <input name="email" type="text" size="40">
                    <br><br>
                        
                    Asunto: <br>
                    <input type="text" name="subject" size="40">
                    <br><br>
                    
                    Mensaje: <br>
                    <textarea rows="4" cols="60" name="message"></textarea>
                    <br><br>
                        
                    <button type="button" onclick="validateForm()">Enviar!</button>                       
                </form>
                    
                <p id="demo"></p>
            </div>
            <div class="column">
                
                <div id="googleMap" style="width:100%;height:400px;"></div>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkFZJJ4QSmM0qin__AFeEB90SwDNN8oWk&callback=myMap"></script>
            </div>
        </div>
       
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
        
        <footer>
		<p class="Foot" align="center">
                        		The Masters Of Softwae S.A de C.V&nbsp;&nbsp;
                        
                        		Todos los Derechos Reservados
                        	

                        
                    </p>
	</footer>
        <script src="btnMenuInteraccion.js"></script>
    </body>
</html>
