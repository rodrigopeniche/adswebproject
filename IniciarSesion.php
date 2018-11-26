<html lang ="en">
    <head>
        <?php
            session_start();
        
            function crearbitacora(){
                
                $contrasena = hash("sha256", $_POST['contrasena'], false);
                $texto = $_POST['usuario'] .",". $contrasena.PHP_EOL;
                file_put_contents("bitacora.txt", $texto, FILE_APPEND);
                //header("location:index.php");
            }
            
            function checar_disponibilidad($usuario){
                /*$comprobacion = false;
                $myfile = fopen("bitacora.txt", "r") or die("Unable to open file!");
                $contrasena_hash;
                
                while(!feof($myfile)) {
                    $usuario_existente = fgets($myfile);
                    $arreglo = explode(",", $usuario_existente,2);
                    $usuario_existente = $arreglo[0];

                    if($usuario == $usuario_existente){
                        $comprobacion = true;
                        $contrasena_hash = $arreglo[1];
                        checar_contrasena($contrasena_hash);
                        
                    }                 
                }
                
                if(!$comprobacion){
                    echo "NO EXISTE EL USUARIO";
                }
                fclose($myfile);*/
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "publicis";
                $sql = "SELECT * FROM usuario where id_usuario =" ."'".$usuario."'";
                $conn = new mysqli($servername, $username, $password,$database);
                $result = $conn->query($sql);
                $row = mysqli_fetch_assoc($result);
                $id_usuario = $row['id_usuario'];
                $tipo_usuario = $row['tipo'];
                $db_contrasena_hash = $row['contrasena'];
                validar_contrasena($db_contrasena_hash, $id_usuario, $tipo_usuario);
                $conn->close();
                return $result;
            }
            
            function validar_contrasena($db_contrasena_hash, $id_usuario, $tipo_usuario){
                $contrasena = hash("sha256", $_POST['contrasena'], false);
                /*$digitos = strlen($contrasena) - 2;
                $contrasena_hash = substr($contrasena, 0, $digitos);
                #echo $contrasena_hash;
                echo " ";
                echo $contrasena;
                echo " ";
                echo $db_contrasena_hash;*/

                if($contrasena == $db_contrasena_hash){
                    echo "INICIASTE SESION";
                    $_SESSION['LAST_ACTIVITY'] = time();
                    $_SESSION['inicio'] = true;
                    $_SESSION['id_usuario'] = $id_usuario;
                    $_SESSION['tipo_usuario'] = $tipo_usuario;
                    header('Location: Inicio.php');                   
                } else {
                    echo "NOMBRE DE USUARIO O CONTRASENA ESTA MAL";
                }
            }


            if(isset($_POST['submit'])){
                checar_disponibilidad($_POST['usuario']);
                //crearbitacora("alta");;
            }  
            
        ?>
        
        <meta charset="UTF-8">
        <title>Formulario1</title>
          <link rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href="estiloForm.css"/>
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
                                <a href="IniciarSesion.php"> Iniciar Sesion</a>

			</nav>
	</div> 
	</header>
        <form method="POST">
        <h1>Bienvenido</h1>
        <h2>Inicia sesion para continuar</h2>
        
       
           <label for="">Usuario </label>
           <input type="text"  name="usuario" required>
            <label for="">Contraseña </label>
            
            <input type="password" name="contrasena" required>
            <input type="submit" name="submit" value="Iniciar Sesion">
               
            <label for="" >¿No cuentas con un usuario?,Registrate</label>
            
            <a href="RegistroDatos.php" class="button">Registrarse</a>
            
    </form>
        
    </body>
</html>