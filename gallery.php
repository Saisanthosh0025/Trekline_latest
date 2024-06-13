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
    <title>TrekLine Gallery Page</title>
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
            background: url('img/index.jpg') no-repeat;
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
    
    .image-containersxy {
            display: flex;
            justify-content: space-evenly;
            padding: 0px;
        }
  .imagesxy {
            width: 20%; /* Adjust the width as needed */
            border: 2px solid #000;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s, transform 0.2s;
        }
        .imagesxy:hover {
            background-color: #e0e0e0; /* Change the background color on hover */
    transform: scale(1.02); /* Slightly scale up the box on hover */
        }
        .label-containerx {
            text-align: center;
            padding: 0px;
            background-color: #c65be7; /* Set the label's background color */
        }
        .image-containersxy .description {
            text-align: center;
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
        <div class="sidebar-section" >Bookings</div>
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
    
    <div class="label-containerx">
        <h2>Vacation Spots in India</h2>
    </div>
    
    <div class="image-containersxy">
        <img class="imagesxy" src="./img/g1.jpg" alt="Image 1">
        <img class="imagesxy" src="./img/g2.jpg" alt="Image 2">
        <img class="imagesxy" src="./img/g3.jpg" alt="Image 3"> 
		
    </div><br>
    <br>
    <div class="image-containersxy">
        <img class="imagesxy" src="./img/g4.jpg" alt="Image 1">
        <img class="imagesxy" src="./img/g5.jpg" alt="Image 2">
        <img class="imagesxy" src="./img/g6.jpg" alt="Image 3"> 
		
    </div>
    <br>
    </div>
    <div class="content2">
        <br><br><br>
        <h1 style="color:white;">"Your journey, our expertise & we make travel dreams come true."
        </h1><h3 style="color:white;">TrekLine Lt&Co.</h3><br><br><br>
        </div>
        <div class="label-containerx">
        <h2>Incredible Worldwide Journeys</h2>
    </div>
    <div class="image-containersxy">
        <img class="imagesxy" src="./img/g7.jpg" alt="Image 1">
        <img class="imagesxy" src="./img/g8.jpg" alt="Image 2">
        <img class="imagesxy" src="./img/g9.jpg" alt="Image 3"> 
		
    </div><br>
    <br>
    <div class="image-containersxy">
        <img class="imagesxy" src="./img/g10.jpg" alt="Image 1">
        <img class="imagesxy" src="./img/g11.jpg" alt="Image 2">
        <img class="imagesxy" src="./img/g12.jpg" alt="Image 3"> 
		
    </div><br>
    <br>
    <div class="label-containerx">
        <h2>TrekLine Hotels</h2>
    </div>
    <div class="image-containersxy">
        <img class="imagesxy" src="./img/g13.jpg" alt="Image 1">
        <img class="imagesxy" src="./img/g14.jpg" alt="Image 2">
        <img class="imagesxy" src="./img/g15.jpg" alt="Image 3"> 
        
    </div><br>
    
    <div class="image-containersxy">
        <img class="imagesxy" src="./img/g16.jpg" alt="Image 1">
        <img class="imagesxy" src="./img/gb.jpg" alt="Image 2">
        <img class="imagesxy" src="./img/g18.jpg" alt="Image 3"> 
		
    </div>
    <br>
<br>
<div class="label-containerx">
        <h2>Travel Vehicle Rentals</h2>
    </div>
    <div class="image-containersxy">
        <img class="imagesxy" src="./img/gs.jpeg" alt="Image 1">
        <img class="imagesxy" src="./img/g20.jpg" alt="Image 2">
        <img class="imagesxy" src="./img/g21.jpg" alt="Image 3"> 
        
    </div><br>
    <div class="image-containersxy">
        <img class="imagesxy" src="./img/g22.jpg" alt="Image 1">
        <img class="imagesxy" src="./img/gv.jpg" alt="Image 2">
        <img class="imagesxy" src="./img/g24.jpeg" alt="Image 3"> 
		
    </div>
    <br>
    <div align="right">
<button id="scrollToTop" class="arrow-button" onclick="scrollToTop()" align="right">&#9650;</button>
</div>
<br>
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

    // Function to retrieve a specific cookie by name





    
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
