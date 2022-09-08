<?php
include 'database.php';
?>

<?php

session_start();


if (!isset($_SESSION['isLogin']) || $_SESSION['isLogin'] == false) {

	if (isset($_SESSION['email'])) {
		header("location:./surveytable/index.php");
	} else {
		if (!isset($_SESSION['email'])) {
			header("location:../../login.php");
			exit;
		}
	}
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Products Print</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
    <!-- <link rel="stylesheet" href="print.css"> -->
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>პროდუქტები</h2>
                <table class="table table-bordered print">
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
                        <th colspan="5"></th>
                    </thead>
                    <thead class="table_background">
                        <tr>
                            <th>S.No</th>
                            <th>სახეობა</th>
                            <th>ერთეული</th>
                            <th>საბაზროთვე</th>
                            <th>წინა თვე</th>
                            <th>მიმდინარე თვე</th>
                            <th>კომენტარი</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sn = 1;
                        $products_qry = "SELECT * from products";
                        $products_res = mysqli_query($con, $products_qry);
                        while ($products_data = mysqli_fetch_assoc($products_res)) {
                        ?>
                            <tr>
                                <td><?php echo $sn; ?></td>
                                <td><?php echo $products_data['saxeoba']; ?></td>
                                <td><?php echo $products_data['erteuli']; ?></td>
                                <td><?php echo $products_data['sabazrotve']; ?></td>
                                <td><?php echo $products_data['winatve']; ?></td>
                                <td><?php echo $products_data['mimdinaretve']; ?></td>
                                <td><?php echo $products_data['komentari']; ?></td>
                            </tr>
                        <?php
                            $sn++;
                        }
                        ?>
                    </tbody>
                </table>

                <div class="text-center">
                    <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>