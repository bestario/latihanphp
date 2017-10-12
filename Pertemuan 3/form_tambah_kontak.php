<?php // filename: form_tambah_kontak.php
include ("koneksi.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Phone Book</title>
</head>
<body>
<h1>Phone Book</h1>
<div id="menu">
	<ul>
		<li><a href="index.php">Kontak</a></li>
		<li><a href="kategori.php">Kategori</a></li>
	</ul>
</div>
<div id="konten">
	<h2>Tambah Kontak</h2>
	<form action="proses_tambah_kontak.php" method="post">
		Nama:
		<input type="text" name="nama" />
		<br />
		Phone:
		<input type="text" name="phone" />
		<br />
		Email:
		<input type="text" name="email" />
		<br />
		Kategori:
		<?php
  		$sql = "SELECT * FROM kategori";
   		$result = mysqli_query($db, $sql);
		echo "<select name='kategori'>";
   		while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['id'] ."'>" . $row['keterangan'] ."</option>";
        }
        echo "</select>";
        ?>
		<br />
		<input type="submit" value="Simpan" />
	</form>
</div>
</body>
</html>