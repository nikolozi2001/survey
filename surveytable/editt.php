<?php
include('conn.php');
$id = $_GET['id'];
$query = mysqli_query($conn, "select * from `productss` where useridd='$id'");
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<title>Geostat-Table</title>
</head>

<body>
	<h2 class="edit-title container-fluid">Edit</h2>
	<div class="container-fluid">
		<form class="edit" method="POST" action="update.php?id=<?php echo $id; ?>">
			<input class="saxeoba_edit p-2 flex-fill" type="text" value="<?php echo $row['saxeobaa']; ?>" name="saxeobaa" placeholder="სახეობა">
			<input class="erteuli_edit p-2 flex-fill" type="text" value="<?php echo $row['erteulii']; ?>" name="erteulii" placeholder="ერთეული">
			<input class="sabazrotve_edit p-2 flex-fill" type="text" value="<?php echo $row['sabazrotvee']; ?>" name="sabazrotvee" placeholder="საბაზრო თვე">
			<input class="winatve_edit p-2 flex-fill" type="text" value="<?php echo $row['winatvee']; ?>" name="winatvee">
			<input class="mimdinaretve_edit p-2 flex-fill" type="text" value="<?php echo $row['mimdinaretvee']; ?>" name="mimdinaretvee" placeholder="მიმდინარე თვე">
			<input class="komentari_edit p-2 flex-fill" type="text" value="<?php echo $row['komentarii']; ?>" name="komentarii" placeholder="კომენტარი">
			<input class="submit_edit p-2 flex-fill" type="submit" name="submit">
			<a class="btn-edit" href="index.php">Back</a>
		</form>
	</div>

	<script src="js/bootstrap.js"></script>
	<script src="js/script.js"></script>
</body>

</html>