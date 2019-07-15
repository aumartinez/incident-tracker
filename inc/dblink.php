<?php

$dbhost = "localhost";
$dbname = "";
$dbuser = "";
$dbpass = "";

$conx = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$conx){
  echo "Failed to connect to MySQL: ".mysqli_connect_error();
}

?>
