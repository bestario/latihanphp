<?php 
//1. Koneksi
include ("koneksi.php");

//Data dari Form
$id = $_POST['id'];
$nm = mysqli_escape_string($db,$_POST['nama']);
$ph = mysqli_escape_string($db,$_POST['phone']);
$em = mysqli_escape_string($db,$_POST['email']);
$kategori =  mysqli_real_escape_string($db, $_POST['kategori']);
//2. Query 
$query = "UPDATE kontak 
		  SET nama = '$nm',
			  phone = '$ph',
		   	  email = '$em',
		      kategori = '$kategori' WHERE id_kontak=$id";
mysqli_query($db, $query);

header('Location: index.php');