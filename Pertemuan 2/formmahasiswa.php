<?php
	if ($_GET['action'] == "edit")
	{
		echo "<h1> Edit Mahasiswa </h1>";
		include ("db.php");
		$query = "SELECT * FROM mahasiswa WHERE id=$_GET[id]";
		$hasil = mysqli_query ($koneksi, $query);
		$row = mysqli_fetch_assoc($hasil);
	}
	else
	{
		echo "<h1>Add Mahasiswa</h1>";
		$row ['nim'] = "";
		$row ['nama'] = "";
		$row ['jurusan'] = "";
		$row ['id'] = "";
	}
?>

<form action = "proses_mahasiswa.php?action=<?php echo $_GET['action']; ?>" method="post">
	NIM:
	<input type="text" name="nim" value="<?php echo $row['nim']; ?>"/>
	<br/>
	Nama:
	<input type="text" name="nama" value="<?php echo $row['nama']; ?>"/>
	<br/>
	Jurusan:
	<input type="text" name="jurusan" value="<?php echo $row['jurusan']; ?>"/>
	<br/>
	<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
	<input type="submit" name="submit" />
</form>
