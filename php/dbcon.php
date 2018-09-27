<?php

$servername = "127.0.0.1:81";
$userhost = "root";
$password = "2211217";
$databasename = "selfselldb";

$db = mysqli_connect($servername,$userhost,$password,$databasename);

if(!$db){
	die("Connection failed: ".mysqli_connect_error());
}
echo "connected successfully";

 ?> 