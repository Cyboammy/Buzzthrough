<?php
$server="localhost";
$username="root";
$password="";
$database="Buzzthrough";
$conn=mysqli_connect($server,$username,$password,$database);
error_reporting(0);
if($conn){
    //  echo "connection ok";
}
else {
    echo "connection failed";
}
?>