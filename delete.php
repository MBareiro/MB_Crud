
<?php  include('conect.php'); ?>
<?php
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($db, "DELETE FROM info WHERE id=$id");
    $_SESSION['message'] = "Registro eliminado"; 
    header('location: index.php');
}
?>