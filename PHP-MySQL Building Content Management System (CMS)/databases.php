<?php
	//1. Create a database connection
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "belajar_cms";
	$connection = mysqli_connect ($dbhost, $dbuser, $dbpass, $dbname);

	//Test if connection occured
	if (mysqli_connect_errno()) {
		die("Database connection failed: " . mysqli_connect_error() . " ( " . mysqli_connect_errno() . ")"
		);
	}
?>


<?php
	//5. Close database connection
mysqli_close($connection);
?>