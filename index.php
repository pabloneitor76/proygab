<?php include('controllers/controladorAvisos.php'); ?>
<?php //session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Patrick+Hand+SC" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans|Patrick+Hand+SC" rel="stylesheet">
	<!--link rel="stylesheet" href="main.css">-->
	<!--<link type="text/css" rel="stylesheet" href="public/css/estilos.css"/>-->
	
	<link rel="stylesheet" type="text/css" href="public/css/css/bootstrap.css">
	<title>Principal</title>


</head>

<body>
	<?php
		if (isset($_SESSION['login_nombre'])){
			if(($_SESSION['login_tipo_usuario'])=="ADMIN"){?>
			<header class="">
				
				<div class="container">
				<h1 class = "" align="center">AVISERO</h1>
				<nav>
					<a href="views/avisos/listaAvisos.php " class="btn btn-lg btn-info">		Avisos	</button></a>
					<a href="views/compras/listaHorarios.php" class="btn btn-lg btn-info">	Horarios	</a>
					
					<a href="controllers/logout.php" class="btn btn-lg btn-info">			Logout	</a>
				</nav>
				</div>
			</header>
	<?php   }else{?>		
			<header>
				<div class="container">
				<h1 class = "" align="center">AVISERO</h1>
				<nav>
					
					<a href="views/avisos/listaAvisos.php" class="btn btn-lg btn-info align-item-rigth">			Avisos		</a>
					<a href="controllers/logout.php" class="btn btn-lg btn-info">				Logout		</a>
				</nav>
				</div>
			</header>
	<?php	}
		}else {
		?>
			<header>
				<div class="container">
					<h1 class = "" align="center">AVISERO</h1>

					<nav>
						<a href="#" class="btn btn-lg btn-info">				Inicio	</a></li>
						<a href="views/login.php" class="btn btn-lg btn-info">	Login 	</a></li>
					</nav>
				</div>
			</header>
	<?php
		}
	?>
    <!--codigo ______________________bienvenido_________________________________HTML-->
    asdasasd
   <p align="text-center"> 
   <h3 class="pt-sans" align="center">Bienvenidos a los laboratorios de Informatica y Sistemas</h3>
		
			</p>
    <section>


       	<div class="center-block text-center">
		<marquee direction="up" align="center" width="1000" height="400">
			
			<?php
                $avisos = listaAvisos();


                foreach ($avisos as $aviso):
              ?>
              <table border="2" align="center" class="table">
              <tr align="center">
                
                <td><b><?php echo $aviso['TITULO'] ?></b></td>
                
              </tr>
              <tr align="center">
              	<td><?php echo $aviso['SUBTITULO'] ?></td>
              </tr>
              	<tr align="center">
                <td><?php echo $aviso['NOMBREDOC'].' '.$aviso['APELLIDODOC'] ?></td>
                
                <td><?php echo $aviso['NOMBREMAT'] ?></td>
               </tr>
               <tr align="center">
                <td><?php echo $aviso['CONTENIDO'] ?></td>
                </tr>
                <tr align="right">
                <td><?php echo $aviso['FECHA_HORA'] ?></td>
                
              </tr>
              </table>
              
            <?php endforeach; ?>
            <br>
            <br>
		</marquee>
	
	</div>

	<MARQUEE bgcolor="#881C82">
		<h3 class="pt-sans">
				Horarios
		</h3>
	</MARQUEE>
	<nav>
			<a href="http://google.com" class="espacio-derecha">Buscanos en:</a>
			<a href="http://facebook.com" class="espacio-derecha">Tambien estamos en facebook</a>
			
		</nav>
    </section>
    <!--codigo ______________________________________________________ HTML-->

    <script type="public/css/js/bootstrap.js"></script>
</body>
</html>