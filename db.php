<?php

$DB_Name= "SOS";
$DB_Server= "localhost";
$DB_Username= "root";
$DB_Password= "";
//127.0.0.1
$conn=mysqli_connect($DB_Server, $DB_Username, $DB_Password, $DB_Name);

if(!$conn){
  echo "Error connecting to the database";
}

?>