<?php
include ('conn.php');

$saxeobaaa=$_POST['saxeobaaa'];
$erteuliii=$_POST['erteuliii'];
$sabazrotveee=$_POST['sabazrotveee'];
$winatveee=$_POST['winatveee'];
$mimdinaretveee=$_POST['mimdinaretveee'];
$komentariii=$_POST['komentariii'];

mysqli_query($conn,"insert into `productsss` (saxeobaaa,erteuliii,sabazrotveee,winatveee,mimdinaretveee,komentariii) values ('$saxeobaaa','$erteuliii','$sabazrotveee','$winatveee','$mimdinaretveee','$komentariii')");
header('location:index.php');

?>