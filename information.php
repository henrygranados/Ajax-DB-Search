<?php

require "connection.php";

$name =$_GET["name"];

if(!empty($name)){

$client = mysqli_real_escape_string($con, $name); // escapes special characters in a string for use in an SQL statement
$result = mysqli_query($con,"SELECT * FROM users WHERE name LIKE '%".$client."%' ");

 while($row = mysqli_fetch_assoc($result))
 {
	echo '<br /> Nombre: ' .$row['name'];
 }
}
?>