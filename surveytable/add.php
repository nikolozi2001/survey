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
	
?>