
<?php include('../header.php'); ?>
<?php 
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");

?>

<!DOCTYPE html>
<html lang="en">

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
	<div class="container-fluid container-sm">
		<form method="POST" action="add.php">
			<label>პროდუქტის სახეობა:</label><input type="text" name="saxeoba">
			<label>ზომის ერთეული:</label><input type="text" name="erteuli">
			<label>საბაზრო თვე:</label><input type="text" name="sabazrotve">
			<label>წინა თვე:</label><input type="text" name="winatve">
			<label>მიმდინარე თვე:</label><input type="text" name="mimdinaretve">
			<label>კომენტარი:</label><input type="text" name="komentari">
			<input type="submit" name="add">
		</form>
	</div>
	<br>
	<div class="container-fluid">
		<table border="1" class="table-responsive">
			<thead>
				<th colspan="1">#</th>
				<th colspan="1">CPA კოდი</th>
				<th colspan="5">პროდუქტის დასახელება</th>
			</thead>
			<thead>
				<th colspan="1">1</th>
				<th colspan="1"></th>
				<th colspan="5"></th>
			</thead>
			<thead>
				<th>პროდუქტის სახეობა</th>
				<th>ზომის ერთეული</th>
				<th>საბაზრო თვე</th>
				<th>წინა თვე</th>
				<th>მიმდინარე თვე</th>
				<th>კომენტარი</th>
				<th></th>
			</thead>
			<tbody>
				<?php
				include('conn.php');
				$query = mysqli_query($conn, "select * from `products`");
				while ($row = mysqli_fetch_array($query)) {
				?>
					<tr>
						<td><?php echo $row['saxeoba']; ?></td>
						<td><?php echo $row['erteuli']; ?></td>
						<td><?php echo $row['sabazrotve']; ?></td>
						<td><?php echo $row['winatve']; ?></td>
						<td><?php echo $row['mimdinaretve']; ?></td>
						<td><?php echo $row['komentari']; ?></td>
						<td>
							<a href="edit.php?id=<?php echo $row['userid']; ?>">Edit</a>
							<a href="delete.php?id=<?php echo $row['userid']; ?>">Delete</a>
						</td>
					</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>
</body>

</html>