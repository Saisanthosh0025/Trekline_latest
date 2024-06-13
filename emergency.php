

<?php
session_start(); 
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'trekline';

$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$successMessage = ''; // Initialize a variable to store the success message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $id = $_POST['id'];
    $comment = $_POST['comment'];
    $number = $_POST['number'];

    // Insert data into the messages table
    $sql = "INSERT INTO emergency (name, email,booking_id, additional_coments,number) VALUES ('$name', '$email', '$id', '$comment', '$number')";

    if ($conn->query($sql) === TRUE) {
        $successMessage = "Emergency Request submitted successfully!, We will reach you within 15 Minutes";
    } else {
        $successMessage = "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="icon" href="./img/logo2.png" type="image/x-icon">
    <link rel="shortcut icon" href="./img/logo2.png" type="image/x-icon">
    <title>TrekLine Emergency Page</title>
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
    width: 250px; 
    position: fixed;
    top: 0;
    left: -250px;
    background-color: #222;
    overflow-x: hidden;
    transition: 0.5s;
    z-index: 1;
    padding-top: 40px; /* Create space for the top section */
}


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
    header {
            color: white;
            text-align: center;
            padding: 5px;
        }


        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        table {
            background-color: white;
            width: 100%;
            border-collapse: collapse;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        th, td {
            padding: 10px;
            text-align: left;
            
        }

        input[type="text"],
        input[type="email"],input[type="number"],
        textarea {
            width: 80%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            display: block; /* Make the button a block-level element */
            margin: 0 auto; /* Center the button horizontally */
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

       
        .content {
            padding: 20px;
        }

        .contact-cards {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        .card {
            width: 23%;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background: white;
        }

        .card-body {
            text-align: center;
        }

        .card-title {
            font-weight: bold;
            margin-top: 15px;
        }

        .card-text {
            font-size: 1rem;
        }
        .contact-map{
            align="center";
            width=100%;
        }
        .success-message {
        background-color: #4CAF50; /* Green background color */
        color: white; /* White text color */
        text-align: center; /* Center-align the text */
        padding: 10px; /* Add some padding for spacing */
        margin-top: 10px; /* Add margin at the top for separation */
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
    <h3 align="center" style="color: white;">Welcome <?=  $_SESSION['name'] ?></h3><br><br>

    <!-- Bookings section -->
    <a href="bookings.php" style="color: orange; text-decoration: none;" class="anc" >
        <div class="sidebar-section" >Tour Bookings</div>
    </a>

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
    <br><br><br><br><br><br><br><br><br><br><br>
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
            <a href="contact.php">Contact</b></a>
        </div>
        <div class="dropdown">
                <a href="emergency.php"><b>Emergency</b></a>
            </div>
    </div>
    
    <h1 align="center">TrekLine Vacations & Rentals</h1>
</div>

<div class="content">
    <h2 align="center" style="color: rgb(255, 102, 0);"><b>WELCOME <?=  $_SESSION['name'] ?></b></h2><br><br>

   
 <header>
        <h1 style="color:blueviolet;">Emergency</h1>
    </header>
    <div class="container">
        <form id="contactForm" method="post" action="emergency.php">
            <table border="3px">
                <tr>
                    <th>Name</th>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <th>Mobile Number</th>
                    <td><input type="number" name="number" required></td>
                </tr>
                <tr>
                    <th>Booking Id</th>
                    <td><textarea name="id" placeholder="Check in Bookings Section" required></textarea></td>
                </tr>
                <tr>
                    <th>Extra Comments</th>
                    <td><textarea name="comment" required></textarea></td>
                </tr>
                <tr>
                    
                    <td colspan=2><input type="submit" value="submit"></td>
                </tr>
            </table>
			
        </form>
        <?php
        // Display the success message if it's set
        if (!empty($successMessage)) {
            echo '<h3><div class="success-message">' . $successMessage . '</div></h3>';
        }
        ?>
    </div>
   
    </div><br><br>
    <br><br><br>
 
<footer>
    &copy; 2023 TrekLine Vacations & Rentals. All rights reserved.
</footer>

<script>
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

   
    const isLoggedIn = true; // Replace with your logic to check if the user is logged in

    // Show/hide the logout button based on the user's login status
    if (isLoggedIn) {
        logoutButton.style.display = 'block';
    } else {
        logoutButton.style.display = 'none';
    }

    // Add an event listener for the logout button
    logoutButton.addEventListener('click', function() {
       
        window.location.href = 'logout.php';
    });
});

</script>
</body>
</html>
