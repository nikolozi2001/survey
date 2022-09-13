<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `products` where userid='$id'");
	header('location:index.php');
?>

<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `productss` where useridd='$id'");
	header('location:index.php');
?>

<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `productsss` where useriddd='$id'");
	header('location:index.php');
?>

<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `productssss` where useridddd='$id'");
	header('location:index.php');
?>