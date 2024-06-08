<?php include("connection.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UTP Menú</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="admin_init.css">
</head>

<body>
  <!--ENCABEZADO DE LA PAGINA-->
  <div class="barraNavegaccion">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="https://matricula.utp.ac.pa/IMAGENES/LOGO3.jpg" alt="Sistema de menú estudiantil"
            style="width:40px;" class="rounded-pill">
          UTP Menú
        </a>
      </div>
      <a id="boton-admin" class="btn btn-primary" href="admin_login.php" role="button">ADMIN</a>
    </nav>
  </div>

  <div class="background">
    <!--CUERPO DE LA PAGINA-->
    <?php
    $sql = "SELECT * FROM combos";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
      while ($row = mysqli_fetch_array($result)) {
        if ($row["BEBIDA"] == "") {
          $bebida = 'sin bebida.';
        } else {
          $bebida = $row["BEBIDA"];
        }
        ?>
        <section class="opcionmenu">
          <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
              <div class="col-10 col-sm-8 col-lg-6">
                <img src="<?php echo $row["FOTO"]; ?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"
                  width="700" height="500" loading="lazy" style="border-radius: 5%;">
              </div>
              <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Menú estudiantil</h1>
                <p class="lead">El menu estudiantil:</p>
                <ul class="list-group">
                  <li class="list-group-item">
                    <?php echo $row["PRESA"]; ?>
                  </li>
                  <li class="list-group-item">
                    <?php echo $row["ACOMP"]; ?>
                  </li>
                  <li class="list-group-item">
                    <?php echo $row["ACOMP2"]; ?>
                  </li>
                  <li class="list-group-item">
                    <?php echo $bebida; ?>
                  </li>
                </ul>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                  <button type="button" class="btn btn-primary btn-lg px-4 me-md-2" style="margin-top: 3%; opacity:100%;"
                    disabled>Precio: 1.00$</button>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php
      }
    }
    ?>
    <!--Division-->
    <div class="album py-5 bg-light">
      <div class="container">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Menú disponible</h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

          <?php
          $sql = "SELECT * FROM comida";
          $result = mysqli_query($conn, $sql);
          if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_array($result)) {
              ?>
              <div class="col">
                <div class="card shadow-sm">
                  <img class="bd-placeholder-img card-img-top" width="100%" height="225" src=<?php echo $row["FOTO"]; ?>
                    role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                  </img>

                  <div class="card-body">
                    <h5>
                      <?php echo $row["TITULO"]; ?>
                      </h5>
                      <p class="card-text">
                        <?php echo $row["DESCP"]; ?>
                      </p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-secondary" disabled style="opacity: 100%">
                            <?php echo $row["PRECIO"] . "$"; ?>
                          </button>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <?php
            }
          }
          ?>
        </div>
      </div>
    </div>
    <div class="buttons">
      <div class="d-grid gap-2 d-md-block">
        <a id="boton-admin" class="btn btn-primary" href="menuEspecial.php" role="button">Menú Especial</a>
        <a id="boton-admin" class="btn btn-primary" href="comentarioSugerencia.php" role="button">Comentario o Sugerencia</a>
      </div>
    </div>
    <!--PIE DE LA PAGINA-->
    <footer class="footer mt-auto py-3 bg-light">
      <div class="container">
        <span class="text-muted">© 2023 - Universidad Tecnológica de Panamá - DITIC</span>
      </div>
    </footer>
</body>

</html>