<?php

$sname= "localhost"; //kiszolgáló
$unmae= "gabxway"; // USER NAME
$password = "hall2000";

$db_name = "gabxway";  //adatbázis

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}