<?php
include ('conn.php');

$saxeobaa=$_POST['saxeobaa'];
$erteulii=$_POST['erteulii'];
$sabazrotvee=$_POST['sabazrotvee'];
$winatvee=$_POST['winatvee'];
$mimdinaretvee=$_POST['mimdinaretvee'];
$komentarii=$_POST['komentarii'];

mysqli_query($conn,"insert into `productss` (saxeobaa,erteulii,sabazrotvee,winatvee,mimdinaretvee,komentarii) values ('$saxeobaa','$erteulii','$sabazrotvee','$winatvee','$mimdinaretvee','$komentarii')");
header('location:index.php');

?>