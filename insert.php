<?php
	// 1. Create a database connection
	$dbhost = "localhost";
	$dbuser = "urcscon3_cwright";
	$dbpass = "EssLikeNeme";
	$dbname = "urcscon3_newyork5";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	$name = Trim(stripslashes($_POST['name']));
	$brand = Trim(stripslashes($_POST['brand']));
	$computer = Trim(stripslashes($_POST['computer']));

	// 2. Perform database query
	$query  = "INSERT INTO survey (name, brand, computer) VALUES ('$name', '$brand', '$computer')";
	$result = mysqli_query($connection, $query);

	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);

	header ("location: survey.php?&submit=$result");
?>