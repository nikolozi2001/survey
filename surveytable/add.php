<?php
	include('conn.php');
	
	$saxeoba=$_POST['saxeoba'];
	$erteuli=$_POST['erteuli'];
	$sabazrotve=$_POST['sabazrotve'];
	$winatve=$_POST['winatve'];
	$mimdinaretve=$_POST['mimdinaretve'];
	$komentari=$_POST['komentari'];
		
	mysqli_query($conn,"insert into `products` (saxeoba,erteuli,sabazrotve,winatve,mimdinaretve,komentari) values ('$saxeoba','$erteuli','$sabazrotve','$winatve','$mimdinaretve','$komentari')");
	header('location:index.php');
	

	$saxeobaa=$_POST['saxeobaa'];
	$erteulii=$_POST['erteulii'];
	$sabazrotvee=$_POST['sabazrotvee'];
	$winatvee=$_POST['winatvee'];
	$mimdinaretvee=$_POST['mimdinaretvee'];
	$komentarii=$_POST['komentarii'];

	mysqli_query($conn,"insert into `productss` (saxeobaa,erteulii,sabazrotvee,winatvee,mimdinaretvee,komentarii) values ('$saxeobaa','$erteulii','$sabazrotvee','$winatvee','$mimdinaretvee','$komentarii')");
	header('location:index.php');
?>