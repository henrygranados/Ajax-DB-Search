<?php 

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = 'root';
$mysql_db = 'Clientes';

// mysqli_connect -- Performs queries against the database:
$con = mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
// Checking connection
if (mysqli_connect_errno())
{
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
