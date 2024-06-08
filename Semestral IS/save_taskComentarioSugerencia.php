<?php
include("bd_comentarioSugerencia.php");
if(isset($_POST['save_task'])){
    $title =$_POST['title'];
    
    
    $query= "INSERT INTO comentariosugerencia(comentarioSugerencia) VALUES('$title')";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die("Query Failed");
    }
    $_SESSION['message']='Se guardo su respuesta';
    $_SESSION['message_type']='success';

    header("Location: comentarioSugerencia.php");
}
?>