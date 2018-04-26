<?php include ("../../controllers/controladorAvisos.php");?>

<!DOCTYPE html>
<html>
    <head>
        <title>Editar</title>

          <link type="text/css" rel="stylesheet" href="../../public/css/estilos.css"/>
          <link rel="stylesheet" href="main.css">
          <link type="text/css" rel="stylesheet" href="../../public/css/form.css"/>
          <link type="text/css" rel="stylesheet" href="../../public/css/formularios.css"/>
          <link type="text/css" rel="stylesheet" href="../../public/css/tablas.css"/>
          <link rel="stylesheet" type="text/css" href="">
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
          <h1>EDITAR AVISO</h1>

          <fieldset>
            <?php
            $aviso = obtenerAviso($_REQUEST['codAviso']);
            ?>
           
            <form action="../../controllers/controladorAvisos.php" method="POST" enctype="multipart/form-data" class="form-horizontal">

              <label class="control-label col-md-2">Titulo: </label>
                <div class="col-md-10">
                     <input type="text" class="form-control" name="titulo" value="<?php echo $aviso['TITULO']?>" required><br>
                </div>

              <label class="control-label col-md-2">Subtitulo: </label>
                <div class="col-md-10">
                  <input type="text" class="form-control" placeholder= "Opcional" name="subtitulo" value="<?php echo $aviso['SUBTITULO']?>"><br>
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
                    <!--<input type="text" class="form-control" name="materia" value="<?php echo $aviso['CODMAT']?>"><br>-->
                    <select class="" name="materia">
                            <option value="null">---</option>
                        <?php
                          $materias = listaMaterias();
                          foreach ($materias as $materia):
                        ?>
                          <option value="<?php echo $materia['CODMAT']?>"> <?php echo $materia['NOMBREMAT'] ?> </option>
                       <?php endforeach; ?>
                      </select><br/>

                      
                 </div>



              <label class="control-label col-md-2">Contenido: </label>
              <div class="col-md-10">
                  <textarea class="form-control" name="contenido" rows="5" cols="75" required=""><?php echo $aviso['CONTENIDO']?></textarea><br/>
              </div>

              <input type="hidden" name="idUser" value="<?php echo $_SESSION['login_id']?>">

              <input type="hidden" name="fecha" value="<?php echo $aviso['FECHA_HORA']?>">

              <input type="hidden" name="codAviso" value="<?php echo $aviso['CODAVISO']?>">


              <input type="submit" name="editar" value="Guardar">
            </form>
          </fieldset>
        </section>
    </body>
</html>