<?php //filename: proses_mhs.php
	include ("db.php");

	if($_GET['action'] == "add")
	{
		//2. Query
		$query ="INSERT INTO mahasiswa (nim, nama, jurusan) VALUES ('$_POST[nim]', '$_POST[nama]', '$_POST[jurusan]')";
	}
	else if($_GET['action'] == "edit")
	{
		//2.Query
		$query = "UPDATE mahasiswa SET nim = '$_POST[nim]', nama = '$_POST[nama]', jurusan = '$_POST[jurusan]' WHERE id=$_POST[id]";
	}
	else if($_GET['action'] == "delete")
	{
		$query = "DELETE FROM mahasiswa WHERE id =$_GET[id]";
	}

	mysqli_query ($koneksi, $query);
	
	//REDIRECT ke template.php
	header ('Location: template.php?page=mahasiswa');
?>