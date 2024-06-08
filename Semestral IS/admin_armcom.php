<?php include("connection.php")?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armar combo</title>
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
        <h4>Armar menú estudiantil</h4>
    </div>
    <?php
    if (isset($_POST['actualizar'])) {
        $id=1;
        $presa = $_POST['presa'];
        $acomp = $_POST['acomp'];
        $acomp2 = $_POST['acomp2'];
        $bebida = $_POST['bebida'];
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
        $sql = "UPDATE combos SET presa='$presa', acomp='$acomp', acomp2='$acomp2', bebida='$bebida',foto='$upload_image' WHERE id='1'";
        mysqli_query($conn, $sql);
    }
    ?>
    <div class="container" style="padding-left:5%; padding-right: 10%; width:50%; float:left">
        <form action="admin_armcom.php" method="post" enctype="multipart/form-data">
            <label for="sel1" class="form-label">Seleccione una presa:</label>
            <select name="presa" class="form-select" id="sel1" name="sellist1">
                <option selected value="">Ninguno</option>
                <?php
                $sql2 = "SELECT titulo FROM comida WHERE tipo='PRESA'";
                $result = $conn->query($sql2);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["titulo"] . "'>" . $row['titulo'] . "</option>";
                    }
                }
                ?>
            </select>
            <br>
            <label for="sel1" class="form-label">Seleccione un acompañamiento:</label>
            <select name="acomp" class="form-select" id="sel1" name="sellist1">
                <option selected value="">Ninguno</option>
                <?php
                $sql2 = "SELECT titulo FROM comida WHERE tipo='ACOMP'";
                $result = $conn->query($sql2);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["titulo"] . "'>" . $row['titulo'] . "</option>";
                    }
                }
                ?>
            </select>
            <br>
            <label for="sel2" class="form-label">Seleccione un segundo acompañamiento:</label>
            <select name="acomp2" class="form-select" id="sel1" name="sellist1">
                <option selected value="">Ninguno</option>
                <?php
                $sql2 = "SELECT titulo FROM comida WHERE tipo='ACOMP'";
                $result = $conn->query($sql2);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["titulo"] . "'>" . $row['titulo'] . "</option>";
                    }
                }
                ?>
            </select>
            <br>
            <label for="sel2" class="form-label">Seleccione una bebida:</label>
            <select name="bebida" class="form-select" id="sel1" name="sellist1">
                <option selected value="">Ninguno</option>
                <?php
                $sql2 = "SELECT titulo FROM comida WHERE tipo='BEBIDA'";
                $result = $conn->query($sql2);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["titulo"] . "'>" . $row['titulo'] . "</option>";
                    }
                }
                ?>
            </select>
            <br>
            <input name="image" class="form-control" type="file" id="formFile" accept=".jpg, .jpeg, .png">
            <br>
            <div class="text-center">
                <button name="actualizar" type="submit" class="btn btn-primary">Actualizar</button>
                <a type="button" class="btn btn-secondary" href="admin_opc.php">Cancelar</a>
            </div>
        </form>
    </div>
    <!--PIE DE LA PAGINA-->
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">© 2023 - Universidad Tecnológica de Panamá - DITIC</span>
        </div>
    </footer>
</body>

</html>