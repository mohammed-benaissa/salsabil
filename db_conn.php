<?php  

$sname = $_ENV['MYSQL_HOST'];
$uname = "root";
$password = $_ENV['MYSQL_ROOT_PASSWORD'];

$db_name = $_ENV['MYSQL_DATABASE'];

$conn  = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
