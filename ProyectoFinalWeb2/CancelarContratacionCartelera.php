<html>
    <head>
        <meta charset="UTF-8">
       <link href="EstiloVentanasCancelar.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        <link href="NavbarCss.css" rel="stylesheet" type="text/css"/>
        <title>Cancelar Cartelera</title>
    </head>
    <body>
        <?php
        // put your code here
        session_start();
        include("BaseDeDatos.php"); 
            function eliminar(){
                $baseDatos = new BaseDeDatos();
                $clave = $_POST['clave'];
                $usuario = $_SESSION['usuario'];
                $query = "DELETE FROM carteleracontratado WHERE id ="
                        .$clave
                        ." AND clv_usuario ="
                        .$usuario
                        .";";
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
        
        <div class="cancel-box">
            <h1>Numero de contrato a eliminar:</h1>
        <form method="post">
            
            
            <input type="text" name="clave" required="" placeholder="Ingresa el numero de la Cartelera">
            <input type="submit" name="submit" value="eliminar">
        </form>
        </div>
    </body>
</html>
