<?php //filename: proses_mhs.php
	include ("db.php");

	if($_GET['action'] == "add")
	{
		//2. Query
		$query ="INSERT INTO dosen (kode_dosen, nama) VALUES ('$_POST[kode_dosen]', '$_POST[nama]')";
	}
	else if($_GET['action'] == "edit")
	{
		//2.Query
		$query = "UPDATE dosen SET kode_dosen = '$_POST[kode_dosen]', nama = '$_POST[nama]' WHERE id=$_POST[id]";
	}
	else if($_GET['action'] == "delete")
	{
		$query = "DELETE FROM dosen WHERE id = $_GET[id]";
	}

	mysqli_query ($koneksi, $query);
	
	//REDIRECT ke template.php
	header ('Location: template.php?page=dosen');
?>