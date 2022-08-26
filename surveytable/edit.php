<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `products` where userid='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>geostat-table</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
		<label>saxeoba:</label><input type="text" value="<?php echo $row['saxeoba']; ?>" name="saxeoba">
		<label>erteuli:</label><input type="text" value="<?php echo $row['erteuli']; ?>" name="erteuli">
		<label>sabazrotve:</label><input type="text" value="<?php echo $row['sabazrotve']; ?>" name="sabazrotve">
		<label>winatve:</label><input type="text" value="<?php echo $row['winatve']; ?>" name="winatve">
		<label>mimdinaretve:</label><input type="text" value="<?php echo $row['mimdinaretve']; ?>" name="mimdinaretve">
		<label>komentari:</label><input type="text" value="<?php echo $row['komentari']; ?>" name="komentari">
		<input type="submit" name="submit">
		<a href="index.php">Back</a>
	</form>
</body>
</html>