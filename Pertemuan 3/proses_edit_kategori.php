<?php 
//1. Koneksi
include ("koneksi.php");

//Data dari Form
$id = $_POST['id'];
$ket = mysqli_real_escape_string($db, $_POST['ket']);

//2. Query 
$query = "UPDATE kategori 
		  SET keterangan = '$ket'
		  WHERE id=$id";
mysqli_query($db, $query);

header('Location: kategori.php');