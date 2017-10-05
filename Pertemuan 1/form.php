<?php
if (isset($_POST['submit']))
{
	$name = array("bestario", "maria", "johndoe", "jonny", "ethan");

	$maximum = 10;
	$minimum = 5;

	$username = $_POST['username'];
	$password = $_POST['password'];

	if(strlen($username) <$minimum )
	{
		echo "Username harus memiliki panjang 5 atau lebih";
	}

	if(strlen($username) >$maximum )
	{
		echo "Username tidak boleh lebih panjang dari 10";
	}

	if (!in_array($username, $name))
	{
		echo "Maaf, akses ditolak";
	}
	else
	{
		echo "Selamat datang";
	}
}

?>

<html>
<head>
	<title>PHP Forms</title>
</head>
<body>

<form action = "form.php" method = "post">
	<input type = "text" name = "username" placeholder= "Enter Username"/>
	<input type = "password"  name= "password" placeholder="Enter Password"/>
	<br/>
	<input type = "submit" name="submit"/>
</form>

</body>
</html>