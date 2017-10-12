<?php // filename: form_edit_kontak.php
include("koneksi.php");

$id = $_GET['id'];

//2. Query 
$query = "SELECT * FROM kontak
		  WHERE id_kontak=$id";
$hasil = mysqli_query($db, $query);

//3. Tampil 
$row = mysqli_fetch_assoc($hasil);
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
	<h2>Edit Kontak</h2>
	<form action="proses_edit_kontak.php" method="post">
	
		Nama:
		<input type="text" value="<?php echo $row['nama'] ?>" name="nama" />
		<br />
		Phone:
		<input type="text" value="<?php echo $row['hp'] ?>" name="phone" />
		<br />
		Email:
		<input type="text" value="<?php echo $row['email'] ?>" name="Email" />
		<br />
		Kategori:
		<?php
  		$sql = "SELECT * FROM kategori";
   		$result = mysqli_query($db, $sql);
		echo "<select name='kategori'>";
   		while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['id_kategori'] ."'>" . $row['keterangan'] ."</option>";
        }
        echo "</select>";
        ?>
		<br />
		<input type="hidden" name="id" value="<?php echo $row['id'] ?>" />
		<input type="submit" value="Simpan" />
	</form>
</div>
</body>
</html>