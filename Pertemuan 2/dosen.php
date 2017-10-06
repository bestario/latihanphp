<?php
	include("db.php");

	$query = "SELECT * FROM dosen";
	$hasil = mysqli_query($koneksi, $query);
?>

<h1>Data Dosen</h1>
<a href="template.php?page=formdosen&action=add">Tambah Data</a>
<table>
	<thead>
		<tr>
			<th>No.</th>
			<th>Kode Dosen</th>
			<th>Nama</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
			while($row = mysqli_fetch_assoc($hasil)){
		?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['kode_dosen']; ?></td>
			<td><?php echo $row['nama']; ?></td>
			<td>
				<a href="template.php?page=formdosen&id= <?php echo $row['id'];?> &action=edit">Edit</a>
				<a href="proses_dosen.php?action=delete&id= <?php echo $row['id'];?> ">Delete</a>
			</td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>