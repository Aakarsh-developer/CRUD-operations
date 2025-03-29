<?php
include "conn.php";
$id = $_GET['id'];

if(isset($_POST['submit'])){
    $n = $_POST['name'];
    $e = $_POST['email'];
    $d = $_POST['date'];
    $r = $_POST['room'];
    $p = $_POST['Contact'];

    $sql = "UPDATE `hotel` SET `name`='$n',`email`='$e',`date`='$d',`room`='$r',`Contact`='$p' WHERE id= $id";

    $result = mysqli_query($conn1, $sql);

    if($result){
        header("location: index.php?msg=Record successfully created");
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/2c820cf81a.js" crossorigin="anonymous"></script>
    <title>Update</title>
</head>
<body>
<?php
// $id = $_GET['id'];
$sql = "SELECT * FROM `hotel` where id= $id LIMIT 1";
$result = mysqli_query($conn1, $sql);
$row = mysqli_fetch_assoc($result);
?>
<h2 class="form-heading">Update user information</h2>
    <section class="form-container">
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Your full name</label><br>
                <input type="text" name="name" onkeydown="return /[a-z A-Z]/i.test(event.key)" <?php echo $row['name'] ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Your Email-id</label><br>
                <input type="email" name="email" value="<?php echo $row['email'] ?>" required>
            </div>
            <div class="form-group">
                <label for="Booking-date">date of booking</label><br>
                <input type="date" name="date" value="<?php echo $row['date'] ?>" required>
            </div>
            <div class="form-group">
                <label for="room">Select Room Type</label><br>
                <select name="room" value="<?php echo $row['room'] ?>" required>
                    <option value="Single Room">Single Room</option>
                    <option value="Family Room">Family Room</option>
                    <option value="Duplex Room">Duplex Room</option>
                    <option value="selected disabled">select...</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Phone">Contact</label><br>
                <input type="tel" name="Contact" pattern="\d{10}" min="10" max="11" required>
            </div>
            <br>
            <button type="submit" name="submit">Update</button>
        </form>
    </section>
</body>
</html> 