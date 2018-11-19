<?php
session_start();
include("BaseDeDatos.php"); 

if(isset($_POST['agregarcartelera'])){
    echo pene;
}
?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <link href="NavbarCss.css" rel="stylesheet" type="text/css"/>
        <link href="CssTablas.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        <script>
            function irAgregarCartelera(){
                window.location.href = 'AgregarCartelera.php';
            }
            
            function irAgregarRadio(){
                window.location.href = 'AgregarRadio.php';
            }
            
            function irAgregarTv(){
                window.location.href = 'AgregarTv.php';
            }
            
            function eliminarCartelera(){
                window.location.href = 'EliminarCartelera.php';
            }
            
            function eliminarRadio(){
                window.location.href = 'EliminarRadio.php';
            }
            
            function eliminarTv(){
                window.location.href = 'EliminarTelevision.php';
            }
        </script>
        
        
    </head>
    <body>
        <header>
           
            
		<div class="wrapper">
                    <img src="imagenes/logo.png" alt="Logotipo de Publicis" class="logo"/>

			<nav class="shift">
                            <ul>
                                
                                <li><a href="#"> Inicio</a></li>
				<li><a href="#"> Nosotros</a></li>
				<li><a href="#"> Servicios</a></li>
				<li><a href="Servicio"> Contacto</a></li>
				<li><a href="Servicio.php"> Iniciar Sesion</a></li>
                            

                            
                                <?php
//                                if($_SESSION['tipo_usuario'] == "administrador"){
//                                    echo '<li><a href="VistaAdministrador.php"> Ver Anuncios</a></li>';
//                                } else if ($_SESSION['tipo_usuario'] == "cliente"){
//                                    echo '<li><a href="VistaContratar.php"> Contratar</a></li>';
//                                    echo '<a href="VistaVerContrataciones.php"> Ver Mis Contrataciones</a>';
//                                }
//                                
//                                if($_SESSION['inicio'] == null || $_SESSION['inicio'] == false){
//                                    echo '<li><a href="IniciarSesion.php"> Iniciar Sesion</a></li>';
//                                } else{
//                                    echo '<a href="CerrarSesion.php"> Cerrar Sesion</a>';
//                                }
//                                ?>
                            </ul>
			</nav>
	</div> 


	</header>

       
           <div class="contenedor-principal">

            <h2> Bienvenido Administrador </h2>
            <h3>Aquí puedes consultar las publicidades pendientes</h3>
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
                
                <?php
                    $baseDatos = new BaseDeDatos();
                    $sql = "Select * from carteleras";
                    $result = $baseDatos->ObtenerResultado($sql);
                    while($rows = mysqli_fetch_assoc($result)){
                ?>     

                        <tr>
                            <td><?php echo $rows['id']; ?></td>
                            <td><?php echo $rows['direccion']; ?></td>
                            <td><?php echo $rows['nombre']; ?></td>
                            <td><?php echo $rows['precio']; ?></td>
                        </tr>
                <?php
                    }
                ?>

            </table>
           
            <button onclick="irAgregarCartelera()" > Agregar</button>
            <button onclick="eliminarCartelera()">Eliminar</button>
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
                <?php
                    $baseDatos = new BaseDeDatos();
                    $sql = "Select * from radio";
                    $result = $baseDatos->ObtenerResultado($sql);
                    while($rows = mysqli_fetch_assoc($result)){
                ?>     

                        <tr>
                            <td><?php echo $rows['estacion']; ?></td>
                            <td><?php echo $rows['nombre']; ?></td>
                            <td><?php echo $rows['precio']; ?></td>
                        </tr>
                <?php
                    }
                ?>

            </table>       

                <button onclick="irAgregarRadio()"> Agregar</button>
                <button onclick="eliminarRadio()">Eliminar</button>
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
                <?php
                    $baseDatos = new BaseDeDatos();
                    $sql = "Select * from television";
                    $result = $baseDatos->ObtenerResultado($sql);
                    while($rows = mysqli_fetch_assoc($result)){
                ?>     

                        <tr>
                            <td><?php echo $rows['canal']; ?></td>
                            <td><?php echo $rows['nombre']; ?></td>
                            <td><?php echo $rows['precio']; ?></td>
                        </tr>
                <?php
                    }
                ?>

            </table>       

                <button onclick="irAgregarTv()"> Agregar</button>
                <button onclick="eliminarTv()">Eliminar</button>
        </div>
        </div>

    </body>
</html>