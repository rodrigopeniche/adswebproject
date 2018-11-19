
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="NavbarCss.css" rel="stylesheet" type="text/css"/>
        <link href="CssTablas.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <header>
		<div class="wrapper">
			
                        <img src="imagenes/logo.png" alt="Logotipo de Publicis" class="logo"/>
			<nav class="shift">
                            <ul>
                                <li><a href="Inicio.php"> Inicio</a></li>
				<li><a href="Nosotros.php"> Nosotros</a></li>
				<li><a href="Servicio.php"> Servicios</a></li>
				<li><a href="Contacto.php"> Contacto</a></li>
                                <?php
//                                session_start();
//                                
//                                    if($_SESSION['tipo_usuario'] == "administrador"){
//                                        echo '<a href="VistaAdministrador.php"> Ver Anuncios</a>';
//                                    } else if ($_SESSION['tipo_usuario'] == "cliente"){
//                                        echo '<a href="VistaContratar.php"> Contratar</a>';
//                                        echo '<a href="VistaVerContrataciones.php"> Ver Mis Contrataciones</a>';
//                                    }
//                                    
//                                    if($_SESSION['inicio'] == null || $_SESSION['inicio'] == false){
//                                        echo '<a href="IniciarSesion.php"> Iniciar Sesion</a>';
//                                    } else{
//                                        echo '<a href="CerrarSesion.php"> Cerrar Sesion</a>';
//                                    }
                                ?>
                            </ul>
			</nav>
	</div> 

            
            
            
            
	</header>
        
              <div class="div1">

                <label for="table"> Carteleras</label>
                <table>
                    <thead>
                        <tr>
                            <th>Clave Usuario</th>
                            <th>clave anuncio</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Final</th>
                            <th>No. de Contrato</th>
                        </tr>
                    </thead>

                    <tr>
                        <td></td>
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
                         <td></td>
                    </tr>
                    <tr>
                        <td></td>
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
                         <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                         <td></td>
                    </tr>

                </table>

                <button>Cancelar Servicio</button>

            </div>
        
    </body>
</html>
