<?php
session_start();


?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="icon" href="./img/logo2.png" type="image/x-icon">
    <link rel="shortcut icon" href="./img/logo2.png" type="image/x-icon">
    <title>TrekLine V&R |   Home</title>
    <style>
        
        .navbar {
            overflow: ;
        }

        .header a {
            float: right; /* Move navigation links to the right */
            display: block;
            color: black;
            text-align: left;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #faf7af;
            color: black;
        }

        .header {
            background: url('img/img5.jpg') no-repeat;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            -ms-background-size: cover;
            background-attachment: fixed;
            height: 60vh;
            padding: 20px;
            text-align: right;
        }

        .content {
            padding: 20px;
        }

        .content {
            transition: transform 0.3s;
        }
        .content2 {
            background: url('img/img2.jpg') no-repeat;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            -ms-background-size: cover;
            background-attachment: fixed;
            height: 20vh;
            padding: 60px;
            text-align: center;
        }
        .content3 {
            background: url('img/img6.jpg') no-repeat;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            -ms-background-size: cover;
            background-attachment: fixed;
            height: 20vh;
            padding: 60px;
            text-align: center;
        }
        footer {
            text-align: center;
            background-color: #833ab4;
            color: white;
            display: block;
        }
        .dropdown {
            display: inline-block;
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: bisque;
            min-width: 60px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            text-align: center;
        }

        .dropdown .arrow {
            content: "\25BC";
            margin-left: 5px;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            padding: 12px 16px;
            text-decoration: none;
            display: flex;
            color: black;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }
        /* Styling for the sidebar */
.sidebar {
    height: 100%;
    width: 250px; /* Adjust the initial width as per your design */
    position: fixed;
    top: 0;
    left: -250px; /* Initially hidden */
    background-color: #222; /* Change to your preferred background color */
    overflow-x: hidden;
    transition: 0.5s;
    z-index: 1;
    padding-top: 40px; /* Create space for the top section */
}

/* Styling for the sidebar content */
.sidebar-content {
    padding: 20px; /* Add more padding to space the content properly */
    color: white; /* Change the text color to white */
}

/* Style for the sidebar sections (Bookings, Section 1, Section 2) */
.sidebar-content {
   
    color: white;
    text-align: center;
    height: 10%; /* Occupy full vertical space */
    display: flex;
    flex-direction: column;
    justify-content: space-between; /* Vertically space the content */
}

.sidebar-item {
    width: 100%; /* Occupy full horizontal space */
}

.sidebar-item a {
    display: block;
    padding: 10px 0;
    text-align: center;
    text-decoration: none;
    color: white;
}

  /* Styling for the open/close button */
#openCloseBtn {
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 1;
        }
.buttonsx {
background: transparent;
color: #fff;
border: none;
border-radius: 5px;
padding: 10px 15px;
cursor: pointer;
transition: background 0.3s; /* Add a transition for a background color change */
}


