<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="admin_login.css">
</head>

<body style="display: contents">
    <!--ENCABEZADO DE LA PAGINA-->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="admin_init.php">
                <img src="https://matricula.utp.ac.pa/IMAGENES/LOGO3.jpg" alt="Sistema de menú estudiantil"
                    style="width:40px;" class="rounded-pill">
                    UTP Menú
            </a>
        </div>
    </nav>
    <!--CUERPO DE LA PAGINA-->
    <div class="text-center">
        <main class="form-signin" style="margin: auto; padding-top: 10%;">
            <form method="post" action="con_login.php">
                <img class="mb-4" src="https://utp.ac.pa/documentos/2015/imagen/logo_utp_1_72.png" alt="" width="82" height="67">
                <h1 class="h3 mb-3 fw-normal">Introduzca datos</h1>

                <div class="form-floating">
                    <input name="cedula" type="text" class="form-control" id="floatingInput" placeholder="Cédula">
                    <label for="floatingInput">Cédula</label>
                </div>
                <div class="form-floating">
                    <input name="pass" type="password" class="form-control" id="floatingPassword" placeholder="Contraseña">
                    <label for="floatingPassword">Contraseña</label>
                </div>
                <br>
                <button name="boton" class="w-100 btn btn-lg btn-primary" role="button">Iniciar Sesión</button>
            </form>
        </main>
    </div>
    <!--PIE DE LA PAGINA-->
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">© 2023 - Universidad Tecnológica de Panamá - DITIC</span>
        </div>
    </footer>
</body>
</html>