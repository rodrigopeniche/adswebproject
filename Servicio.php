<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">

<head>

    <meta charset ="UTF-8">
    <title>Servicios </title>
    <link rel="stylesheet" href="HeaderStyleSheet.css">
    <link rel="stylesheet" href="ServiciosStyleSheet.css">
    <link rel="stylesheet" href="SliderStyleSheet.css">
    <link href="https://file.myfontastic.com/qp8yPnhRsVhXCzhpKiRbnF/icons.css" rel="stylesheet">
</head>

<body>

    <header class="main-header">   
                    <div class="container container--flex">
                        <div class ="logo-container column column--50">
                            <h1 class="logo">Logo</h1>
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

	<header>
		<div class="wrapper" >
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

    <div class="clearfix">
        <div id="izquierda">
        	<h1>Carteleras</h1>

		    <UL >
			    <LI>Publicidad permanente</LI>
			    <LI>Exposición en distintas zonas de la ciudad</LI>
			    <LI>Cobertura local</LI>
			    <LI>Responsabilidad en producción e impresión de lonas.</LI>
		    </UL>
        </div>
    	
    	<div id="dere">
    		<div class="slider">
        	<ul class="sliderUl">
        		<li class="sliderLi"> <img src="imagenes/carteleras/imagen4.jpg" alt=""></li>
        		<li class="sliderLi"> <img src="imagenes/carteleras/imagen2.jpg" alt=""></li>
        		<li class="sliderLi"> <img src="imagenes/carteleras/imagen3.jpg" alt=""></li>
        		<li class="sliderLi"> <img src="imagenes/carteleras/imagen1.jpg" alt=""></li>
        	</ul>
            </div>
	
    	</div>
    </div>
 
    <div class="clearfix" ip="Television" >

        <div id="izquierda">
        	<h1>Televisión</h1>

		    <UL >
			    <LI>Uso de recursos creativos</LI>
			    <LI>Cobertura local</LI>
			    <LI>Lanzamientos de productos o marcas</LI>
			    <LI>Spots de continuidad y valores de marca</LI>
			    <LI>Responsabilidad en producción</LI>
		    </UL>
        </div>
    	
    	<div id="derecha">
    		<video class = "strech" preload="none" width="500em" poster="imagenes/descarga.jpg" controls>
			    <source src="videos/videoPrueba.mp4" type="video/mp4">
			    <source src="videos/videoPrueba.ogg" type="video/ogg">
			    Tu navegador no es compatible con html5
            </video>
    	</div>
    </div>

    <div class="clearfix" ip="radio" >

        <div id="izquierda">
        	<h1>Radio</h1>

		    <UL >
			    <LI>Uso de recursos creativos</LI>
			    <LI>Cobertura local</LI>
			    <LI>Lanzamientos de productos o marcas</LI>
			    <LI>Disponibilidad de horarios de transmición</LI>
			    <LI>Spots de continuidad y valores de marca</LI>
			    <LI>Responsabilidad en producción</LI>
		    </UL>
        </div>
    	
    	<div id="derecha">
    		<audio controls>
                <source src="audio/audioRadio.ogg" type="audio/ogg">
                <source src="audio/audioRadio.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
    	</div>
    </div>

    <div class="clearfix">
        <div id="izquierda">
        	<h1>Autobuses</h1>

		    <UL >
			    <LI>Publicidad permanente</LI>
			    <LI>Exposición en distintas zonas de la ciudad</LI>
			    <LI>Carteleras en camiónes</LI>
			    <LI>Cobertura local</LI>
			    <LI>Responsabilidad en producción e impresión de lonas.</LI>
		    </UL>
        </div>
    	
    	<div id="dere">
    		<div class="slider">
        	<ul class="sliderUl">
        		<li class="sliderLi"> <img src="imagenes/autobuses/autobus1.jpg" alt=""></li>
        		<li class="sliderLi"> <img src="imagenes/autobuses/autobus2.jpg" alt=""></li>
        		<li class="sliderLi"> <img src="imagenes/autobuses/autobus3.jpg" alt=""></li>
        		<li class="sliderLi"> <img src="imagenes/autobuses/autobus4.jpg" alt=""></li>
        	</ul>
            </div>
	
    	</div>
    </div>
</body>

</html>