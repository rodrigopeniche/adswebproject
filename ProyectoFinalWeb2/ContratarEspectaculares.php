<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Contrato</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="HeaderStyleSheet.css">
        <link rel="stylesheet" href="ContratarStyleSheet.css">
        <link href="https://file.myfontastic.com/qp8yPnhRsVhXCzhpKiRbnF/icons.css" rel="stylesheet">
        <script src="contact-form-validation.js"></script>
        <script>
            function getText(element) {
            var textHolder = element.options[element.selectedIndex].text
            document.getElementById("txt_holder").value = textHolder;
            }
        </script>
    </head>
<body>
    <?php
        session_start();
        include("BaseDeDatos.php"); 
            function agregarCartelera(){
                $baseDatos = new BaseDeDatos();
                $cartel = $_POST['txt_holder'];
                $usuario = $_SESSION['usuario'];
                $diaInicio = $_POST['diaInicio'];
                $mesInicio = $_POST['mesInicio'];
                $anoInicio = $_POST['anoInicio'];
                $fechaInicio = $mesInicio."/".$diaInicio."/".$anoInicio;
                        
                $diaTermino = $_POST['diaTermino'];
                $mesTermino = $_POST['mesTermino'];
                $anoTermino = $_POST['anoTermino'];
                $fechaTermino= $mesTermino."/".$diaTermino."/".$anoTermino;
                
                $query = "INSERT INTO `carteleracontratado`(`clv_cartel`, `clv_usuario`, `fecha_inicio`, `fecha_fin`) VALUES "
                        . "('".$cartel."','".$usuario."',STR_TO_DATE('".$fechaInicio."', '%m/%d/%Y'),STR_TO_DATE('".$fechaTermino."', '%m/%d/%Y'))" ;
                echo $query;
                if(is_numeric($diaInicio) && is_numeric($diaTermino)){
                    $baseDatos->EjecutarQuery($query);
                }
            }
            if(isset($_POST['submit'])){ 
                agregarCartelera();
            }  
        
        ?>
    <header class="main-header">	
        <div class="container container--flex">
            <div class ="logo-container column column--50">
                <h1 class="logo">Contratar</h1>
            </div>
            <div class="main-header__contactInfo column column--50">
                <p class="main-header__contactInfo__phone">
                    <span class="icon-phone">999-999-999</span>
                </p>
                <p class="main-header__contactInfo__adress">
                    <span class="icon-map-marca">Mérida,Yucatán, México</span>
                </p>    
            </div>    
        </div>
    </header>
    <nav class="main-nav">
    	<div class="container container--flex">
    		<span class="icon-menu" id="btnmenu"></span>
    		<ul class="menu" id="menu">
    			<li class="menu__item">
    				<a href="Inicio.php" class="menu__link menu__link--select"> Inicio</a>
    			</li>
    			<li class="menu__item">
    				<a href="Nosotros.php" class="menu__link"> Nosotros</a>
    			</li>
    			<li class="menu__item">
    				<a href="Servicio.php" class="menu__link "> Servicios</a>
    			</li>
    			<li class="menu__item">
    				<a href="Contacto.php" class="menu__link "> Contacto</a>
    			</li>
    		</ul>
    		<div class="social-icon">
    			<a href="" class="social-icon__link"><span class="icon-mail"></span></a> 			
    		</div>

    	</div>      
            <?php
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
    
    <div class="contenedorForm">
        <div class="elementoform">
            <div class="contenedor">
                <div class="elemento">
                    <h2>Contratar Espectaculares</h2>
                </div>
                <div class="elemento">
                    <form action="" method="post">
                        Día de inicio:<br>
                        <input type="text" name="diaInicio" value="">
                        <br>
                        Mes de inicio:<br>
                        <input type="text" name="mesInicio" value="">
                        <br>
                        Año de inicio:<br>
                        <input type="text" name="anoInicio" value="">
                        <br>
                        Dia de termino:<br>
                        <input type="text" name="diaTermino" value="">
                        <br>
                        Mes de termino:<br>
                        <input type="text" name="mesTermino" value="">
                        <br>
                        Año de termino:<br>
                        <input type="text" name="anoTermino" value="">
                        <br><br>
                        Anuncios:
                        <select name="Anuncios" onchange="getText(this)">
                          <option>Selecciones una opcion</option>
                            <?php
                                $baseDatos = new BaseDeDatos();
                                $sql = "Select id from carteleras";
                                $result = $baseDatos->ObtenerResultado($sql);
                                while($rows = mysqli_fetch_assoc($result)){
                            ?>
                          <option><?php echo $rows['id']; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                        <input type="hidden" name="txt_holder" id="txt_holder">
                        <br><br>

                        <input type="submit" value="Aceptar" name="submit">
                    </form>  
                </div>
            </div>
        </div>
        
    </div>

<header>
		<div class="wrapper">
|			<div class ="logo">Publicis </div>
			<nav>
				<a href="Inicio.php"> Inicio</a>
				<a href="Nosotros.php"> Nosotros</a>
				<a href="Servicio.php"> Servicios</a>
				<a href="Contacto.php"> Contacto</a>
                                <?php
                                    
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
<script src="btnMenuInteraccion.js"></script>
</body>
</html>
