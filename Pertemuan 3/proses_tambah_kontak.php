<?php
include("koneksi.php");
$nm = mysqli_escape_string($db,$_POST['nama']);
$ph = mysqli_escape_string($db,$_POST['phone']);
$em = mysqli_escape_string($db,$_POST['email']);

$query = "INSERT INTO kontak (nama,hp,email,kategori) VALUES ('$nm','$ph','$em','".$_POST['kategori']."')";
mysqli_query($db,$query);
header('Location: index.php');