
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Agregar cartelera</title>
        <meta charset="UTF-8">
        <link href="NavbarCss.css" rel="stylesheet" type="text/css"/>
        
        <link href="estiloVentanasAgregar.css" rel="stylesheet" type="text/css"/>
        
         <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        
        
        <script src="contact-form-validation-Cartelera.js"></script>
    </head>
    <body>
        <?php
        include("BaseDeDatos.php"); 
            function agregarCartelera(){
                $baseDatos = new BaseDeDatos();
                $id = $_POST['id'];
                $direccion = $_POST['direccion'];
                $titulo = $_POST['titulo'];
                $precio = $_POST['precio'];
                $query = "INSERT INTO carteleras VALUES (".floor($id).",'".$direccion."','".$titulo."',".floor($precio).");" ;
                
                if(is_numeric($id) && is_numeric($precio)){
                    $baseDatos->EjecutarQuery($query);
                }
            }

            if(isset($_POST['submit'])){ 
                agregarCartelera();
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
//                                        session_start();
//                                if($_SESSION['tipo_usuario'] == "administrador"){
//                                    echo '<li><a href="VistaAdministrador.php"> Ver Anuncios</a></li>';
//                                } else if ($_SESSION['tipo_usuario'] == "cliente"){
//                                    echo '<li><a href="VistaContratar.php"> Contratar</a></li>';
//                                    echo '<li><a href="VistaVerContrataciones.php"> Ver Mis Contrataciones</a></li>';
//                                }
//                                
//                                if($_SESSION['inicio'] == null || $_SESSION['inicio'] == false){
//                                    echo '<li><a href="IniciarSesion.php"> Iniciar Sesion</a></li>';
//                                } else{
//                                    echo '<li><a href="CerrarSesion.php"> Cerrar Sesion</a></li>';
//                                }
                                ?>
                                
                                
                            </ul>
                        </nav>
                </div>
         </header>

        
        
            <div class="add-box">
                <h1> Ingrese los siguientes datos de la cartelera a registrar:</h1>

                <form name="contact-form" method="POST" action="">
                    ID: <br>
                    <input type="text"  name="id" placeholder="ingrese el ID">
                    <br><br>
                        
                    Dirección: <br>
                    <input type="text"  name="direccion" placeholder="ingrese la direccion">
                    <br><br>
                        
                    Título: <br>
                    <input type="text"  name="titulo" placeholder="ingrese el Titulo">
                    <br><br>
                    
                    Precio: <br>
                    <input type="text"  name="precio" placeholder="ingrese el precio">
                    <br><br>
                     
                    <input type="submit" name="submit" value="Registrar Datos" onclick="validateForm()">               
                </form>
            </div>
        
        
    </body>
</html>