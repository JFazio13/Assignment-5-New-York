<?php  
 $dbhost = "localhost";
 $dbuser = "urcscon3_cwright";
 $dbpass = "EssLikeNeme";
 $dbname = "urcscon3_newyork5";
 $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); 
$sql = "INSERT INTO survey(name, brand, computer) VALUES('".$_POST["name"]."', '".$_POST["brand"]."', '".$_POST["computer"]."')";  
if(mysqli_query($connection, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>