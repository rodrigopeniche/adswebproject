
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
include("BaseDeDatos.php"); 
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="NavbarCss.css" rel="stylesheet" type="text/css"/>
        <link href="CssTablas.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        <title></title>
        <script>
            function cancelarCartelera(){
                window.location.href = 'CancelarContratacionCartelera.php';
            }
            
            function cancelarRadio(){
                window.location.href = 'CancelarContratacionRadio.php';
            }
            
            function cancelarTv(){
                window.location.href = 'CancelarContratacionTv.php';
            }
            
            
        </script>
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
        
              

                <label for="table"> Carteleras Contratadas</label>
                <table>
                    <thead>
                        <tr>
                            <th>No. de Contrato</th>
                            <th>clave anuncio</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Final</th>                          
                        </tr>
                    </thead>

                    <?php
                        $baseDatos = new BaseDeDatos();
                        $sql = "Select * from carteleracontratado where clv_usuario =".$usuario.";";
                        $result = $baseDatos->ObtenerResultado($sql);
                        while($rows = mysqli_fetch_assoc($result)){
                    ?>     

                            <tr>
                                <td><?php echo $rows['id']; ?></td>
                                <td><?php echo $rows['clv_cartel']; ?></td>
                                <td><?php echo $rows['fecha_inicio']; ?></td>
                                <td><?php echo $rows['fecha_fin']; ?></td>
                            </tr>
                    <?php
                        }
                    ?>

                </table>

                <button onclick="cancelarCartelera()">Cancelar Servicio</button>
                
                <label for="table"> Anuncios en Radio Contratados</label>
                <table>
                    <thead>
                        <tr>
                            <th>No. de Contrato</th>
                            <th>Estacion</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Final</th>                          
                        </tr>
                    </thead>

                    <?php
                        $baseDatos = new BaseDeDatos();
                        $sql = "Select * from contratacionradio where clv_usuario =".$usuario.";";
                        $result = $baseDatos->ObtenerResultado($sql);
                        while($rows = mysqli_fetch_assoc($result)){
                    ?>     

                            <tr>
                                <td><?php echo $rows['id']; ?></td>
                                <td><?php echo $rows['estacion']; ?></td>
                                <td><?php echo $rows['fecha_inicio']; ?></td>
                                <td><?php echo $rows['fecha_fin']; ?></td>
                            </tr>
                    <?php
                        }
                    ?>

                </table>

                <button onclick="cancelarRadio()">Cancelar Servicio</button>
                
                <label for="table"> Anuncios de Television Contratados</label>
                <table>
                    <thead>
                        <tr>
                            <th>No. de Contrato</th>
                            <th>Canal</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Final</th>                          
                        </tr>
                    </thead>

                    <?php
                        $baseDatos = new BaseDeDatos();
                        $usuario = $_SESSION['usuario'];
                        $sql = "Select * from contrataciontv where clv_usuario =".$usuario.";";
                        $result = $baseDatos->ObtenerResultado($sql);
                        while($rows = mysqli_fetch_assoc($result)){
                    ?>     

                            <tr>
                                <td><?php echo $rows['id']; ?></td>
                                <td><?php echo $rows['canal']; ?></td>
                                <td><?php echo $rows['fecha_inicio']; ?></td>
                                <td><?php echo $rows['fecha_fin']; ?></td>
                            </tr>
                    <?php
                        }
                    ?>

                </table>

                <button onclick="cancelarTv()">Cancelar Servicio</button>

            
        
    </body>
</html>
