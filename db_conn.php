<?php  

$sname = "127.0.0.1";
$uname = "root";
$password = "11111998";

$db_name = "clientdb";

$conn  = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