.buttonsx:hover {
background: #0056b3;
}

    .error-message {
        background: ; /* 40% transparent white background */
        color: red;
        text-align: center;
        padding: 5px; /* Add some padding to the error message container */
    }
    .ratings {
    background-color: #fff;
    max-width: 1000px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h2 {
    font-size: 24px;
    margin: 0 0 20px;
}

.rating {
    display: none; /* Hide all ratings initially */
}

.name {
    font-weight: bold;
}

.stars {
    color: #FFD700;
    font-size: 20px;
    margin-top: 5px;
}

.comment {
    margin-top: 5px;
}
.text-with-border {
    text-decoration-color: white;
    text-shadow:
        -1px -1px 0 #000, /* Top-left border */
        1px -1px 0 #000, /* Top-right border */
        -1px 1px 0 #000, /* Bottom-left border */
        1px 1px 0 #000; /* Bottom-right border */
    color: #fff; /* Text color */
    font-size: 24px; /* Adjust the font size as needed */
}
footer {
    animation: footerFadeIn 1s ease-in-out;
}

@keyframes footerFadeIn {
    0% { opacity: 0; transform: translateY(20px); }
    100% { opacity: 1; transform: translateY(0); }
}
h1 {
    font-size: 36px;
    animation: textFadeIn 2s ease-in-out;
}

@keyframes textFadeIn {
    0% { opacity: 0; transform: translateY(-20px); }
    100% { opacity: 1; transform: translateY(0); }
}
.achievements {
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 40px 80px;
    }

    .achievements .work {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 0 40px;
    }

    .achievements .work i {
      width: fit-content;
      font-size: 50px;
      color: #333333;
      border-radius: 50%;
      border: 2px solid #333333;
      padding: 12px;
    }

    .achievements .work .work-heading {
      font-size: 20px;
      color: #333333;
      text-transform: uppercase;
      margin: 10px 0;
    }

    .achievements .work .work-text {
      font-size: 15px;
      color: #585858;
      margin: 10px 0;
    }

    .work {
    text-align: center; /* Center align the content within the div */
  }

  .work img {
    width: 100px; /* Set a fixed width for the images */
    height: 100px; /* Set a fixed height for the images */
  }

  .work-heading {
    font-weight: bold;
  }
  .section {
      display: flex;
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
      background-color: #e6e6e6;
    }

    .sub-section {
      flex: 1;
      padding: 20px;
      text-align: center;
    }

    img {
      max-width: 100%;
      height: auto;
    }
    img:hover {
      transform: scale(1.1);
    }
    .service-section {
      display: flex;
      max-width: 1900px;
      margin: 0 auto;
      padding: 20px;
      background-color: #e6e6e6;
    }

    .text2 {
      flex: 1;
      padding: 20px;
    }

    .image2 {
      flex: 1;
      padding: 20px;
      text-align: right;
    }
    .arrow-button {
            background-color: #833ab4;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 100%;
            cursor: pointer;
        }

        .arrow-button:hover {
            animation: bounce 0.5s infinite;
        }
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            60% {
                transform: translateY(-5px);
            }
        }

    </style>
</head>
<body>
    
<div class="header">
   
    <div class="navbar">
        <img src="img/logo2.png" alt="Logo" class="logo" width="60px" style="border-radius: 1000px; ;">
		<div id="mySidebar" class="sidebar">
        <div class="sidebar-content">
    
    <!-- Display the username from the session -->
    <h3 align="center" style="color: white;">Welcome <?=  $_SESSION['name'] ?></h3>

    <!-- Bookings section -->
    <a href="bookings.php" style="color: orange; text-decoration: none;" class="anc" >
        <div class="sidebar-section" >Tour Bookings</div>
    </a>

    <!-- Add more sections here -->
    <a href="vehicle_bookings.php" style="color: orange; text-decoration: none;">
        <div class="sidebar-section">Vehicle Bookings</div>
    </a>
    
    <a href="hotel_bookings.php" style="color: orange; text-decoration: none;">
        <div class="sidebar-section">Hotel Bookings</div>
    </a>
    <a href="payments.html" style="color: orange; text-decoration: none;">
        <div class="sidebar-section">Payments</div>
    </a>
    
    
</div>

	<div id="main">
    <button id="openCloseBtn" onclick="openCloseSidebar()" class="buttonsx">☰</button>
    <br><br><br><br><br><br><br><br><br>
    <button id="logout-btn" class="buttonsx" style="align:center;">Logout</button>
		</div>
		</div>
        <div class="dropdown">
            <a href="index.php"><b>Home</a>
        </div>
        <div class="dropdown">
            <a href="about.php">About</a>
        </div>
        <div class="dropdown">
            <a href="services.php">Services<span class="arrow"></span></a>
            <div class="dropdown-content">
                <a href="touragency.html">Tour Agency</a>
                <a href="vehiclerentals.html">Vehicle Rentals</a>
                <a href="hotelbooking.html">Hotel Booking</a>
            </div>
        </div>
        <div class="dropdown">
            <a href="gallery.php">Gallery</a>
        </div>
        <div class="dropdown">
            <a href="contact.php">Contact</a>
        </div>
        <div class="dropdown">
            <a href="emergency.php">Emergency</b></a>
        </div>
    </div>
    
    <h1 align="center">Welcome to TrekLine Vacations & Rentals</h1>
</div>

<div class="content">
    <h2 align="center" style="color: rgb(255, 102, 0);"><b>WELCOME <?=  $_SESSION['name'] ?></b></h2>
    <p>   <p style="color: white;" id="pro">username</p> </p>
