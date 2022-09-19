<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <link rel="stylesheet" href="style.css">

    

</head>
<body>
 
<!-- header section starts -->

<section class="header">
    <a href="home.php" class="logo">Tripster.</a>

    <nav class="navbar">
    <a href="home.php">Home</a>
    <a href="about.php">About</a>
    <a href="package.php">Package</a>
    <a href="book.php">Book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
</section>

<!--Header ends-->
<div class="heading">
    <div class="box-container">
    <h1>Book Now</h1>
    </div>
    
</div>

<!--booking section starts-->

<section class="booking">
    <h1 class="heading-title">Book Your Trip!</h1>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>First Name :</span>
                <input type="text" placeholder="Enter your first name" name="fname">
            </div>
            <div class="inputBox">
                <span>Last Name :</span>
                <input type="text" placeholder="Enter your last name" name="lname">
            </div>
            <div class="inputBox">
                <span>Email :</span>
                <input type="email" placeholder="Enter your email" name="email">
            </div>
            <div class="inputBox">
                <span>Phone :</span>
                <input type="number" placeholder="Enter your number" name="phone">
            </div>
            <div class="inputBox">
                <span>Address :</span>
                <input type="text" placeholder="Enter your address" name="address">
            </div>
            <div class="inputBox">
                <span>Destination :</span>
                <input type="text" placeholder="Where do you want to visit" name="location">
            </div>
            <div class="inputBox">
                <span>Interested Activity :</span>
                <input type="text" placeholder="Enter the activity category" name="activity">
            </div>
            <div class="inputBox">
                <span>Number of people :</span>
                <input type="number" placeholder="Number of guests" name="guests">
            </div>
            <div class="inputBox">
                <span>Date of Arrival :</span>
                <input type="date" name="arrival">
            </div>
            <div class="inputBox">
                <span>Date of Leaving :</span>
                <input type="date" name="leaving">
            </div>
        </div>

        <input type="submit" value="submit" class="btn" name="send">
    </form>
</section>
<!--booking section ends-->

<!-- footer section starts -->

<section class="footer">
    <div class="box-container">

        <div class="box">
            <h3>Extra links</h3>
            <a href="#"><i class="	fas fa-question-circle"></i> ask questions</a>
            <a href="#"><i class="fas fa-info-circle"></i> about us</a>
            <a href="#"><i class="fas fa-lock"></i> privacy policy</a>
            <a href="#"><i class="fas fa-scroll"></i> terms of use</a>
        </div>

        <div class="box">
            <h3>Contact info</h3>
            <a href="#"><i class="fas fa-phone-square"></i> +91 9820304759</a>
            <a href="#"><i class="fas fa-phone-square"></i> +91 9879304705</a>
            <a href="#"><i class="fas fa-envelope"></i> tripster@gmail.com</a>
            <a href="#"><i class="	fas fa-map-marker-alt"></i> kolkata, india - 700057</a>
        </div>

        <div class="box">
            <h3>Follow us</h3>
            <a href="#"><i class="fab fa-facebook"></i> facebook</a>
            <a href="#"><i class="fab fa-twitter-square"></i> twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
        </div>
    </div>

    <div class="credit">Created by Ms. Shruti Agarwal | all rights reserved!</div>
</section>







<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script src="script.js"></script>
</body>
</html>