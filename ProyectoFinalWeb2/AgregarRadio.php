
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Agregar radio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="estiloVentanasAgregar.css" rel="stylesheet" type="text/css"/>
        <link href="NavbarCss.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        <script src="contact-form-validation-Radio.js"></script>
    </head>
    <body>
        <?php
        include("BaseDeDatos.php"); 
            function agregarRadio(){
                $baseDatos = new BaseDeDatos();
                $estacion = $_POST['estacion'];
                $titulo = $_POST['titulo'];
                $precio = $_POST['precio'];
                $query = "INSERT INTO `radio`(`estacion`, `nombre`, `precio`) VALUES ('".$estacion."','".$titulo."','".floor($precio)."');" ;
                
                if(is_numeric($precio) && is_numeric($estacion)){
                    $baseDatos->EjecutarQuery($query);
                }else{
                }
            }

            if(isset($_POST['submit'])){ 
                agregarRadio();
            }  
            
        ?>
        <header>
           
            
		<div class="wrapper">
                    <img src="imagenes/logo.png" alt="Logotipo de Publicis" class="logo"/>

			<nav class="shift">
                            <ul>
                                
                                <li><a href="Inicio.php"> Inicio</a></li>
				<li><a href="Nosotros.php"> Nosotros</a></li>
				<li><a href="Servicio.php"> Servicios</a></li>
				<li><a href="Contacto.php"> Contacto</a></li>
                                <li><a href="IniciarSesion.php"> Iniciar Sesion</a></li>
                            

                            
                                <?php
                                        session_start();
                                if($_SESSION['tipo_usuario'] == "administrador"){
                                    echo '<li><a href="VistaAdministrador.php"> Ver Anuncios</a></li>';
                                } else if ($_SESSION['tipo_usuario'] == "cliente"){
                                    echo '<li><a href="VistaContratar.php"> Contratar</a></li>';
                                    echo '<li><a href="VistaVerContrataciones.php"> Ver Mis Contrataciones</a></li>';
                                }
                                
                                if($_SESSION['inicio'] == null || $_SESSION['inicio'] == false){
                                    echo '<li><a href="IniciarSesion.php"> Iniciar Sesion</a></li>';
                                } else{
                                    echo '<li><a href="CerrarSesion.php"> Cerrar Sesion</a></li>';
                                }
                                ?>
                                
                                
                            </ul>
                        </nav>
                </div>
         </header>

        

        
            <div class="add-box">
              <h1> Ingrese los siguientes datos de la estación de radio a registrar: </h1>  
                <form name="contact-form" method="post">
                    Estación: <br>
                    <input type="text"  name="estacion" placeholder="ingresa la estacion">
                    <br><br>
                        
                    Título: <br>
                    <input type="text"  name="titulo" placeholder="ingresa el Titulo">
                    <br><br>
                    
                    Precio: <br>
                    <input type="text"  name="precio" placeholder="Ingresa el Precio">
                    <br><br>
                        
                    <input type="submit" name="submit" value="Registrar Datos" onclick="validateForm()">                       
                </form>
            
        </div>
        
    </body>
</html>