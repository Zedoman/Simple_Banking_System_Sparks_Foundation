

<?php

$dbhost = "localhost:4306";
$dbuser = "root";
$dbpass = "";
$dbname = "sparks_bank";

if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
