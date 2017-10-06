<?php
	echo "<h1>Add Matakuliah</h1>";
?>

<form action = "proses_matakuliah.php?action=<?php echo $_GET['action']; ?>" method="post">
	Kode Dosen:
	<input type="text" name="kode_matkul" value=""/>
	<br/>
	Nama Dosen:
	<input type="text" name="nama" value=""/>
	<br/>
	<input type="submit" name="submit" />
</form>
