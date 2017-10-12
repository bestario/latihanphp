<?php 

//1. Koneksi 
include("koneksi.php");

//2. Query 
//Data Dari Form
$ket = mysqli_real_escape_string($db, $_POST['ket']);
$query = "INSERT INTO kategori (keterangan) VALUES ('$ket')";

mysqli_query($db, $query);

header("Location: kategori.php");