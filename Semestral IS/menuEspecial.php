<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
     <!--Bootstrap CDN -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="menuEspecial.css">
</head>
<body>
<!--ENCABEZADO DE LA PAGINA-->
<div class="barraNavegaccion">
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="admin_init.php">
        <img src="https://matricula.utp.ac.pa/IMAGENES/LOGO3.jpg" alt="Sistema de menú estudiantil" style="width:40px;" class="rounded-pill">
        UTP Menú
      </a>
    </div>
    <a id="boton-admin" class="btn btn-primary" href="admin_init.php" role="button" style="margin-right:1%">Regresar</a>
  </nav>
</div>

<!-- Primera Clase - Votación -->

<form action="save_taskVotos.php" method="POST">
  <div class="checkbox">
    <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
      <div class="card-header"><center>Votacion para un menu especial</center></div>
      <?php if(isset($_SESSION['message']))  {?>
        <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
          <?= $_SESSION['message']?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
              </button>
            </div>
      <?php session_unset(); }?>
      <div class="card-body">
        <ul class="list-group">
          <?php
          $query = "SELECT * FROM task";
          $result_tasks = mysqli_query($conn, $query);

          while ($row = mysqli_fetch_array($result_tasks)) {
            // Mostrar los datos de la base de datos en los elementos del formulario
            echo '<li class="list-group-item">
                    <input class="form-check-input me-1" type="radio" name="listGroupRadioo" value="' . $row['menuEspecial'] . '" id="radio' . $row['id'] . '">
                    <label class="form-check-label" for="radio' . $row['id'] . '">' . $row['menuEspecial'] . '</label>
                  </li>';
          }
          ?>
          
        </ul>
      </div>
      
    
    </div>
  </div>
    <div class="boton">
      
      <input type="submit" class="btn btn-success btn-block mb-3" name="save_taskk" value="Enviar">
    </div>
</form>

<!--PIE DE LA PAGINA-->
<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <span class="text-muted">© 2023 - Universidad Tecnológica de Panamá - DITIC</span>
  </div>
</footer>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</html>