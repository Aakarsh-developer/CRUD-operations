<?php
$servername="localhost";
$username="root";
$password="";
$dbname="tutorial";

$conn1 = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn1){
    die("connection falied" . mysqli_connect_error());
}
//echo "Connected successfully";