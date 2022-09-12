<?php
include('conn.php');
$id = $_GET['id'];
$query = mysqli_query($conn, "select * from `sawarmo` where userid='$id'");
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
	<title>Geostat-Kitxvari</title>
</head>

<body>
	<h2 class="edit-title container-fluid">Edit</h2>
	<div class="container-fluid">
		<form class="edit" method="POST" action="update.php?id=<?php echo $id; ?>">
			<input class="kodi_edit p-2 flex-fill" type="text" value="<?php echo $row['kodi']; ?>" name="kodi" placeholder="საიდენტიფიკაციო კოდი">
			<input class="dasaxeleba_edit p-2 flex-fill" type="text" value="<?php echo $row['dasaxeleba']; ?>" name="dasaxeleba" placeholder="საწარმოს დასახელება">
			<input class="imisamarti_edit p-2 flex-fill" type="text" value="<?php echo $row['imisamarti']; ?>" name="imisamarti" placeholder="იურიდიული მისამართი">
			<input class="fmisamarti_edit p-2 flex-fill" type="text" value="<?php echo $row['fmisamarti']; ?>" name="fmisamarti" placeholder="ფიზიკური მისამართი">
			<input class="regioni_edit p-2 flex-fill" type="text" value="<?php echo $row['regioni']; ?>" name="regioni" placeholder="რეგიონი">
			<input class="raioni_edit p-2 flex-fill" type="text" value="<?php echo $row['raioni']; ?>" name="raioni" placeholder="რაიონი">
			<input class="sforma_edit p-2 flex-fill" type="text" value="<?php echo $row['sforma']; ?>" name="sforma" placeholder="საკუთრების ფორმა">
			<input class="osforma_edit p-2 flex-fill" type="text" value="<?php echo $row['osforma']; ?>" name="osforma" placeholder="ორგანიზაციულ-სამართლებრივი ფორმა">
			<input class="saxe_edit p-2 flex-fill" type="text" value="<?php echo $row['saxe']; ?>" name="saxe" placeholder="ეკონომიკური საქმიანობის ძირითადი სახე">
			<input class="gvari_edit p-2 flex-fill" type="text" value="<?php echo $row['gvari']; ?>" name="gvari" placeholder="საწარმოს ხელმძღვანელის სახელი და გვარი">
			<input class="phone_edit p-2 flex-fill" type="text" value="<?php echo $row['phone']; ?>" name="phone" placeholder="ტელეფონი">
			<input class="submit_edit p-2 flex-fill" type="submit" name="submit">
			<a class="btn-edit" href="index.php">Back</a>
		</form>
	</div>

	<script src="js/bootstrap.js"></script>
	<script src="js/script.js"></script>
</body>

</html>