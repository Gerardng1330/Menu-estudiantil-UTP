<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de menú estudiantil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="admin_opc.css">
</head>
<style>
  #opc {
    margin-bottom: 2%;
  }
</style>

<body>
  <!--ENCABEZADO DE LA PAGINA-->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="admin_init.php">
        <img src="https://matricula.utp.ac.pa/IMAGENES/LOGO3.jpg" alt="Sistema de menú estudiantil" style="width:40px;"
          class="rounded-pill">
        UTP menú
      </a>
    </div>
  </nav>
  <!--CUERPO DE LA PAGINA-->

  <div class="container">
    <div>
      <h3>Sistema de menú estudiantil</h3>
      <h4 style="display: block; float: right; margin-right: 33%;">Buzón</h4>
      <h4>Seleccione una opción</h4>
    </div>
    <div class="opcionesContainer">
      <div class="left">


        <div class="opciones">
          <a type="button" class=" btn btn-md btn btn-outline-primary" href="admin_agrcom.php">Agregar comida</a>

          <a type="button" class=" btn btn-md btn btn-outline-primary" href="admin_armcom.php">Configurar menú estudiantil</a>

          <a type="button" class=" btn btn-md btn btn-outline-primary" href="admin_editcom.php">Administrar menú</a>

          <a type="button" class=" btn btn-md btn btn-outline-primary" href="confMenuEspecial.php">Configurar menú especial</a>

        </div>
      </div>

      <?php include("bd_comentarioSugerencia.php") ?>
      <div class="tablaComentarios">
        <table class="table table-bordered" style="border-radius: 7px">
          <thead>
            <tr>
              <th>Comentario o sugerencia</th>
              <th>Configuración</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query = "SELECT * FROM comentarioSugerencia";
            $result_tasks = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($result_tasks)) { ?>
              <tr>

                <td>
                  <?php echo $row['comentarioSugerencia'] ?>
                </td>
                <td class="text-center">
                  <a href="delete_taskcomentarioSugerencia.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                    <i class="far fa-trash-alt"></i>
                  </a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>

      </div>
    </div>
  </div>


  <!--PIE DE LA PAGINA-->
  <footer class="footer">

    <span class="text-muted">© 2023 - Universidad Tecnológica de Panamá - DITIC</span>

  </footer>
</body>

</html>