

<?php 
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