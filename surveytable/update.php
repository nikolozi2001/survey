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

<?php
	include('conn.php');
	$id=$_GET['id'];
	
	$saxeobaa=$_POST['saxeobaa'];
	$erteulii=$_POST['erteulii'];
	$sabazrotvee=$_POST['sabazrotvee'];
	$winatvee=$_POST['winatvee'];
	$mimdinaretvee=$_POST['mimdinaretvee'];
	$komentarii=$_POST['komentarii'];
	
	mysqli_query($conn,"update `productss` set saxeobaa='$saxeobaa', erteulii='$erteulii', sabazrotvee='$sabazrotvee', winatvee='$winatvee', mimdinaretvee='$mimdinaretvee', komentarii='$komentarii' where useridd='$id'");
	header('location:index.php');
?>

<?php
	include('conn.php');
	$id=$_GET['id'];
	
	$saxeobaaa=$_POST['saxeobaaa'];
	$erteuliii=$_POST['erteuliii'];
	$sabazrotveee=$_POST['sabazrotveee'];
	$winatveee=$_POST['winatveee'];
	$mimdinaretveee=$_POST['mimdinaretveee'];
	$komentariii=$_POST['komentariii'];
	
	mysqli_query($conn,"update `productsss` set saxeobaaa='$saxeobaaa', erteuliii='$erteuliii', sabazrotveee='$sabazrotveee', winatveee='$winatveee', mimdinaretveee='$mimdinaretveee', komentariii='$komentariii' where useriddd='$id'");
	header('location:index.php');
?>

<?php
	include('conn.php');
	$id=$_GET['id'];
	
	$saxeobaaaa=$_POST['saxeobaaaa'];
	$erteuliiii=$_POST['erteuliiii'];
	$sabazrotveeee=$_POST['sabazrotveeee'];
	$winatveeee=$_POST['winatveeee'];
	$mimdinaretveeee=$_POST['mimdinaretveeee'];
	$komentariiii=$_POST['komentariiii'];
	
	mysqli_query($conn,"update `productssss` set saxeobaaaa='$saxeobaaaa', erteuliiii='$erteuliiii', sabazrotveeee='$sabazrotveeee', winatveeee='$winatveeee', mimdinaretveeee='$mimdinaretveeee', komentariiii='$komentariiii' where useridddd='$id'");
	header('location:index.php');
?>