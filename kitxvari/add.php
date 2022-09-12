<?php
	include('conn.php');
	
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
		
	mysqli_query($conn,"insert into `sawarmo` (kodi,dasaxeleba,imisamarti,fmisamarti,regioni,raioni,sforma,osforma,saxe,gvari,phone) values ('$kodi','$dasaxeleba','$imisamarti','$fmisamarti','$regioni','$raioni','$sforma','$osforma','$saxe','$gvari','$phone')");
	header('location:index.php');
	
?>