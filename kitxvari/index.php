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
    <title>Geostat-kitxvari</title>
</head>

<body>
    <header>
        <div class="dashboard container-fluid">
            <a class="dashboard-btn p-2 flex-fill" href="../index.php" target="" rel="noopener noreferrer">მთავარი გვერდი</a>
        </div>
    </header>
    <div class="container-fluid input-form">
        <form method="POST" action="add.php" class="form-text-input">
            
            <label>საიდენტიფიკაცო კოდი</label><input class="p-2 flex-fill" type="text" name="kodi" placeholder="საიდენტიფიკაციო კოდი">
            <label>საწარმოს დასახელება</label><input class="p-2 flex-fill" type="text" name="dasaxeleba" placeholder="საწარმოს დასახელება">
            <label>იურიდიული მისამართი</label><input class="p-2 flex-fill" type="text" name="imisamarti" placeholder="იურიდიული მისამართი">
            <label>ფაქტიური მისამართი</label><input class="p-2 flex-fill" type="text" name="fmisamarti" placeholder="ფაქტიური მისამართი">
            <label>რეგიონი</label><input class="p-2 flex-fill" type="text" name="regioni" placeholder="რეგიონი">
            <label>რაიონი</label><input class="p-2 flex-fill" type="text" name="raioni" placeholder="რაიონი">
            <label>საკუთრების ფორმა</label><input class="p-2 flex-fill" type="text" name="sforma" placeholder="საკუთრების ფორმა">
            <label>ორგანიზაციულ-სამართლებრივი ფორმა</label><input class="p-2 flex-fill" type="text" name="osforma" placeholder="ორგანიზაციულ-სამართლებრივი ფორმა">
            <label>ეკონომიკური საქმიანობის ძირითადი სახე</label><input class="p-2 flex-fill" type="text" name="saxe" placeholder="ეკონომიკური საქმიანობის ძირითადი სახე">
            <label>საწარმოს ხელმძღვანელის სახელი და გვარი</label><input class="p-2 flex-fill" type="text" name="gvari" placeholder="საწარმოს ხელმძღვანელის სახელი და გვარი">
            <label>ტელეფონი</label><input class="p-2 flex-fill" type="text" name="phone" placeholder="ტელეფონი">
            <input class="p-2 flex-fill" type="submit" name="add">
        </form>
    </div>
    <div class="first-table">
        <br>
        <div class="container-fluid right">
            <a class="btn btn-primary" target="_blank" href="print_pdf/products_data_print.php">Print</a>
        </div>
        <div class="container-fluid">
            <table border="1" class="table-responsive">

                <tbody>
                    <?php
                    include('conn.php');
                    $query = mysqli_query($conn, "select * from `products` limit 4");
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