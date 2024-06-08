<?php
include("db.php");
if (isset($_POST['save_taskk'])) {
    $titlee = $_POST['listGroupRadioo'];

    // Guardar el valor seleccionado en una sesión
    $_SESSION['selected_option'] = $titlee;

    $query = "INSERT INTO votos (elecciones) VALUES ('$titlee')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed");
    }
    $_SESSION['message'] = 'Se guardó su respuesta';
    $_SESSION['message_type'] = 'success';

    header("Location: menuEspecial.php");
}
?>
