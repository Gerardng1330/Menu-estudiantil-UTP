<?php
    $servername = "localhost"; 
    $username = "root";
    $password = "";
    $dbname = "sist_menu_est";

    // Crear la conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    if(isset($_POST['boton'])){
        $cedula=$_POST['cedula'];
        $contra=$_POST['pass'];

        // Consulta para verificar si el registro existe
        $sql = "SELECT * FROM admin WHERE cedula = '$cedula' AND contra='$contra'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            header("Location: admin_opc.php");
            $conn->close();
        } else {
            header("Location: admin_login.php");
            $conn->close();
        };
    }
?>