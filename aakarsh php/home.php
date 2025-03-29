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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/2c820cf81a.js" crossorigin="anonymous"></script>
    <title>hotel</title>
</head>
<body>
<section class="hero-section">
    <div class="hero-text">
     <h1>Welcome in  paradise Hotel</h1>
     <p style="font-size: 25px;">we provide rooms at a very good price along with amenities to make ypur living experience awesome</p>
    <button class="book-button">
        <a href="http://www.hotelparadise.co.in/" style="text-decoration: none"><b>About</b></a>
    </button>
 </div>
 </section>
  <h1 class="about-heading">About us</h1>
  <br>
 <section class="about-section">
     <div class="about-us">
         <p>A hotel is an establishment that provides paid lodging on a short-term basis. Facilities provided inside a hotel room may range from a modest-quality mattress in a small room to large suites with bigger, higher-quality beds, a dresser, a refrigerator, and other kitchen facilities, upholstered chairs, a flat-screen television, and en-suite bathrooms.</p>        
     <br>
     <p>
         Small, lower-priced hotels may offer only the most basic guest services and facilities. Larger, higher-priced hotels may provide additional guest facilities such as a swimming pool, a business center with computers, printers, and other office equipment, childcare, conference and event facilities, tennis or basketball courts,
     </p>
     <button class="know-more">
        <a href="https://en.wikipedia.org/wiki/Paradise_Hotel" style="text-decoration: none"><b>Know-more</b></a></button>
     </div>
     <div class="amenities">
         <h1>Aminities</h1>
         <ul>
             <li><i class="fa-solid fa-wifi"></i>  high speed internet</li>
             <li><i class="fa-solid fa-mug-saucer"></i>   complementary breakfast</li>
             <li><i class="fa-solid fa-person-swimming"></i> swimming pool</li>
             <li><i class="fa-solid fa-dumbbell"></i> Gym</li>
             <li><i class="fa-solid fa-shop"></i> Cafeteria</li><br>
         </ul>
     </div>
 </section>
 <br>
 <hr>
 <br>
 <h1 class="TYPES">ROOM TYPES</h1><br>
 <section class="room-type-container">
     <div class="room-images">
        <img src="image1.jpg" alt="room-image">
     </div>
     <div class="room-list">
         <h4>Single occupancy</h4><br>
         <p>Single Occupancy: This term means that only one person will be staying in the room. The rate is based on one individual's use of the room, and no additional guests are expected. Double Occupancy: In contrast, double occupancy means that two people will be sharing the room.</p><br>
         <h4>Family Room</h4><br>
         <p>A family-friendly hotel will understand that parents would like an hour or two to themselves. That's why they often have playrooms and children-only zones that are completely safe for all ages. Many of the playrooms are soft play options, and may even have staff members to watch children for half an hour or an hour.</p><br>
         <h4>Douplex Room</h4><br>
         <p>
             The duplex room is ideal for families and has a double bed or two single beds. It also has air conditioning, a telephone , a wide TV screen (42”),  television with satellite channels (including foreign ones), a private safe, a mini-bar, a welcome tray including a Nespresso facility and some welcome products.
         </p>
     </div>
 </section>
 <div class="help-button">Need Help?</div>
 <br>
    <h2 class="form-heading">Fill the Form for the booking</h2>
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
                <input type="tel" name="Contact" pattern="\d{10}" min="10" max="11" required>
            </div>
            <br>
            <button type="submit" name="submit">submit</button>
        </form>
    </section>
</body>
</html> 