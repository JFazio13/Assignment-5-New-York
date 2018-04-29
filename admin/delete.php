<?php  
	 $dbhost = "localhost";
	 $dbuser = "urcscon3_cwright";
	 $dbpass = "EssLikeNeme";
	 $dbname = "urcscon3_newyork5";
	 $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); 
	$sql = "DELETE FROM survey WHERE id = '".$_POST["id"]."'";  
	if(mysqli_query($connection, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>