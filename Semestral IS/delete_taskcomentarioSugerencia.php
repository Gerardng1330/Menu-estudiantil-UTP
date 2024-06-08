<?php

include("bd_comentarioSugerencia.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM comentariosugerencia WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    echo'ferfe';
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: admin_opc.php');
}
