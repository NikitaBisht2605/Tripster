<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

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

<!--Home Section start-->
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(images/home-slide-7.1.jpg) no-repeat">
                <div class="content">
                    <span> Travel. Explore. Discover.</span>
                    <h3>Travel around the world</h3>
                    <a href="package.php" class="btn">Discover More</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-8.jpg) no-repeat">
                <div class="content">
                    <span>Travel.Explore.Discover.</span>
                    <h3>Explore new places</h3>
                    <a href="package.php" class="btn">Discover More</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-6.1.jpg) no-repeat">
                <div class="content">
                    <span>Travel.Explore.Discover.</span>
                    <h3>Discover the unknown</h3>
                    <a href="package.php" class="btn">Discover More</a>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

<!--Home Section End-->

<!--services section start-->
<section class="services">
    <h1 class="heading-title">Our Services</h1>
    <div class="box-container">
        <div class="box">
            <img src="images/icon-1.png" alt="">
            <h3>Adventure</h3>
        </div>
        <div class="box">
            <img src="images/icon-2.png" alt="">
            <h3>Tour Guide</h3>
        </div>
        <div class="box">
            <img src="images/icon-3.png" alt="">
            <h3>Trekking</h3>
        </div>
        <div class="box">
            <img src="images/icon-4.png" alt="">
            <h3>Camp Fire</h3>
        </div>
        <div class="box">
            <img src="images/icon-5.png" alt="">
            <h3>Off Road</h3>
        </div>
        <div class="box">
            <img src="images/icon-6.png" alt="">
            <h3>Camping</h3>
        </div>
    </div>
</section>
<!--services section end-->

<!--home about section starts-->
<section class="home-about">
    <div class="content">
        <h3>About Us</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis omnis distinctio quam aliquid aperiam. Praesentium eum repellat maxime soluta consequatur quas, minima doloremque voluptate, quo nam, odio laboriosam voluptas impedit.</p>
        <a href="about.php" class="btn">Read More</a>
    </div>
    <div class="image">
        <img src="images/about us 1.jpg" alt="">
    </div>
    
</section>
<!--home about section ends-->



<!--home packages section starts-->

<section class="home-packages">
    <h1 class="heading-title">Our Packages</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="images/trekking.jpg" alt="">
            </div>
            <div class="content">
                <h3>Trekking</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, adipisci. Fugiat aliquam eaque corporis quasi voluptatum repellat quidem, dicta eos expedita ducimus veniam officiis obcaecati possimus laborum, odio corrupti iste?</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="images/camping.jpg" alt="">
            </div>
            <div class="content">
                <h3>Camping</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, adipisci. Fugiat aliquam eaque corporis quasi voluptatum repellat quidem, dicta eos expedita ducimus veniam officiis obcaecati possimus laborum, odio corrupti iste?</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="images/off road.jpg" alt="">
            </div>
            <div class="content">
                <h3>Off-road</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, adipisci. Fugiat aliquam eaque corporis quasi voluptatum repellat quidem, dicta eos expedita ducimus veniam officiis obcaecati possimus laborum, odio corrupti iste?</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
    </div>
    <div class="load-more"><a href="package.php" class="btn">Explore More</a></div>
</section>
<!--home packages section ends-->

<!--home offer section starts-->
<section class="home-offer">
    <div class="content">
        <h3>Upto 50% Off</h3>
        <p>Get discount upto 50% on your first booking from our website!</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>
<!--home offer section ends-->

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