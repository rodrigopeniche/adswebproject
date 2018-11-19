<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Nosotros</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilos.css">
        <script src="jsDaniel.js"></script>
        
        
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
                                        echo '<a href="VistaAdministrador.php"> Contratar</a>';
                                        echo '<a href="VistaAdministrador.php"> Ver Mis Contrataciones</a>';
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
        
        <div id=content-text>
            <div class="section-text">
            <h1> Mision </h1>
            <p>Proporcionar la mejor oportunidad a nuestros clientes para dar a 
                conocer sus productos, servicios y promociones, a través de la 
                renta de espectaculares ubicados estratégicamente para lograr 
                el mayor impacto visual de las personas que transitan en las 
                avenidas más importantes las 24 horas del día, brindando siempre
                un servicio óptimo.</p>
            </div>
            <div class="section-text">
            <h1> Vision </h1>
            <p> El enfoque hacia el cumplimiento de nuestra misión sólo se compara 
                con la pasión por alcanzar nuestros objetivos estratégicos: 
            </p>
            <ul>
                <li>Ser el mejor tenedor, socio y operador de largo plazo de nuestros negocios.</li>
                <li>Aspirar a duplicar el valor del negocio cada 5 años.</li>
                <li>Ser líderes en nuestros mercados.</li>
                <li>Ser el mejor empleador y vecino de las comunidades en las que operamos.</li>
            </ul>
            </div>
            <div class="section-text">
            <h1> Valores </h1>
            <p>Un colaborador de The Masters of Software genera un gran impacto, siempre busca 
                trascender, antepone el bien mayor de la organización por encima
                de sus objetivos profesionales y se destaca por su:
            </p>
            <ul>
            <li>Integridad y Respeto: genera e inspira confianza con su trabajo y en su persona.</li>
            <li>Sentido de Responsabilidad: es comprometido. Mide, reconoce y se hace cargo de sus acciones.</li>
            <li>Sencillez y Actitud de Servicio: se percibe no superior a los demás, siempre está dispuesto a colaborar y servir.</li>
            <li>Pasión por Aprender: está en búsqueda constante del aprendizaje y de nuevos retos que lo permitan desarrollarse continuamente en un entorno dinámico.</li>
            </ul>
            </div>
            <br>
            <br>
            <br>
        </div>
        
        <!--        Parte 2                  -->
        <footer>
		<p class="Foot" align="center">
                        		The Masters Of Softwae S.A de C.V&nbsp;&nbsp;
                        
                        		Todos los Derechos Reservados
                        	

                        
                    </p>
	</footer>
        

    </body>
</html>