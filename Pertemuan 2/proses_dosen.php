<?php //filename: proses_mhs.php
	include ("db.php");

	if($_GET['action'] == "add")
	{
		//2. Query
		$query ="INSERT INTO dosen (kode_dosen, nama) VALUES ('$_POST[kode_dosen]', '$_POST[nama]')";
	}

	mysqli_query ($koneksi, $query);
	
	//REDIRECT ke template.php
	header ('Location: template.php?page=dosen');
?>