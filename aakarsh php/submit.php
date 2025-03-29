<?php
include "conn.php";

if(isset($_POST['submit'])){
    $n = $_POST['name'];
    $e = $_POST['email'];
    $d = $_POST['date'];
    $r = $_POST['room'];
    $p = $_POST['Contact'];


    $sql = "INSERT INTO `hotel`(`id`, `name`, `email`, `date`, `room`, `Contact`) VALUES (null,'$n','$e','$d','$r','$p')";

    $result = mysqli_query($conn1, $sql);

    if($result){
        header("location: index.php?");
    }
    else{
        echo "failed:" .mysqli_error($conn1);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New</title>
    <link rel="stylesheet" href="submit.css">
</head>
<body>break
<h2 class="form-heading">Add New</h2>
<section class="form-container">
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Your full name</label><br>
                <input type="text" name="name" onkeydown="return /[a-z A-Z]/i.test(event.key)" required>
            </div>
            <div class="form-group">
                <label for="email">Your Email-id</label><br>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="Booking-date">date of booking</label><br>
                <input type="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="room">Select Room Type</label><br>
                <select name="room" required>
                    <option value="Single Room">Single Room</option>
                    <option value="Family Room">Family Room</option>
                    <option value="Duplex Room">Duplex Room</option>
                    <option value="selected disabled">select...</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Phone">Contact</label><br>
                <input type="tel" name="Contact" pattern="\d{10}" min="10" max="10" required>
            </div>
            <button type="submit" name="submit"><b>Submit</b></button>
        </form>
    </section>
</body>
</html>