</div>
<h2 align="center">Embark on a Journey of Discovery</h2>
    <div class="service-section">
    <div class="text2">
      
    <h4>ㅤㅤㅤㅤㅤㅤOur website is more than just a digital platform; it's your gateway to a world of adventure and exploration, a key to unlock the treasures of our planet. Whether you're a seasoned globetrotter with a backpack full of stories or someone who's just dipping their toes into the vast ocean of travel, we have something special for everyone.</h4>

<h4>Picture this - an online haven where the allure of distant lands, cultures, and experiences converge. Our website invites you to embark on a journey filled with wonder and discovery, where every click is a step closer to your next extraordinary escapade.</h4>

<h4>We understand that travel is more than just a hobby; it's a way of life. It's about collecting moments, not things, and creating memories that last a lifetime. That's why we've curated a universe of travel possibilities just for you.</h4>

<h4>Explore our meticulously designed "Tours" section, where we offer the most captivating destinations paired with expertly guided experiences. Travel deeper, immerse yourself in local cultures, and witness the world's wonders through the eyes of seasoned travelers.</h4>

<h4>For those seeking freedom and flexibility, our "Vehicle Rentals" section is your gateway to the open road. We offer a diverse fleet of vehicles, from rugged 4x4s to elegant convertibles, to suit your travel style and preferences. Hit the road with confidence and chart your own course.</h4>

<h4>After a day filled with exploration and adventure, it's time to unwind and recharge. Our carefully selected "Hotels" section ensures you find comfort and relaxation in your chosen destination. We cater to your unique tastes, whether you crave luxury, tranquility, or the charm of a boutique escape.</h4>

    </div>
    <div class="image2">
        
      <img src="img/img8.jpg" alt="Service Image">
    </div>
</div>
 <br><br>
    
 <div class="content3"><br><br><br><br>
<h2 style="color: white;"> "Adventure awaits." Short and sweet, just like a quick getaway!
        </h2>
</div>
<br><br>
    <h2 align="center"><b>Our Services</b></h2>
    <div class="section">

    <div class="sub-section">
      <h2>Tours</h2>
      <p>
        Explore the most beautiful destinations with our guided tours.
      </p>
      <img src="img/ind1.jpeg" alt="Tour Image">
    </div>

    <div class="sub-section">
    <img src="img/ind2.jpeg" alt="Vehicle Rental Image">
      <h2>Vehicle Rentals</h2>
      <p>
        Get around conveniently with our vehicle rental services. We offer a variety of vehicles for your transportation needs.
      </p>
      
    </div>

    <div class="sub-section">
      <h2>Hotels</h2>
      <p>
        Stay in comfort and style with our hotel accommodations. We have a range of options to suit your preferences. 
      </p>
      <img src="img/ind3.jpeg" alt="Hotel Image">
    </div>
  </div>
    <br>
    <div class="content2">
        <br><br><br>
        <h2 style="color: white;"> TO TRAVEL IS TO LIVE. – HANS CHRISTIAN ANDERSEN
        </h2><br><br><br>
        </div>
        
        <div class="achievements">
        <div class="work">
  <i class="fas"><img src="img/cust.jpeg" alt="" id="fas" style="border-radius:1000px;"></i>
  <p class="work-heading"><b>CUSTOMERS</b></p>
  <p class="work-text">"Our customers are at the heart of our business, and we are dedicated to providing them with exceptional products and services."</p>
</div>
<div class="work">
  <i class="fas"><img src="img/hotel.png" alt="" style="border-radius:1000px;"></i>
  <p class="work-heading"><b>HOTELS</b></p>
  <p class="work-text">"Our hotels offer luxurious accommodations and top-notch amenities for an unforgettable and relaxing stay."</p>
</div>
<div class="work">
  <i class="fas"><img src="img/vehicle.png" alt="" style="border-radius:1000px;"></i>
  <p class="work-heading"><b>VEHICLES</b></p>
  <p class="work-text">"Our vehicles are reliable and efficient, providing safe and comfortable transportation for your needs."</p>
</div>
    </div>
    
    <h2 align="center">Client Ratings & Reviews</h2>
