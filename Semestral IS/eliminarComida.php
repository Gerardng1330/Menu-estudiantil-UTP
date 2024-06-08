<?php
    include("connection.php");
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql="DELETE FROM comida WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        if(!$result) {
            echo'ferfe';
            die("Query Failed.");
          }
        
          $_SESSION['message'] = 'Task Removed Successfully';
          $_SESSION['message_type'] = 'danger';
          header('Location: admin_editcom.php');
    }
?>