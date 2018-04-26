

<?php include ("../../controllers/controladorAvisos.php");?>
<?php// session_start();?>
<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="public/css/css/bootstrap.min.css">
        <title>Usuarios</title>

          <link type="text/css" rel="stylesheet" href="../../public/css/estilos.css"/>
          <link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css">
          <link type="text/css" rel="stylesheet" href="../../public/css/tablas.css"/>
          <link type="text/css" rel="stylesheet" href="../../public/css/formularios.css"/>
          <link type="text/css" rel="stylesheet" href="../../public/css/form.css"/>
          
    </head>

    <body>
        <header>
            <div class="wrapper">
                <h1 class="logo"> AVISERO </h1>
                <nav>
                    <a href="../../index.php">Inicio</a></li>
                    <a href="listaAvisos.php">Avisos</a></li>
                </nav>
            </div>
        </header>

        <section class="contenido wrapper">
          <h1>NUEVO AVISO</h1>

          <fieldset>
            
           
            <form action="../../controllers/controladorAvisos.php" method="POST" enctype="multipart/form-data" class="form-horizontal">

              <label class="control-label col-md-2">Titulo: </label>
                <div class="col-md-10">
                     <input type="text" class="form-control" name="titulo" required><br>
                </div>

              <label class="control-label col-md-2">Subtitulo: </label>
                <div class="col-md-10">
                  <input type="text" class="form-control" placeholder= "Opcional" name="subtitulo"><br>
                </div>


              <label class="control-label col-md-2">Docente: </label>
                    <div class="col-md-10">
                      <select class="form-control" name="docente">
                            <option value="null">---</option>
                        <?php
                        $docentes = listaDocentes();
                       foreach ($docentes as $docente):
                       ?>
                            <option value="<?php echo $docente['IDDOC'] ?>"><?php echo $docente['APELLIDODOC'].' '.$docente['NOMBREDOC'] ?></option>
                       <?php endforeach; ?>
                      </select><br/>
                    </div>

              <label class="control-label col-md-2">Materia: </label>
                

                  <div class="">
                      <select class="" name="materia">
                            <option value="null">---</option>
                        <?php
                          $materias = listaMaterias();
                          foreach ($materias as $materia):
                        ?>
                            <!--<td><?php echo $materia['NOMBREMAT'] ?></td>-->
                            <option value="<?php echo $materia['CODMAT']?>"> <?php echo $materia['NOMBREMAT'] ?> </option>
                       <?php endforeach; ?>
                      </select><br/>
                 </div>

              <label class="control-label col-md-2">Contenido: </label>
              <div class="col-md-10">
                  <textarea class="form-control" name="descripcion" rows="5" cols="75" required=""></textarea><br/>
              </div>

              <input type="hidden" name="idUser" value="<?php echo $_SESSION['login_id']?>">


              <input type="submit" name="guardar" value="Guardar">
            </form>
          </fieldset>
        </section>
    </body>
</html>