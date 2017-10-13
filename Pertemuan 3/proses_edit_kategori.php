<?php 
//1. Koneksi
include ("koneksi.php");

//Data dari Form
$id = $_POST['id'];
$ket = mysqli_real_escape_string($db, $_POST['ket']);

//2. Query 
$query = "UPDATE kategori 
		  SET keterangan = '$ket'
		  WHERE id_kategori=$id";
$hasil=mysqli_query($db, $query);
        if($hasil === FALSE) { 
        die(mysqli_error($db)); // better error handling
    }
header('Location: kategori.php');