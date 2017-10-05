<?php
	include("db.php");

	$query = "SELECT * FROM mahasiswa";
	$hasil = mysqli_query($koneksi, $query);
?>

<h1>Data Mahasiswa</h1>
<a href="template.php?page=formmahasiswa&action=add">Tambah Data</a>
<table>
	<thead>
		<tr>
			<th>No.</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
			while($row = mysqli_fetch_assoc($hasil)){
		?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['nim']; ?></td>
			<td><?php echo $row['nama']; ?></td>
			<td><?php echo $row['jurusan']; ?></td>
			<td>
				<a href="template.php?page=formmahasiswa&id= <?php echo $row['id'];?> &action=edit">Edit</a>
				<a href="proses_mahasiswa.php?action=delete&id= <?php echo $row['id'];?> ">Delete</a>
			</td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>