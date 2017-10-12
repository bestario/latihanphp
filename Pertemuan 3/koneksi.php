<?php

//1. Koneksi 
$db = mysqli_connect("localhost", "root", "", "kalbis_web");

if(mysqli_connect_errno()){
	//jika gagal tampilkan pesan error
	die(mysqli_connect_error());
}
