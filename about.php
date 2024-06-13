<?php
session_start(); // Start the session

// Your other PHP code here
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="./img/logo2.png" type="image/x-icon">
    <link rel="shortcut icon" href="./img/logo2.png" type="image/x-icon">
    <title>TrekLine V&R |   About</title>    <style>
             
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
    max-width: 600px;
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
h
        body {
            font-family: Arial, sans-serif;
        }

       
        .container {
            display: flex;
            justify-content: space-between;
            align-items:normal;
            padding: 50px;
            background-color: #e6e6e6;
        }

        .left {
            flex: 1;
        }

        .right {
            flex: 1;
            position:relative; /* Required for absolute positioning */
        }

        .right img {
            width: 50%;
            height: auto; /* Adjust to maintain aspect ratio */
            object-fit: cover;
            position: absolute;
            transform: rotate(360deg);
        }

        .right img:nth-child(1) {
            top: 1px;
            left: 100px;
        }

        .right img:nth-child(2) {
            top: 180px;
            left: 200px;
        }

       

        .content {
            padding: 20px;
            text-align: center;
        }

        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
        }

        .popup-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background: bisque;
            text-align: center;
            animation: fadeIn 0.5s;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        .underlined-text {
            text-decoration: underline;
        }

        .team-member {
            text-align: center;
            margin: 20px;
        }

        .team-member img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border: 2px solid #333;
        }

        .team-member a {
            text-decoration: none;
            color: #333;
        }

        .footer {
            text-align: center;
            background-color: #833ab4;
            color: white;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
        }

        .feedback-button {
            background-color: #833ab4;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none; /* Remove the underline style for links */
            display: inline-block; /* Prevent it from stretching to full width */
            margin-top: 10px; /* Adjust the spacing as needed */
        }

        .feedback-button:hover {
            background-color: #833ab4; /* Change color on hover */
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

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        .team-section {
      background-color: #e6e6e6;
    }
    .team-section:hover {
            animation: bounce 0.5s ;
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
        <br><br><br><br>
        
    </div>
    
        <div id="main">
        <button id="openCloseBtn" onclick="openCloseSidebar()" class="buttonsx">☰</button>
        <br><br><br><br><br><br><br>
        <button id="logout-btn" class="buttonsx">Logout</button>
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
        <h1 align="center">TrekLine Vacations & Rentals</h1>

        </div>
        
        <div class="content">
    <h2 align="center" style="color: rgb(255, 102, 0);"><b>WELCOME <?=  $_SESSION['name'] ?></b></h2>
    <p style="color: white;" id="pro">username</p>
</div>
    <h2 align="center" style="color: black; font-size: xx-large;"><b>About Us</b></h2>

    <div class="container">
        <div class="left">
            <h4 style=" text-align: justify;">"Welcome to our world of tourism and rentals, where we blend a deep passion for travel with a commitment to creating unforgettable memories for our guests. With a rich heritage of providing exceptional service, we have been your trusted partner in exploring the world's most captivating destinations. 
                Our journey is defined by a dedication to offering a wide range of accommodation options, from cozy cottages nestled in the heart of picturesque landscapes to luxurious beachfront villas that redefine relaxation. We understand that every traveler is unique, and our collection of rentals is a testament to that belief.<br><br>
                In the essence of classic hospitality, we are not just providers of a place to stay; we are your hosts, your guides, and your storytellers. Our team, with years of experience and an unwavering love for travel, is here to craft your dream getaway, tailored to your desires. We're more than just a rental service; we're your travel companions.
                
                Our website is a reflection of our commitment to delivering an authentic and enriching experience. Explore our handpicked rentals, each chosen for its charm and character. Discover our curated tours and activities that unveil the hidden gems of your chosen destination. Allow us to share our knowledge and expertise, accumulated over years of globe-trotting, to make your journey exceptional.
                
                We invite you to embark on a timeless voyage with us, to experience the world's wonders through the lens of our passion for tourism and rentals. Together, let's create stories, memories, and experiences that will stay with you for a lifetime. Welcome to our world, where classic hospitality meets modern convenience, and humble service meets unforgettable adventures."<br><br>
                At the heart of our endeavor is a dedication to offering a wide array of accommodation options, catering to the diverse needs and preferences of travelers. From cozy cottages tucked away in picturesque landscapes to luxurious beachfront villas that redefine relaxation, our rental offerings span the spectrum of comfort and luxury.
            </h4>
        </div>
        <div class="right">
            <img src="img/img2.jpg" alt="Image 1">
            <img src="img/img4.jpg" alt="Image 2">
           
        </div>
    </div>
    <br><br>
    <br><br><br><br>

    <div class="content">
        <h2>Explore more</h2>
        <div class="read-more-button">
            <button style="color: #d10303;" onclick="openPopup()">click here</button>
        </div>
    </div>

    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closePopup()">&times;</span>
            <h2 style="background-color: bisque;" align="center">Tourism & Rentals</h2>
            <div style="background-color: wheatstone);" align="center">
                <img src="img/2.jpg" alt="Image Description" width="500" height="200">
                <h4> We understand that every traveler is unique, and our collection of rentals is a testament to that belief. Our properties have been handpicked to ensure they embody the character and charm that make your stay not just a visit, but an immersive experience. Our mission is to provide you with not just a place to rest, but a home away from home.<br><br>
                    In the spirit of classic hospitality, we go beyond being mere providers of accommodation. We aspire to be your hosts, your guides, and your storytellers. Our team, boasting years of experience and an unwavering love for travel, is dedicated to crafting your dream getaway, tailored to your specific desires. We take pride in being more than just a rental service; we aim to be your trusted travel companions.
    </h4>
            </div>
        </div>
    </div>

    <script>
        function openPopup() {
            var popup = document.getElementById("popup");
            popup.style.display = "block";
        }

        function closePopup() {
            var popup = document.getElementById("popup");
            popup.style.display = "none";
        }
    </script>

    
    <h1 align="center" style="color: black"><span>Our Team</span></h1>

    <table align="center">
        <tr>
            <td>
                <div class="team-section">
                <div class="team-member">
                    <img src="img/tm1.jpg" alt="Team Member 1">
                    <h2>P.H.C.Sai Santhosh</h2>
                    <p>CEO</p>
                    <a href="https://www.linkedin.com/in/pichika-hem-chandra-sai-santhosh-1023b3246?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">LinkedIn</a> |
                    <a href="https://twitter.com/" target="_blank">Twitter</a>
                </div>
    </div>
            </td>
            <td>
            <div class="team-section">
                <div class="team-member">
                    <img src="img/tm2.jpeg" alt="Team Member 2">
                    <h2>P.Satish Reddy</h2>
                    <p>M.D</p>
                    <a href="https://www.linkedin.com/in/satish-reddy-padala-7720a922a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">LinkedIn</a> |
                    <a href="https://twitter.com/" target="_blank">Twitter</a>
                </div>
                </div>
            </td>
            <td>
            <div class="team-section">
                <div class="team-member">
                    <img src="img/tm3.jpeg" alt="Team Member 3">
                    <h2>T.Dharma simha</h2>
                    <p>Manager</p>
                    <a href="https://www.linkedin.com/in/talatam-dharma-simha-b124a1268?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">LinkedIn</a> |
                    <a href="https://twitter.com/" target="_blank">Twitter</a>
                </div>
                </div>
            </td>
            <td>
            <div class="team-section">
                <div class="team-member">
                    <img src="img/tm4.jpeg" alt="Team Member 4">
                    <h2>M.Ajith Kumar</h2>
                    <p>Organizer</p>
                    <a href="https://www.linkedin.com/in/medisetti-ajith-kumar-15aa47242?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">LinkedIn</a> |
                    <a href="https://twitter.com/" target="_blank">Twitter</a>
                </div>
    </div>
            </td>
        </tr>
    </table>
    <div align="right">
    <a href="submit_feedback.php" class="feedback-button">Provide Feedback</a>
        
    <button id="scrollToTop" class="arrow-button" onclick="scrollToTop()" align="right">&#9650;</button>
</div>
    <footer>

        
        <p align="center"> &copy; 2023 TrekLine Travels & Rentals. All rights reserved.</p>
    </footer>

    <script>
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>
    <script>
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
</body>
</html>