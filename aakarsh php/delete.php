<?php
include "conn.php";
$id = $_GET['id'];
$sql= "DELETE FROM `hotel` WHERE id=$id";
$result = mysqli_query($conn1,$sql);
if($result){
    header("Location: index.php?msg=Record deleted successfull");
}
else{
    echo "Failed: " .mysqli_error($conn1);
}
?>