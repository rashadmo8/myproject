<?php

$host="localhost";
$dp_name="net_db";
$username="root";
$pass="";
try{

    $conn=new PDO("mysql:host=$host;dbname=$dp_name",$username,$pass);
 
}
catch (PDOException $e ){
    echo "ERROR".$e->getMessage();
  
}






?>