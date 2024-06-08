<?php
include("db.php");
$title = '';


if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM task WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $title = $row['menuEspecial'];

  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $title= $_POST['menuEspecial'];


  $query = "UPDATE task set menuEspecial = '$title' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Se actualizo el dato';
  $_SESSION['message_type'] = 'warning';
  header('Location: confMenuEspecial.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="containerr p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="menuEspecial" type="text" class="form-control" value="<?php echo $title; ?>" placeholder="Actualizar">         
        </div>
        <div class="d-flex justify-content-center align-items-center mt-4">
          <button class="btn btn-success" name="update">
            Actualizar
          </button>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>