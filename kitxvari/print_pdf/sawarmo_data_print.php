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
    <title>Sawarmo Print</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
    <!-- <link rel="stylesheet" href="print.css"> -->
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4 style="text-align: center;">ადგილობრივი ბაზრისთვის წარმოებული პროდუქციის მწარმოებელთა ფასების სტატისტიკური გამოკვლევა</h4>
                <table class="table table-bordered print">
                    <tbody>
                        <?php
                        $sn = 1;
                        $sawarmo_qry = "SELECT * from sawarmo";
                        $sawarmo_res = mysqli_query($con, $sawarmo_qry);
                        while ($sawarmo_data = mysqli_fetch_assoc($sawarmo_res)) {
                        ?>
                            <tr>
                                <td><?php echo $sn; ?></td>
                                <td><?php echo $sawarmo_data['kodi']; ?></td>
                                <td><?php echo $sawarmo_data['dasaxeleba']; ?></td>
                                <td><?php echo $sawarmo_data['imisamarti']; ?></td>
                                <td><?php echo $sawarmo_data['fmisamarti']; ?></td>
                                <td><?php echo $sawarmo_data['regioni']; ?></td>
                                <td><?php echo $sawarmo_data['raioni']; ?></td>
                                <td><?php echo $sawarmo_data['sforma']; ?></td>
                                <td><?php echo $sawarmo_data['osforma']; ?></td>
                                <td><?php echo $sawarmo_data['saxe']; ?></td>
                                <td><?php echo $sawarmo_data['gvari']; ?></td>
                                <td><?php echo $sawarmo_data['phone']; ?></td>
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