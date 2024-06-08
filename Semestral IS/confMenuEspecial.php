<?php include("db.php") ?>
<?php include("includes/header.php") ?>
<div class="wrapper">


    <div class="titulo" style="margin-top: 20px;">
        <h2>
            <center>Configuración menú especial</center>
        </h2>
    </div>
    <div class="contenedor" style="width: 50%; margin: 0 auto;">
        <div class="container">
            <div class="opciones mt-4">
                <div class="input-container">
                    <div>
                        <?php if (isset($_SESSION['message'])) { ?>
                            <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show"
                                role="alert">
                                <?= $_SESSION['message'] ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php session_unset();
                        } ?>
                        <div class="opcs">
                            <form action="save_task.php" method="POST">
                                <div>
                                    <input type="text" name="title" class="form-control" placeholder="Escriba un menu"
                                        autofocus>
                                </div>
                                <div class="button-container ">
                                    <input type="submit" class="btn btn-success btn-block mb-3" name="save_task"
                                        value="Guardar">
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>




            <div class="tabla comentarios">
                <table class="table table-bordered " style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Comida Especial</th>
                            <th>Configuración</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM task";
                        $result_tasks = mysqli_query($conn, $query);

                        while ($row = mysqli_fetch_array($result_tasks)) { ?>
                            <tr>
                                <td>
                                    <?php echo $row['menuEspecial'] ?>
                                </td>
                                <td>
                                    <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
                                        <i class="fas fa-marker"></i>
                                    </a>
                                    <a href="delete_task.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>

        <div class="container" style="">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Menú Especial</th>
                        <th>Votos</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT elecciones, COUNT(*) as total_votos FROM votos GROUP BY elecciones";
                    $result = mysqli_query($conn, $query);

                    if (!$result) {
                        die("Query Failed");
                    }

                    while ($row = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td>
                                <?php echo $row['elecciones']; ?>
                            </td>
                            <td>
                                <?php echo $row['total_votos']; ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!--PIE DE LA PAGINA-->
    <footer class="footer">

        <span class="text-muted">© 2023 - Universidad Tecnológica de Panamá - DITIC</span>

    </footer>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
    integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
    integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
    crossorigin="anonymous"></script>

</html>