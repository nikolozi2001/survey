<?php
include ('conn.php');

$saxeobaaaa=$_POST['saxeobaaaa'];
$erteuliiii=$_POST['erteuliiii'];
$sabazrotveeee=$_POST['sabazrotveeee'];
$winatveeee=$_POST['winatveeee'];
$mimdinaretveeee=$_POST['mimdinaretveeee'];
$komentariiii=$_POST['komentariiii'];

mysqli_query($conn,"insert into `productssss` (saxeobaaaa,erteuliiii,sabazrotveeee,winatveeee,mimdinaretveeee,komentariiii) values ('$saxeobaaaa','$erteuliiii','$sabazrotveeee','$winatveeee','$mimdinaretveeee','$komentariiii')");
header('location:index.php');

?>