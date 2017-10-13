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
			  hp = '$ph',
		   	  email = '$em',
		      id_kategori = '$kategori' WHERE id_kontak=$id";
$hasil=mysqli_query($db, $query);
        if($hasil === FALSE) { 
        die(mysqli_error($db)); // better error handling
    }
header('Location: index.php');