<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar comidas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
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
        <h4>Editar comidas</h4>
    </div>
    <div class="my-3 p-3 bg-body rounded shadow-sm" style="margin-left: 10%; margin-right: 10%;">
        <h6 class="border-bottom pb-2 mb-0">Menú</h6>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql= "SELECT * FROM comida";
                    $num=1;
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $id=$row['id'];
                            $titulo= $row['TITULO'];
                            $precio=$row['PRECIO'];
                            $tipo=$row['TIPO'];
                            $descripcion=$row['DESCP'];
                            $foto=$row['FOTO'];
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $num?></th>
                                        <td><?php echo $titulo?></td>
                                        <td><?php echo $precio?></td>
                                        <td><?php echo $tipo?></td>
                                        <td><?php echo $descripcion?></td>
                                        <td><?php echo $foto?></td>
                                        <td>
                                            <div class="btn-group">
                                                <!--<a class="btn btn-primary" href="editarComida.php?updateid=<?php echo $id;?>" role="button">Editar</a>-->
                                                <a href="eliminarComida.php?id=<?php echo $id;?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                                            </div>
                                        </td>
                                </tr>                              
                            <?php
                            $num = $num + 1;    
                        }
                    }
                ?>
            </tbody>
        </table>
        <small class="d-block text-end mt-3">
            <a type="submit" class="btn btn-primary" href="admin_opc.php">Aceptar</a>
        </small>
                </div>
        <!--PIE DE LA PAGINA-->
        <footer class="footer mt-auto py-3 bg-light" style="position: relative;">
            <div class="container">
                <span class="text-muted">© 2023 - Universidad Tecnológica de Panamá - DITIC</span>
            </div>
        </footer>
</body>

</html>