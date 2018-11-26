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
                checar_contrasena($db_contrasena_hash, $id_usuario, $tipo_usuario);
                $conn->close();
                return $result;
            }
            
            function checar_contrasena($db_contrasena_hash, $id_usuario, $tipo_usuario){
                $contrasena = hash("sha256", $_POST['contrasena'], false);
                /*$digitos = strlen($contrasena) - 2;
                $contrasena_hash = substr($contrasena, 0, $digitos);*/
                #echo $contrasena_hash;
                echo " ";
                echo $contrasena;
                echo " ";
                echo $db_contrasena_hash;

                if($contrasena == $db_contrasena_hash){
                    echo "INICIASTE SESION";
                    $_SESSION['inicio'] = true;
                    $_SESSION['usuario'] = $id_usuario;
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
        <link href="NavbarCss.css" rel="stylesheet" type="text/css"/>
        <link href="estiloIniciarSesion.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        
        
        <script src="jsDaniel.js"></script>
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


                        </ul>
                    </nav>
            </div> 

         
	</header>
        
        <div class="login-box">
        <img src="imagenes/avatar.png" class="Avatar"/>
        <h1>Por favor inicia sesion</h1>
        <form action="" method="POST">
            <p>Usuario</p>
            <input type="text" name="usuario" placeholder="Ingresa tu Usuario">
            <p>Contraseña</p>
            <input type="password" name="contrasena" placeholder="Ingresa tu Contraseña">
            <input type="submit" name="submit" value="Ingresar">
            <a href="#">Registrarse</a>    
            </form>
        
        
        </div>
    
                        <?php
                        
                        if($_SESSION['tipo_usuario'] == "administrador"){
                            echo '<li class="menu__item">';
                            echo '<a href="VistaAdministrador.php" class="menu__link "> Ver Anuncios</a>';
                            echo '</li>';
                        } else if ($_SESSION['tipo_usuario'] == "cliente"){
                            echo '<li class="menu__item">';
                            echo '<a href="VistaContratar.php" class="menu__link "> Contratar</a>';
                            echo '</li>';
                            echo '<li class="menu__item">';
                            echo '<a href="VistaVerContrataciones.php" class="menu__link "> Ver Mis Contrataciones</a>';
                            echo '</li>';
                        }

                        if($_SESSION['inicio'] == null || $_SESSION['inicio'] == false){
                            echo '<li class="menu__item">';
                            echo '<a href="IniciarSesion.php" class="menu__link "> Iniciar Sesion</a>';
                            echo '</li>';
                        } else{
                            echo '<li class="menu__item">';
                            echo '<a href="CerrarSesion.php" class="menu__link "> Cerrar Sesion</a>';
                            echo '</li>';
                        }
                    ?>
    		
    </body>
</html>