<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "planetwise";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
?>