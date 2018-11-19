<?php
session_start();
?>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <link href="CssTablas.css" rel="stylesheet" type="text/css"/>
        
        
        
    </head>
    <body>
        <header>
		<div class="wrapper">
			<div class ="logo">The Masters Of Software </div>

			<nav>
			
				<a href="#"> Inicio</a>
				<a href="#"> Nosotros</a>
				<a href="#"> Servicios</a>
				<a href="Servicios"> Contacto</a>
				<a href="Servicios"> Iniciar Sesion</a>
                                <?php
                                if($_SESSION['tipo_usuario'] == "administrador"){
                                    echo '<a href="VistaAdministrador.php"> Ver Anuncios</a>';
                                } else if ($_SESSION['tipo_usuario'] == "cliente"){
                                    echo '<a href="VistaAdministrador.php"> Contratar</a>';
                                    echo '<a href="VistaAdministrador.php"> Ver Mis Contrataciones</a>';
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

       
            <div id="div1">
                <label for="table"> Carteleras</label>
            <table>
  <tr>
    <th>id</th>
    <th>Direccion</th>
    <th>Titulo</th>
    <th>Precio</th>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>

  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>

  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>

  </tr>
  <tr>
    <td</td>
    <td></td>
    <td></td>
    <td></td>

  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>

  </tr>
  
</table>
      </div> 
            
       <div id="div2">
           <label for="table">Radio</label>
         <table>
  <tr>
   
    <th>Estacion</th>
    <th>Titulo</th>
    <th>Precio</th>
  </tr>
  <tr>
    
    <td></td>
    <td></td>
    <td></td>

  </tr>
  <tr>
    
    <td></td>
    <td></td>
    <td></td>

  </tr>
  <tr>
    
    <td></td>
    <td></td>
    <td></td>

  </tr>
  <tr>
   
    <td></td>
    <td></td>
    <td></td>

  </tr>
  <tr>
   
    <td></td>
    <td></td>
    <td></td>

  </tr>
  
</table>       
                
                
       </div>
        
        <div id="div3">
           <label for="table">Television</label>
         <table>
  <tr>
    
    <th>Canal</th>
    <th>Titulo</th>
    <th>Precio</th>
  </tr>
  <tr>
    
    <td></td>
    <td></td>
    <td></td>

  </tr>
  <tr>
    
    <td></td>
    <td></td>
    <td></td>

  </tr>
  <tr>
    
    <td></td>
    <td></td>
    <td></td>

  </tr>
  <tr>
    
    <td></td>
    <td></td>
    <td></td>

  </tr>
  <tr>
    
    <td></td>
    <td></td>
    <td></td>

  </tr>
  
</table>       
                
                
       </div>
       
    </body>
</html>


