<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">

</head>
<body>
    
    <header>
        <p>PAKISTAN'S MOST TRUSTED CLOTHING STORE</p>
    </header>

    <div class="topnav">
        <a class="active" href="index.php">Home</a>
        <a href="about.php">About</a>
        <?php
        if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
            // User is logged in, display their username
            echo "<p class='user-name'>Welcome, " . $_SESSION['username'] . "!</p>";
            echo '<a class="logout-btn" href="logout.php">Logout</a>';
        } else {
            // User is not logged in, display the login link
            echo '<a href="sign.php">Login/Register</a>';
        }
        ?>
    </div>

    <nav>
        <center>
            <img src="img/logo.png_v=1626261700" alt="">
        </center>
    </nav>
    

    <div class="bottom-nav">
        <ul>
            <li><a href=""> NEW ARRIVALS </a></li>
            <li><a href=""> CHIFFON </a></li>
            <li><a href=""> LAWN/COTTON </a></li>
            <li><a href=""> MARIA B </a></li>
            <li><a href=""> JUST RESTOCKED </a></li>
            <li><a href=""> WINTER </a></li>
            <li><a href=""> WEDDING </a></li>
            <li><a href=""> BRANDS </a></li>
            <li><a href=""> MEN'S </a></li>
            <li><a href=""> SALE </a></li>
        </ul>
    </div>

    <hr>

    <div class="hero">
        <img src="img/hero/hero.jpg" alt="">
        
    </div>

    <h1>NEW ARRIVALS</h1>

    <div class="card-sec">
        
        <div>
            <img src="img/hero/fir4.webp" alt="">
            <p>Zainab Chottani Digital Printed EMAYA Poly Lawn 3 pc - 08956
                Rs.3,250.00</p>
        </div>
        <div>
            <img src="img/hero/fir4.webp" alt="">
            <p>Zainab Chottani Digital Printed EMAYA Poly Lawn 3 pc - 08956
                Rs.3,250.00</p>
        </div>
        <div>
            <img src="img/hero/fir4.webp" alt="">
            <p>Zainab Chottani Digital Printed EMAYA Poly Lawn 3 pc - 08956
                Rs.3,250.00</p>
        </div>
        <div>
            <img src="img/hero/fir4.webp" alt="">
            <p>Zainab Chottani Digital Printed EMAYA Poly Lawn 3 pc - 08956
                Rs.3,250.00</p>
        </div>
        <div>
            <img src="img/hero/fir4.webp" alt="">
            <p>Zainab Chottani Digital Printed EMAYA Poly Lawn 3 pc - 08956
                Rs.3,250.00</p>
        </div>
        <div>
            <img src="img/hero/fir4.webp" alt="">
            <p>Zainab Chottani Digital Printed EMAYA Poly Lawn 3 pc - 08956
                Rs.3,250.00</p>
        </div>
        <div>
            <img src="img/hero/fir4.webp" alt="">
            <p>Zainab Chottani Digital Printed EMAYA Poly Lawn 3 pc - 08956
                Rs.3,250.00</p>
        </div>
        <div>
            <img src="img/hero/fir4.webp" alt="">
            <p>Zainab Chottani Digital Printed EMAYA Poly Lawn 3 pc - 08956
                Rs.3,250.00</p>
        </div>
    </div>

    <div class="view-btn">
    <button id="btn">VIEW ALL</button>
    </div>

    <div class="two-img">
        <span>
        <img src="img/hero/sam1.jpg" alt="">
        <p>MARIA B</p>
    </span>
    <span>
        <img src="img/hero/sam2.jpg" alt="">
        <p>MARIA B</p>
    </span>
    </div>

    <h1>JUST RESTOCKED</h1>

    <div class="card-sec">
        
        <div>
            <img src="img/hero/fir4.webp" alt="">
            <p>Zainab Chottani Digital Printed EMAYA Poly Lawn 3 pc - 08956
                Rs.3,250.00</p>
        </div>
        <div>
            <img src="img/hero/fir4.webp" alt="">
            <p>Zainab Chottani Digital Printed EMAYA Poly Lawn 3 pc - 08956
                Rs.3,250.00</p>
        </div>
        <div>
            <img src="img/hero/fir4.webp" alt="">
            <p>Zainab Chottani Digital Printed EMAYA Poly Lawn 3 pc - 08956
                Rs.3,250.00</p>
        </div>
        <div>
            <img src="img/hero/fir4.webp" alt="">
            <p>Zainab Chottani Digital Printed EMAYA Poly Lawn 3 pc - 08956
                Rs.3,250.00</p>
        </div>
        <div>
            <img src="img/hero/fir4.webp" alt="">
            <p>Zainab Chottani Digital Printed EMAYA Poly Lawn 3 pc - 08956
                Rs.3,250.00</p>
        </div>
        <div>
            <img src="img/hero/fir4.webp" alt="">
            <p>Zainab Chottani Digital Printed EMAYA Poly Lawn 3 pc - 08956
                Rs.3,250.00</p>
        </div>
        <div>
            <img src="img/hero/fir4.webp" alt="">
            <p>Zainab Chottani Digital Printed EMAYA Poly Lawn 3 pc - 08956
                Rs.3,250.00</p>
        </div>
        <div>
            <img src="img/hero/fir4.webp" alt="">
            <p>Zainab Chottani Digital Printed EMAYA Poly Lawn 3 pc - 08956
                Rs.3,250.00</p>
        </div>
    </div>

    <div class="view-btn">
    <button id="btn">VIEW ALL</button>
    </div>

    <div class="slider">
            <p>CLIENT SATISFACTION</p>
            <h1>CUSTOMERS REVIEWS</h1>

            <!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width slides/quotes -->
    <div class="mySlides">
      <q>Just received the parcel, it’s more them my expectations , v cooperative staff , on time delivery in a v reasonable price. One of the best online shopping experience ever ❤️ highly recommended 🙂 Thank you fashion flare🎉</q>
      <p class="author">- John Keats</p>
    </div>
  
    <div class="mySlides">
      <q>Today i received my parcel from fashion flare it was so good Alhumdulillah quality of stuff was amazing jesa vedio me dekhaya hai same aya h ALHUMDULILLAH khush hue bht me k paisy zaya nh gay wrna u Know online shopping ka yahi hota acha nh ata kch pr inpy trust kryn ap sb ❤️</q>
      <p class="author">- Ernest Hemingway</p>
    </div>
  
    <div class="mySlides">
      <q>ordered semi formal suit for a family event, came out to be the best decision as it has stolen all the spotlights of event . Also the stuff is same as they show online. highly recommended.</q>
      <p class="author">- Thomas A. Edison</p>
    </div>
  
    <!-- Next/prev buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  
  <!-- Dots/bullets/indicators -->
  <div class="dot-container">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
    </div>

    <div class="bottom-footer">
        <div>
            <h2>OUT STORE</h2>
            <br>
            <p>LG 1, Basement Floor, Gold Mark 2 Mall, Korangi Road, Phase 1, DHA Karachi</p>
            <p>
                <br>
                Timings
Monday To Saturday : 11 am to 9 pm
Sunday : closed
            </p>
            <br>
            <p>
                Contact 0300-0499906
            </p>
            <br>
                <button id="btn-1">GET DIRECTIONS</button>
        </div>
    </div>

    <div class="thin-footer">
        <h4 id="helo">100% Satisfaction Guaranteed</h4>
        <h4 id="helo">Free Cash On Delivery</h4>
        <h4 id="hilo">7 Days Exchange Policy</h4>
    </div>

    <footer>
        <div>
            <div><a href="about.php" class="active">About Us</a></div>
            <div><a href="#">Features</a></div>
            <div><a href="#">New Collection</a></div>
            <div><a href="#">News & Blog</a></div>
        </div>
        <div>
            <h4>LINKS</h4>
            <p>Exchange Policy</p>
        </div>
        <div>
            <h4>STAY IN TOUCH</h4>
        </div>
    </footer>
    <div>
        <p class="txt-center">All Rights Reserved</p>
    </div>
    <script src="script.js"></script>
</body>
</html>