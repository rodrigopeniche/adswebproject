
  <html lang ="es">
    <head>
        
        <meta charset="UTF-8">
        <title>Formulario1</title>
        <link rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href="estiloForm.css"/>
    </head>
    <body>
        <?php
            
            function crearbitacora(){
                
                $contrasena = hash("sha256", $_POST['contrasena'], false);
                $texto = $_POST['usuario'] .",". $contrasena.PHP_EOL;
                file_put_contents("bitacora.txt", $texto, FILE_APPEND);
                //header("location:index.php");
            }
            
            function checar_disponibilidad($usuario){
                $comprobacion = false;
                $myfile = fopen("bitacora.txt", "r") or die("Unable to open file!");
                
                while(!feof($myfile)) {
                  $usuario_existente = fgets($myfile);
                  $arreglo = explode(",", $usuario_existente,2);
                  $usuario_existente = $arreglo[0];
                  if($usuario == $usuario_existente){
                      $comprobacion = true;
                  }                  
                }
                
                if($comprobacion){
                      // El nombre de usuario ya existe
                    echo "EL NOMBRE DE USUARIO YA EXITSE!!";
                } else {
                    crearbitacora();
                    echo "MUCHAS GRACIAS POR REGISTRARSE!";
                } 
                fclose($myfile);
            }


            if(isset($_POST['submit'])){ 
                checar_disponibilidad($_POST['usuario']);
                //crearbitacora("alta");
            }  
            
        ?>
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
     <form action="" method="POST">
       
       
        <h2>Por favor ingrese sus datos de registro</h2>
        </select>
            <label for="">Nombre de Usuario:</label>
            <input type="text" name="usuario" required="">
            <label for="">Correo:</label>
            <input type="email" name="usuario" required=""> 
            <label for="">Contraseña: </label>
            <input type="password" name="contrasena" required="">
            <label for="">Tipo de Usuario: </label>
            <select>
              <option value="cliente">Cliente</option>
              <option value="admin">Admin</option>
            </select>
            <input type="submit" name="submit" value="Registrar Datos">
            
    </form>
        
    </body>
</html>