<div class="ratings" align="center">
    
    <div class="rating">
        <div class="name">Aswin Kumar</div>
        <div class="stars">★★★★★</div>
        <div class="comment">I love your page! It's been a valuable resource for my needs. Great job!</div>
    </div>
    <div class="rating">
        <div class="name">Vamsi Krishna</div>
        <div class="stars">★★★★☆</div>
        <div class="comment">Overall, a very useful platform. Just a few minor improvements needed.</div>
    </div>
    <div class="rating">
        <div class="name">Harika</div>
        <div class="stars">★★★☆☆</div>
        <div class="comment">Decent page, but could use more content and better navigation.</div>
    </div>
    </div>

    <h2 align="center">    Contact Us</h2>
    <p align="center">     If you have any questions or inquiries, please contact us at: <a href="contact.php">info@treklinevacations.com</a></p>
</div>
<div align="right">
<button id="scrollToTop" class="arrow-button" onclick="scrollToTop()" align="right">&#9650;</button>
</div>
<footer>
    &copy; 2023 TrekLine Vacations & Rentals. All rights reserved.
</footer>

<script>
    function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
     var username=sessionStorage.getItem("username");            
    document.getElementById("pro").textContent=`${username}`;
    // Function to retrieve a specific cookie by name
function getCookie(name) {
    var cookies = document.cookie.split(';');
    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i].trim();
        if (cookie.startsWith(name + "=")) {
            return cookie.substring(name.length + 1);
        }
    }
    return null;
}

// Retrieve the username from the cookie
var username = getCookie("username");

if (username) {
    // Display the username inside the "WELCOME" element
    document.getElementById("welcome-username").textContent = "WELCOME, " + username;
}

    
function openCloseSidebar() {
        var sidebar = document.getElementById("mySidebar");
        if (sidebar.style.width === "0px" || sidebar.style.width === "") {
            sidebar.style.width = "250px";
            sidebar.style.left = "0";
        } else {
            sidebar.style.width = "0";
            sidebar.style.left = "-250px";
        }
    }

    function closeSidebar() {
        var sidebar = document.getElementById("mySidebar");
        sidebar.style.width = "0";
        sidebar.style.left = "-250px";
    }
    document.addEventListener('DOMContentLoaded', function() {
    const logoutButton = document.getElementById('logout-btn');

    // Check if the user is logged in (you should set a session variable in PHP)
    const isLoggedIn = true; // Replace with your logic to check if the user is logged in

    // Show/hide the logout button based on the user's login status
    if (isLoggedIn) {
        logoutButton.style.display = 'block';
    } else {
        logoutButton.style.display = 'none';
    }

    // Add an event listener for the logout button
    logoutButton.addEventListener('click', function() {
        // Redirect to the logout script (logout.php) to destroy the session
        window.location.href = 'logout.php';
    });
});

</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const ratings = document.querySelectorAll(".rating");
    let currentIndex = 0;

    function showRating(index) {
        ratings.forEach((rating, i) => {
            if (i === index) {
                rating.style.display = "block";
            } else {
                rating.style.display = "none";
            }
        });
    }

    function nextRating() {
        currentIndex = (currentIndex + 1) % ratings.length;
        showRating(currentIndex);
    }

    // Display the first rating
    showRating(currentIndex);

    // Rotate through the ratings every 5 seconds (adjust the time as needed)
    setInterval(nextRating, 1500);
});

</script>
<!-- Add jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Add this script after including jQuery -->
<script>
    $(document).ready(function() {
        $('.dropdown a').on('click', function(event) {
            if (this.hash !== '') {
                event.preventDefault();

                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function(){
                    window.location.hash = hash;
                });
            }
        });
    });
</script>
<!--Start of Conferbot Script-->
<script type="text/javascript">
        (function (d, s, id) {
          var js,
            el = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) {
            return;
          }
          js = d.createElement(s);
          js.async = true;
          js.src = 'https://s3.ap-south-1.amazonaws.com/conferbot.defaults/dist/v1/widget.min.js';
          js.id = id;
          js.charset = 'UTF-8';
          el.parentNode.insertBefore(js, el);
          // Initializes the widget when the script is ready
          js.onload = function () {
              var w = window.ConferbotWidget("654b307ab3d7f38922ab29ca", "live_chat");
          };
        })(document, 'script', 'conferbot-js');
      </script>
      <!--End of Conferbot Script-->


      
</body>
</html>
