
  <html lang ="es">
    <head>
        
        <meta charset="UTF-8">
        <title>Formulario1</title>
        <link rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href="estiloForm.css"/>
        <script>
            function getText(element) {
            var textHolder = element.options[element.selectedIndex].text
            document.getElementById("txt_holder").value = textHolder;
            }
        </script>
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
                $query = "INSERT INTO usuario VALUES ('".$usuario."','".$contrasena."','".$correo."','".$tipoUsuario."');";
                $baseDatos->EjecutarQuery($query);
            }

            if(isset($_POST['submit'])){ 

                agregarUsuario();
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
     <form name = "user-data" action="" method="POST">
       
       
        <h2>Por favor ingrese sus datos de registro</h2>
        </select>
            <label for="">nombre Usuario:</label>
            <input type="text" name="usuario" required=""> 
            <label for="">Correo:</label>
            <input type="email" name="email" required=""> 
            <label for="">Contraseña: </label>
            <input type="password" name="contrasena" required="">
            <label for="">Tipo de Usuario: </label>
            <select name="text selection" onchange="getText(this)">
                <option value="">Elige una Opcion</option>
                <option value="cliente">cliente</option>
                <option value="admin">admin</option>
            </select>
            <input type="hidden" name="txt_holder" id="txt_holder">
            <input type="submit" name="submit" value="Registrar Datos">
            
    </form>
        
    </body>
</html>


