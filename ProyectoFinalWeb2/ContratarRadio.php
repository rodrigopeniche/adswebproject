<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Contrato</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styleDaniel.css">
        <link rel="stylesheet" href="estilos.css">
        <script src="contact-form-validation.js"></script>
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

<h2>Contratar Anuncio en Radio</h2>

<form action="/action_page.php">
  Día de inicio:<br>
  <input type="text" name="diaInicio" value="">
  <br>
  Mes de inicio:<br>
  <input type="text" name="mesInicio" value="">
  <br>
  Año de inicio:<br>
  <input type="text" name="añoInicio" value="">
  <br>
  Dia de termino:<br>
  <input type="text" name="diaTermino" value="">
  <br>
  Mes de termino:<br>
  <input type="text" name="mesTermino" value="">
  <br>
  Año de termino:<br>
  <input type="text" name="añoTermino" value="">
  <br><br>
  Estaciones:
  <select name="Anuncios">

  </select>
  <br><br>

  <input type="submit" value="Aceptar">
</form> 


</body>
</html>