<?php  include('conect.php'); ?>
<?php  include('update.php'); ?>

<?php 
		
	$name = "";
	$address = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		
		$name = $_POST['name'];
		$address = $_POST['address'];

		mysqli_query($db, "INSERT INTO info (name, address) VALUES ('$name', '$address')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: index.php');
	}
    ?>

