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

<h2>Contratar Espectaculares</h2>

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


</body>
</html>
