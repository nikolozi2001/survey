<?php
	include('conn.php');
	$id=$_GET['id'];
	
	$saxeoba=$_POST['saxeoba'];
	$erteuli=$_POST['erteuli'];
	$sabazrotve=$_POST['sabazrotve'];
	$winatve=$_POST['winatve'];
	$mimdinaretve=$_POST['mimdinaretve'];
	$komentari=$_POST['komentari'];
	
	mysqli_query($conn,"update `products` set saxeoba='$saxeoba', erteuli='$erteuli', sabazrotve='$sabazrotve', winatve='$winatve', mimdinaretve='$mimdinaretve', komentari='$komentari' where userid='$id'");
	header('location:index.php');
?>