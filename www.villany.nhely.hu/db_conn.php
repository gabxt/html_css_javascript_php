<?php

$sname= "localhost"; //kiszolgáló
$unmae= ""; // USER NAME
$password = "";

$db_name = "";  //adatbázis

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
