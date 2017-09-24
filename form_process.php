<?php
if(isset($_POST['submit']))
{
	$name = array("bestario", "maria", "johndoe", "jonny", "ethan");
	
	$minimum = 5;
	$maximum =10;
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(strlen($username) <5 )
	{
		echo "Username harus memiliki panjang 5 atau lebih";
	}
	
	if (strlen($username) >5 )
	{
		echo "Username tidak boleh lebih panjang dari 10";
	}
	
	if (!in_array($username, $name))
	{
		echo "Maaf, akses ditolak";
	}
	else
	{
		echo "Selamat datang";
	}
}
?>