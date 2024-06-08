<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM task WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    echo'ferfe';
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Se elimino el dato selecionado';
  $_SESSION['message_type'] = 'danger';
  header('Location: confMenuEspecial.php');
}

?>