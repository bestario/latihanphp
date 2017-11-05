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
	//2. Perform database query
	$query = "SELECT * ";
	$query .= "FROM subjects ";
	$query .= "WHERE visible = 1 ";
	$query .= "ORDER by position ASC";
	$result = mysqli_query($connection, $query);
	if (!$result)
	{
		die("Database query failed.");
	}
?>

<html>
	<head>
	<title> Database </title>
	</head>
	<body>
		<ul>
		<?php
			//3. Use returned data (if any)
			while($subject = mysqli_fetch_assoc($result)) {
				// output data from each row
		?>
			<li>
				<?php 
					echo $subject["menu_name"]; 
				?>
			</li>
		<?php
			}
		?>
		</ul>
		<?php
			//4. Release returned data
			mysqli_free_result($result);
		?>
	</body>
</html>

<?php
	//5. Close database connection
mysqli_close($connection);
?>