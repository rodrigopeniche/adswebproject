<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href="estiloForm.css"/>
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        include("BaseDeDatos.php"); 
            function eliminar(){
                $baseDatos = new BaseDeDatos();
                $clave = $_POST['clave'];
                $query = "DELETE FROM carteleras WHERE id =".$clave.";" ;
                $baseDatos->EjecutarQuery($query);
            }

            if(isset($_POST['submit'])){ 

                eliminar();
            }
        ?>
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
                                if($_SESSION['tipo_usuario'] == "administrador"){
                                    echo '<li><a href="VistaAdministrador.php"> Ver Anuncios</a></li>';
                                } else if ($_SESSION['tipo_usuario'] == "cliente"){
                                    echo '<li><a href="VistaContratar.php"> Contratar</a></li>';
                                    echo '<a href="VistaVerContrataciones.php"> Ver Mis Contrataciones</a>';
                                }
                                
                                if($_SESSION['inicio'] == null || $_SESSION['inicio'] == false){
                                    echo '<li><a href="IniciarSesion.php"> Iniciar Sesion</a></li>';
                                } else{
                                    echo '<a href="CerrarSesion.php"> Cerrar Sesion</a>';
                                }
                                ?>
                        </ul>
                    </nav>
            </div> 


	</header>
        
        <form method="post">
            <label>Clave de cartelera a eliminar:</label>
            <input type="text" name="clave" required="">
            <input type="submit" name="submit" value="eliminar">
        </form>
    </body>
</html>
