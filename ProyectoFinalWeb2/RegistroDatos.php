
  <html lang ="es">
    <head>
        
        <meta charset="UTF-8">
        <title>Formulario1</title>
        
        <script>
            function getText(element) {
            var textHolder = element.options[element.selectedIndex].text
            document.getElementById("txt_holder").value = textHolder;
            }
        </script>
        <meta name="viewport" content="width=device-width,user-scalable=yes, initial-scale=1.0
              maximum-scale=3.0,minimum-scale=1.0">
        <link href="EstiloRegistrarDatos.css" rel="stylesheet" type="text/css"/>
        <link href="NavbarCss.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        <script src="jsDaniel.js"></script>
    </head>
    <body>
        <?php
        include("BaseDeDatos.php"); 
            function agregarUsuario(){
                $baseDatos = new BaseDeDatos();
                $usuario = $_POST['usuario'];
                $correo = $_POST['email'];
                $contrasena = hash("sha256", $_POST['contrasena'], false);
                $tipoUsuario = $_POST['txt_holder'];
                $query = "INSERT INTO usuario VALUES ('".$usuario."','".$contrasena."','".$correo."','".$tipoUsuario."');" ;
                $baseDatos->EjecutarQuery($query);
            }

            if(isset($_POST['submit'])){ 

                agregarUsuario();
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
                        session_start();
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
                              
                        </ul>
			</nav>
	</div> 
	</header> 
     
        <form action="" method="POST">
       
       
        
        
        <div class="register-box">
            <h1 align="center">Por favor ingrese sus datos de registro</h1>
            <label for="">Nombre usuario:</label>
            <input type="text" name="usuario" required="" placeholder="Escribe tu Nombre de Usuario"> 
            <label for="">Correo:</label>
            <input type="email" name="email" required="" placeholder="example@.com"> 
            <label for="">Contraseña: </label>
            <input type="password" name="contrasena" required="" placeholder="Escribe tu contraseña">
            <label for="">Tipo de Usuario: </label>
            <select name="text selection" onchange="getText(this)">
                <option value="">Elige una Opcion</option>
                <option value="cliente">cliente</option>
                <option value="admin">admin</option>
            </select>
            <input type="hidden" name="txt_holder" id="txt_holder">
            <input type="submit" name="submit" value="Registrar Datos">
        </div> 
    </form>
    </body>
        
    		
</html>


