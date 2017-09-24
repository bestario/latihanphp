<?php
include "db.php";

function showAllUserId()
{
	global $koneksi;
	$query = "SELECT * FROM users";
	$result = mysqli_query($koneksi,$query);

	if(!$result)
	{
		die("Query Failed" . mysqli_error($koneksi);
	}

	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row['$id'];
		echo "<option value = '$id'>$id</option>";
	}
}

?>