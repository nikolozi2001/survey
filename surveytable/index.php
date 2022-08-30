<!-- loginis shemowmeba -->

<?php
// if (!isset($_SESSION['login_id']))
// 	header('location:../login.php');
// include 'header.php';
// exit();
// session_start();


// if (isset($_SESSION['login_id']) && $_SESSION['login_id']) {
//     header("Location: ../login.php"); 
//     exit();
// }

// if (!$_SESSION['email']){
// 	header('Location: ../login.php');
// 	exit();
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<title>Geostat-Table</title>
</head>

<body>
	<div class="dashboard container">
		<a class="dashboard-btn p-2 flex-fill" href="../index.php" target="" rel="noopener noreferrer">მთავარი გვერდი</a>
	</div>
	<di class="container">
		<h4 class="p-2">ახალი ჩანაწერის დამატება</h4>
	</di>
	<div class="container container-sm">
		<form method="POST" action="add.php" class="form-text-input">
			<label>პროდუქტის სახეობა:</label><input class="p-2 flex-fill" type="text" name="saxeoba">
			<label>ზომის ერთეული:</label><input class="p-2 flex-fill" type="text" name="erteuli">
			<label>საბაზრო თვე:</label><input class="p-2 flex-fill" type="text" name="sabazrotve">
			<label>წინა თვე:</label><input class="p-2 flex-fill" type="text" name="winatve">
			<label>მიმდინარე თვე:</label><input class="p-2 flex-fill" type="text" name="mimdinaretve">
			<label>კომენტარი:</label><input class="p-2 flex-fill" type="text" name="komentari">
			<input class="p-2 flex-fill" type="submit" name="add">
		</form>
	</div>
	<br>
	<div class="container">
		<table border="1" class="table-responsive">
			<thead class="table_background">
				<th colspan="1">#</th>
				<th colspan="1">CPA კოდი</th>
				<th colspan="5">პროდუქტის დასახელება</th>
			</thead>
			<thead class="table_background">
				<th colspan="1">1</th>
				<th colspan="1"></th>
				<th colspan="5"></th>
			</thead>
			<thead class="table_background">
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
					<tr class="table-active">
						<td><?php echo $row['saxeoba']; ?></td>
						<td><?php echo $row['erteuli']; ?></td>
						<td><?php echo $row['sabazrotve']; ?></td>
						<td><?php echo $row['winatve']; ?></td>
						<td><?php echo $row['mimdinaretve']; ?></td>
						<td><?php echo $row['komentari']; ?></td>
						<td class="col-sm-2 edt-del" style="width: 11.4% !important;">
							<a class="edit-btn" href="edit.php?id=<?php echo $row['userid']; ?>">Edit</a>
							<a class="delete-btn" href="delete.php?id=<?php echo $row['userid']; ?>">Delete</a>
						</td>
					</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>
	<script src="js/script.js"></script>
	<script src="js/bootstrap.js"></script>
</body>

</html>