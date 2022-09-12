<?php

session_start();


if (!isset($_SESSION['isLogin']) || $_SESSION['isLogin'] == false) {

	if (isset($_SESSION['email'])) {
		header("location:./surveytable/index.php");
	} else {
		if (!isset($_SESSION['email'])) {
			header("location:../login.php");
			exit;
		}
	}
}

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
	<header class="container-fluid">
		<div class="dashboard container-fluid">
			<!-- <a class="dashboard-btn p-2 flex-fill" href="../index.php" target="" rel="noopener noreferrer">მთავარი გვერდი</a> -->
		</div>
	</header>
	<div class="header">
		<a class="dashboard-btn p-2 flex-fill" href="../index.php" target="" rel="noopener noreferrer">მთავარი გვერდი</a>
		<!-- <a href="#default" class="logo">CompanyLogo</a> -->
		<div class="header-right">
			<a class="active" href="#home"><button id="my-btn">მეორე თეიბლის გამოჩენა</button></a>
			<a href="#about"><button id="my-btn">მესამე თეიბლის გამოჩენა</button></a>
			<a href="#about"><button id="my-btn">მეოთხე თეიბლის გამოჩენა</button></a>
		</div>
	</div>
	<div class="first-table container-fluid">
		<div class="container-fluid">
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
					<th colspan="2"></th>
					<th colspan="3">ადგილობრივი ბაზრისთვის წარმოებული პროდუქციის ფასი(ლარი)</th>
					<th colspan="2"></th>
				</thead>
				<thead class="table_background">
					<th>პროდუქტის სახეობა</th>
					<th>ზომის ერთეული</th>
					<th>საბაზრო თვე</th>
					<th>წინა თვე</th>
					<th>მიმდინარე თვე</th>
					<th>კომენტარი</th>
					<th><a class="btn btn-light" target="_blank" href="print_pdf/products_data_print.php">Print</a></th>
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
					<form method="POST" action="add.php" class="form-text-input">
						<th><input class="p-2 flex-fill" type="text" name="saxeoba" placeholder="სახეობა"></th>
						<th><input class="p-2 flex-fill" type="text" name="erteuli" placeholder="ერთეული"></th>
						<th><input class="p-2 flex-fill" type="text" name="sabazrotve" placeholder="საბაზრო თვე"></th>
						<th><input class="p-2 flex-fill" type="text" name="winatve" placeholder="წინა თვე"></th>
						<th><input class="p-2 flex-fill" type="text" name="mimdinaretve" placeholder="მიმდინარე თვე"></th>
						<th><input class="p-2 flex-fill" type="text" name="komentari" placeholder="კომენტარი"></th>
						<th><input class="p-2 flex-fill" type="submit" name="add"></th>
					</form>
				</tbody>
			</table>
		</div>
	</div>
	<div class="second-table container-fluid" id="table-second">
		<div class="container-fluid">
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
					<th colspan="2"></th>
					<th colspan="3">ადგილობრივი ბაზრისთვის წარმოებული პროდუქციის ფასი(ლარი)</th>
					<th colspan="2"></th>
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
					$query = mysqli_query($conn, "select * from `productss` limit 4");
					while ($row = mysqli_fetch_array($query)) {
					?>
						<tr class="table-active">
							<td><?php echo $row['saxeobaa']; ?></td>
							<td><?php echo $row['erteulii']; ?></td>
							<td><?php echo $row['sabazrotvee']; ?></td>
							<td><?php echo $row['winatvee']; ?></td>
							<td><?php echo $row['mimdinaretvee']; ?></td>
							<td><?php echo $row['komentarii']; ?></td>
							<td class="col-sm-2 edt-del" style="width: 11.4% !important;">
								<a class="edit-btn" href="editt.php?id=<?php echo $row['useridd']; ?>">Edit</a>
								<a class="delete-btn" href="delete.php?id=<?php echo $row['useridd']; ?>">Delete</a>
							</td>
						</tr>
					<?php
					}
					?>
					<form method="POST" action="add.php" class="form-text-input">
						<th><input class="p-2 flex-fill" type="text" name="saxeobaa" placeholder="სახეობა"></th>
						<th><input class="p-2 flex-fill" type="text" name="erteulii" placeholder="ერთეული"></th>
						<th><input class="p-2 flex-fill" type="text" name="sabazrotvee" placeholder="საბაზრო თვე"></th>
						<th><input class="p-2 flex-fill" type="text" name="winatvee" placeholder="წინა თვე"></th>
						<th><input class="p-2 flex-fill" type="text" name="mimdinaretvee" placeholder="მიმდინარე თვე"></th>
						<th><input class="p-2 flex-fill" type="text" name="komentarii" placeholder="კომენტარი"></th>
						<th><input class="p-2 flex-fill" type="submit" name="addd"></th>
					</form>
				</tbody>
			</table>
		</div>
	</div>
	<!-- <div class="container input-form"></div> -->
	<script src="js/script.js"></script>
	<script src="js/bootstrap.js"></script>
</body>

</html>