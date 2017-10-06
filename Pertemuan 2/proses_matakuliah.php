<?php //filename: proses_mhs.php
	include ("db.php");

	if($_GET['action'] == "add")
	{
		//2. Query
		$query ="INSERT INTO matakuliah (kode_matkul, nama) VALUES ('$_POST[kode_matkul]', '$_POST[nama]')";
	}
	else if($_GET['action'] == "edit")
	{
		//2.Query
		$query = "UPDATE matakuliah SET kode_matkul = '$_POST[kode_matkul]', nama = '$_POST[nama]' WHERE id=$_POST[id]";
	}
	else if($_GET['action'] == "delete")
	{
		$query = "DELETE FROM matakuliah WHERE id = $_GET[id]";
	}

	mysqli_query ($koneksi, $query);
	
	//REDIRECT ke template.php
	header ('Location: template.php?page=matakuliah');
?>