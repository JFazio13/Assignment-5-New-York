<?php  
 $dbhost = "localhost";
 $dbuser = "urcscon3_cwright";
 $dbpass = "EssLikeNeme";
 $dbname = "urcscon3_newyork5";
 $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); 
	$id = $_POST["id"];  
	$text = $_POST["text"];  
	$column_name = $_POST["column_name"];  
	$sql = "UPDATE survey SET ".$column_name."='".$text."' WHERE id='".$id."'";  
	if(mysqli_query($connection, $sql))  
	{  
		echo 'Data Updated';  
	}  
 ?>