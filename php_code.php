

<?php 
		
	$name = "";
	$address = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		echo "entrooo";
		$name = $_POST['name'];
		$address = $_POST['address'];

		mysqli_query($db, "INSERT INTO info (name, address) VALUES ('$name', '$address')"); 
		$_SESSION['message'] = "Registro guardado"; 
		header('location: index.php');
	}
	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$address = $_POST['address'];
	
		mysqli_query($db, "UPDATE info SET name='$name', address='$address' WHERE id=$id");
		$_SESSION['message'] = "Registro actualizado"; 
		header('location: index.php');
	}
	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM info WHERE id=$id");
		$_SESSION['message'] = "Registro eliminado"; 
		header('location: index.php');
	}
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM info WHERE id=$id");

		if ($record) {
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$address = $n['address'];
		}
	}
?>
