<?php

session_start();


if (!isset($_SESSION['isLogin']) || $_SESSION['isLogin'] == false) {

    if (isset($_SESSION['email'])) {
        header("location:./kitxvari/index.php");
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
    <title>Geostat-Kitxvari</title>
</head>

<body>
    <header class="container-fluid">
        <div class="dashboard container-fluid">
            <a class="dashboard-btn p-2 flex-fill" href="../index.php" target="" rel="noopener noreferrer">მთავარი გვერდი</a>
        </div>
    </header>
    <div class="first-table container-fluid">
        <br>
        <!-- <div class="container-fluid right">
            <a class="btn btn-primary" target="_blank" href="print_pdf/sawarmo_data_print.php">Print</a>
        </div> -->
        <div class="container-fluid">
            <table border="1" class="table-responsive">

                <thead class="table_background">
                    <th>საიდენტიფიკაციო კოდი
                    <th>საწარმოს დასახელება
                    <th>იურიდიული მისამართი
                    <th>ფაქტიური მისამართი
                    <th>რეგიონი
                    <th>რაიონი
                    <th>საკუთრების ფორმა
                    <th>ორგანიზაციულ-სამართლებრივი ფორმა
                    <th>ეკონომიკური საქმიანობის ძირითადი სახე
                    <th>საწარმოს ხელმძღვანელის სახელი და გვარი
                    <th>ტელეფონი
                    <th>
                </thead>
                <tbody>
                    <?php
                    include('conn.php');
                    $query = mysqli_query($conn, "select * from `sawarmo`");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <tr class="table-active">
                            <td><?php echo $row['kodi']; ?></td>
                            <td><?php echo $row['dasaxeleba']; ?></td>
                            <td><?php echo $row['imisamarti']; ?></td>
                            <td><?php echo $row['fmisamarti']; ?></td>
                            <td><?php echo $row['regioni']; ?></td>
                            <td><?php echo $row['raioni']; ?></td>
                            <td><?php echo $row['sforma']; ?></td>
                            <td><?php echo $row['osforma']; ?></td>
                            <td><?php echo $row['saxe']; ?></td>
                            <td><?php echo $row['gvari']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td class="col-sm-2 edt-del" style="width: 3% !important;">
                                <a class="edit-btn" href="edit.php?id=<?php echo $row['userid']; ?>">Edit</a>

                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                    <form method="POST" action="add.php" class="form-text-input">

                        <th><input class="p-2 flex-fill" type="text" name="kodi" placeholder="საიდენტიფიკაციო კოდი"></th>
                        <th><input class="p-2 flex-fill" type="text" name="dasaxeleba" placeholder="საწარმოს დასახელება"></th>
                        <th><input class="p-2 flex-fill" type="text" name="imisamarti" placeholder="იურიდიული მისამართი"></th>
                        <th><input class="p-2 flex-fill" type="text" name="fmisamarti" placeholder="ფაქტიური მისამართი"></th>
                        <th><input class="p-2 flex-fill" type="text" name="regioni" placeholder="რეგიონი"></th>
                        <th><input class="p-2 flex-fill" type="text" name="raioni" placeholder="რაიონი"></th>
                        <th><input class="p-2 flex-fill" type="text" name="sforma" placeholder="საკუთრების ფორმა"></th>
                        <th><input class="p-2 flex-fill" type="text" name="osforma" placeholder="ორგანიზაციულ-სამართლებრივი ფორმა"></th>
                        <th><input class="p-2 flex-fill" type="text" name="saxe" placeholder="ეკონომიკური საქმიანობის ძირითადი სახე"></th>
                        <th><input class="p-2 flex-fill" type="text" name="gvari" placeholder="საწარმოს ხელმძღვანელის სახელი და გვარი"></th>
                        <th><input class="p-2 flex-fill" type="text" name="phone" placeholder="ტელეფონი"></th>
                        <th><input class="p-2 flex-fill" type="submit" name="add"></th>
                    </form>
                </tbody>
            </table>
        </div>

        <script src="js/script.js"></script>
        <script src="js/bootstrap.js"></script>
</body>

</html>