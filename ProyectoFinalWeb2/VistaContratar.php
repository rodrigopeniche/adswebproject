<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        <link href="CssTablas.css" rel="stylesheet" type="text/css"/>
        <title>Contratar Publicidad</title>
    </head>
    <body>
        <header>
		<div class="wrapper">
|			 <img src="imagenes/logo.png" alt="Logotipo de Publicis" class="logo"/>


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
        <div class="contenedor-principal">

            <h2> Bienvenido Usuario: </h2>
            <h3>Aquí puedes ver los servicios disponibles y Contratar alguno</h3>
        <div class="div1">
            
            <label for="table"> Carteleras</label>
            <table>
                <thead>
                <tr>
                    <th>id</th>
                    <th>Direccion</th>
                    <th>Titulo</th>
                    <th>Precio</th>
                </tr>
                </thead>
                
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

            </table>
           
                <button>Contratar</button>
                
            </div>
        

        <div class="div2">
            <label for="table">Radio</label>
            <table>
                <thead>
                <tr>

                    <th>Estacion</th>
                    <th>Titulo</th>
                    <th>Precio</th>
                </tr>
                </thead>
                <tr>

                    <td></td>
                    <td></td>
                    <td></td>

                </tr>
                <tr>

                    <td></td>
                    <td></td>
                    <td></td>

                </tr>
                <tr>

                    <td></td>
                    <td></td>
                    <td></td>

                </tr>
                <tr>

                    <td></td>
                    <td></td>
                    <td></td>

                </tr>
                <tr>

                    <td></td>
                    <td></td>
                    <td></td>
                    

                </tr>

            </table>       

                <button> Contratar</button>
                
        </div>

        <div class="div3">
            <label for="table">Television</label>
            <table>
                <thead>
                <tr>

                    <th>Canal</th>
                    <th>Titulo</th>
                    <th>Precio</th>
                </tr>
                </thead>
                <tr>

                    <td></td>
                    <td></td>
                    <td></td>

                </tr>
                <tr>

                    <td></td>
                    <td></td>
                    <td></td>

                </tr>
                <tr>

                    <td></td>
                    <td></td>
                    <td></td>

                </tr>
                <tr>

                    <td></td>
                    <td></td>
                    <td></td>

                </tr>
                <tr>

                    <td></td>
                    <td></td>
                    <td></td>

                </tr>

            </table>       

             <button> contratar</button>
               
        </div>
        </div>
    </body>
</html>
