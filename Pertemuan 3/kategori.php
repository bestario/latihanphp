<?php // filename: kategori.php
//1. Koneksi
include("koneksi.php");

//2. Query 
$query = "SELECT * FROM kategori";
$hasil = mysqli_query($db, $query);
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
	<h2>Kategori</h2>
	<a href="form_tambah_kategori.php">Tambah Kategori</a>
	<table border="1">
		<thead>
			<tr>
				<th>No.</th>
				<th>Keterangan</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$i = 0;
			while($row = mysqli_fetch_assoc($hasil)){
				$i++;
			?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $row['keterangan']; ?></td>
				<td>
					
					<a href="form_edit_kategori.php?id=<?php echo $row['id_kategori']; ?>">Edit</a> | 
					<a href="delete_kategori.php?id=<?php echo $row['id_kategori']; ?>">Delete</a>
				</td>
			</tr>
			<?php
			}
			?>
		</tbody>
	</table>
</div>
</body>
</html>