<?php include('../../controllers/controladorAvisos.php'); ?>

<!DOCTYPE html>
<html>
    <head>

        <title>Avisos</title>
         <link rel="stylesheet" type="text/css" href="../../public/css/css/bootstrap.min.css">
          <link type="text/css" rel="stylesheet" href="../../public/css/estilos.css"/>
          <link type="text/css" rel="stylesheet" href="../../public/css/tablas.css"/>
    </head>

    <body>
        <header>
            <div class="wrapper">
                <h1 class="logo"> Avisero </h1>
                <nav>
                    <a href="../../index.php">Inicio</a></li>
                    <a href="nuevoAviso.php">Nuevo Aviso</a>
                </nav>
            </div>
        </header>

        <section class="contenido wrapper">
          <h1>Lista Avisos</h1>
          <center>
          <table id="customers" border="1" >
            <thead>
              <tr>

                <td>Codigo_materia  </td>
                <td>Id_docente      </td>
                <td>Titulo          </td>
                <td>Subtitulo       </td>
                <td>contenido       </td>
                <td>Fecha           </td>
                <td>Herramientas    </td>

              </tr>
            </thead>

            <tbody>
              <?php
                $avisos = listaAvisos();


                foreach ($avisos as $aviso):
              ?>
              <tr>
                <!--<td><?php echo $aviso['CODAVISO'] ?></td>-->
                <td><?php echo $aviso['NOMBREMAT'] ?></td>
                <td><?php echo $aviso['NOMBREDOC'].' '.$aviso['APELLIDODOC'] ?></td>
                
                <td><?php echo $aviso['TITULO'] ?></td>
                <td><?php echo $aviso['SUBTITULO'] ?></td>
                <td><?php echo $aviso['CONTENIDO'] ?></td>
                <td><?php echo $aviso['FECHA_HORA'] ?></td>
                
                <td>
                  <a href="editar.php?codAviso=<?php echo $aviso['CODAVISO'] ?>">Editar</a>    
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
          </center>
        </section>
    </body>
</html>