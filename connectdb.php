<!-- 
	connectdb.php connects to the database built for the assignemnt.
-->

<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "cs3319";
$dbname = "jenjai";

$connection = @mysqli_connect($dbhost,,$dbuser,$dbpass,$dbname)
OR die("database connection failed :" .
		mysqli_connect_error() .
		"(". mysqli_connect_errno().")"
		 );
?>