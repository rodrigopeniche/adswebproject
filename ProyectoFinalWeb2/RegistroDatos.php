
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
|			<div class ="logo">The Masters Of Software </div>

			<nav>
			
				<a href="Inicio.php"> Inicio</a>
				<a href="Nosotros.php"> Nosotros</a>
				<a href="Servicio.php"> Servicios</a>
				<a href="Contacto.php"> Contacto</a>
                                <a href="IniciarSesion.php"> Iniciar Sesion</a>

			</nav>
	</div> 
	</header>
     <form action="" method="POST">
       
       
        <h2>Por favor ingrese sus datos de registro</h2>
        </select>
            <label for="">nombre de usuario</label>
            <input type="text" name="usuario" required=""> 
            <label for="">contraseña </label>
            <input type="password" name="contrasena" required="">
            <input type="submit" name="submit" value="Registrar Datos">
            
    </form>
        
    </body>
</html>


