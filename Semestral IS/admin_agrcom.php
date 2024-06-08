<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar comida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
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
    <div class="container" style="margin-top:3%; margin-bottom: 2%">
        <h3>Sistema de menú</h3>
        <h4>Agrega una comida al menú</h4>
    </div>
    <?php
    if (isset($_POST['boton'])) {
        $id=0;
        $titulo = $_POST['titulo_comida'];
        $tipo = $_POST['tipo_comida'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['desc_comida'];
        $uploadedFile = $_FILES['image'];
        $uploadedFile_name = $uploadedFile['name'];
        $uploadedFile_temp = $uploadedFile['tmp_name'];
  
        $filename_separate = explode('.', $uploadedFile_name);
        $filename_extension = strtolower(end($filename_separate));
        $extension = array('jpg', 'jpeg', 'png');

        if (in_array($filename_extension, $extension)) {
            $upload_image = str_replace(' ', '-', 'imagenes/' . $uploadedFile_name);
            move_uploaded_file($uploadedFile_temp, $upload_image);
        }

        require_once('connection.php');
        $query = "SELECT COUNT(*) as total_rows FROM comida";
        $result = mysqli_query($conn, $query);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $rowCount = $row['total_rows'];
            $id=$rowCount+1;
        }

        $sql = "INSERT INTO COMIDA VALUES(?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        $preparestmt = mysqli_stmt_prepare($stmt, $sql);
        if ($preparestmt) {
            mysqli_stmt_bind_param($stmt, "ssssss",$id, $titulo, $precio, $tipo, $descripcion, $upload_image);
            mysqli_stmt_execute($stmt);
            echo "<div class='text-center'><div class='alert alert-success fade out' style='opacity: 100%;
            margin-left: 30%; margin-right: 30%;'><strong>Completado!</strong> Se ha añadido un elemento al menú.</div></div>";
        }
        ;
    }
    ?>
    <form action="admin_agrcom.php" method="post" enctype="multipart/form-data">
        <div class=container style="padding-left:10%; padding-right: 10%; width:50%; float:left">
            <div class="mb-3">
                <label class="form-label">Titulo</label>
                <input name="titulo_comida" type="text" class="form-control" id="titulo-comida"
                    placeholder="Titulo de la comida">
            </div>
            <label for="exampleFormControlTextarea1" class="form-label">Tipo</label>
            <div class="mb-3">
                <select name="tipo_comida" class="form-select" aria-label="Default select example">
                    <option selected value="">Seleccione una opción</option>
                    <option value="PRESA">PRESA</option>
                    <option value="ACOMP">ACOMP</option>
                    <option value="BEBIDA">BEBIDA</option>
                </select>
            </div>
            <label for="exampleFormControlTextarea1" class="form-label">Precio</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input name="precio" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
            </div>
        </div>
        <div class="container" style="display: table-cell">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                <textarea name="desc_comida" class="form-control" id="descripcion-comida" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Foto (JPEG,PNG,JPG)</label>
                <input name="image" class="form-control" type="file" id="formFile" accept=".jpg, .jpeg, .png">
            </div>
            <div class="text-center">
                <button name="boton" type="submit" class="btn btn-primary">Aceptar</button>
                <a type="button" class="btn btn-secondary" href="admin_opc.php">Cancelar</a>
            </div>
        </div>
    </form>
    <!--PIE DE LA PAGINA-->
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">© 2023 - Universidad Tecnológica de Panamá - DITIC</span>
        </div>
    </footer>
</body>

</html>