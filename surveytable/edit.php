<?php
include('conn.php');
$id = $_GET['id'];
$query = mysqli_query($conn, "select * from `products` where userid='$id'");
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<title>geostat-table</title>
</head>

<body>
	<h2>Edit</h2>
	<form class="edit" method="POST" action="update.php?id=<?php echo $id; ?>">
		<label>სახეობა:</label><input class="saxeoba_edit" type="text" value="<?php echo $row['saxeoba']; ?>" name="saxeoba">
		<label>ერთეული:</label><input class="erteuli_edit" type="text" value="<?php echo $row['erteuli']; ?>" name="erteuli">
		<label>საბაზრო თვე:</label><input class="sabazrotve_edit" type="text" value="<?php echo $row['sabazrotve']; ?>" name="sabazrotve">
		<label>წინა თვე:</label><input class="winatve_edit" type="text" value="<?php echo $row['winatve']; ?>" name="winatve">
		<label>მიმდინარე თვე:</label><input class="mimdinaretve_edit" type="text" value="<?php echo $row['mimdinaretve']; ?>" name="mimdinaretve">
		<label>კომენტარი:</label><input class="komentari_edit" type="text" value="<?php echo $row['komentari']; ?>" name="komentari">
		<input class="submit_edit" type="submit" name="submit">
		<a href="index.php">Back</a>
	</form>
</body>

</html>