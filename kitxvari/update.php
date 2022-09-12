<?php
	include('conn.php');
	$id=$_GET['id'];
	
	$kodi=$_POST['kodi'];
	$dasaxeleba=$_POST['dasaxeleba'];
	$imisamarti=$_POST['imisamarti'];
	$fmisamarti=$_POST['fmisamarti'];
	$regioni=$_POST['regioni'];
	$raioni=$_POST['raioni'];
	$sforma=$_POST['sforma'];
	$osforma=$_POST['osforma'];
	$saxe=$_POST['saxe'];
	$gvari=$_POST['gvari'];
	$phone=$_POST['phone'];
	
	mysqli_query($conn,"update `sawarmo` set kodi='$kodi', dasaxeleba='$dasaxeleba', imisamarti='$imisamarti', fmisamarti='$fmisamarti', regioni='$regioni', raioni='$raioni', sforma='$sforma', osforma='$osforma', saxe='$saxe', gvari='$gvari', phone='$phone'  where userid='$id'");
	header('location:index.php');
?>