<?php  include('conect.php'); ?>
<?php  include('delete.php'); ?>
<?php  include('create.php'); ?>
<?php  include('edit.php'); ?>


<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body bgcolor = "yellow">
<!-- -->
	<form method="post" action="create.php" align="center">
		<div class="input-group">
			<label>Nombre</label>
			<input type="text" name="name" value="<?php echo $name; ?>" >
		</div>

		<div class="input-group">
			<label>Direccion</label>
			<input type="text" name="address" value="<?php echo $address; ?>">
		</div>

		<div class="input-group">

        <?php if ($update == true): ?>
            <button class="btn" type="submit" name="update";" >Actualizar</button>
        <?php else: ?>
            <button class="btn" type="submit" name="save" >Guardar</button>
        <?php endif ?>

		</div>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        
	</form>
<!-- -->
    <?php $results = mysqli_query($db, "SELECT * FROM info"); ?>
	<br>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Direccion</th>
                <th colspan="2">Accion</th>
            </tr>
        </thead>
        
        <?php while ($row = mysqli_fetch_array($results)) { ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td>
                    <a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Editar</a>
                </td>
                <td>
                    <a href="delete.php?del= <?php echo $row['id']; ?>" class="del_btn">Borrar</a>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>
<!-- -->
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg" align="center">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>



</html>



</html>
