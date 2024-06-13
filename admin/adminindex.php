<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="logo2.png" type="image/x-icon">
    <link rel="shortcut icon" href="logo2.png" type="image/x-icon">
    <title>TrekLine | Admin Home</title>

    <style>
       
        .sidebar {
            width: 250px;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            background-color: #333;
            color: #fff;
            padding: 20px;
            overflow-y: auto;
            margin-right: 400px; 
            z-index: 1; 
        }

        .sidebar h2 {
            margin: 0;
            padding-bottom: 20px;
            border-bottom: 2px solid #fff;
            font-size: 24px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0px;
        }

        .sidebar li {
            margin-bottom: 10px;
            padding: 10px
        }

        .sidebar li:hover {
            background: grey
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
        }

        .sidebar a:hover {
            background-color: #555;
        }

       
        .logout-button {
            background-color: #f00;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        
        .content-container {
            
        
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    margin-left: 300px;
    padding: 20px;
    
}
      
        .box {

background-color: #f5f5f5;
border: 1px solid #ddd;
padding: 20px;
border-radius: 10px;
box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
transition: background-color 0.3s, transform 0.2s;
}



.box:hover {
    background-color: #e0e0e0; 
    transform: scale(1.02); 
}

        .icon {
        font-size: 36px;
        margin-top: 20px;
    }
    p, li {
        font-size: 18px;
        color: #555;
    }
    a {
        color: #007bff;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

       
    </style>
</head>
<body style="background: linear-gradient(135deg, rgba(255, 0, 0, 0.2), rgba(0, 0, 255, 0.2));">
<div class="sidebar">
    <h2>TrekLine Admin Panel</h2>
    <br>
    <img src="img/logo2.png" alt="Logo" class="logo" width="90px" style="border-radius: 1000px; margin-left:85px ;">
    <ul align="center">
        <li><a href="adminindex.php">Home</a></li>
        <li><a href="adminemergency.php">Emergency Request</a></li>
        <li><a href="admintourbooking.php">Tour Bookings</a></li>
        <li><a href="adminvehiclebooking.php">Vehicle Bookings</a></li>
        <li><a href="adminhotelbooking.php">Hotel Bookings</a></li>
        <li><a href="adminrating.php">Client's Feedback</a></li>
        <li><a href="admincontact.php">Client's contact Request</a></li>
        <li><a href="adminreview.php">Client's Reviews</a></li>
    </ul>
    <button class="logout-button" onclick="location.href='adminlogout.php'">Logout</button>
</div>

<div class="content-container">
    <div class="box">
        <h2>Quick Stats</h2>
        <p>Total Clients: 1000</p>
        <p>Total Bookings: 500</p>
        <p>Total Revenue: $50,000</p>
        <div class="icon">&#x1F4E6;</div>
    </div>

    <div class="box">
        <h2>Latest Bookings</h2>
        <ul>
            <li><a href="admintourbooking.php">Tour Booking </a></li>
            <li><a href="adminvehiclebooking.php">Vehicle Booking </a></li>
            <li><a href="adminhotelbooking.php">Hotel Booking </a></li>
            <div class="icon">&#x1F30E;</div>
        </ul>
    </div>

    <div class="box">
        <h2>Feedback </h2>
        <p>Check the latest client feedback.</p>
        <a href="adminrating.php">View Feedback</a>
        <div class="icon">&#x1F44D;</div>
    </div>

    <div class="box">
        <h2>Contact Requests</h2>
        <p>Review and respond to client contact requests.</p>
        <a href="admincontact.php">View Requests</a>
        <div class="icon">&#x1F4DE;</div>
    </div>

    <div class="box">
        <h2>Financial Overview</h2>
        <p>Total Income: $60,000</p>
        <p>Total Expenses: $10,000</p>
        <p>Profit Margin: 20%</p>
        <div class="icon">&#x1F4B0;</div>
    </div>

    <div class="box">
        <h2>Upcoming Events</h2>
        <ul>
            <li><a href="adminevents.html">Click here to visit</a></li>
            
            <div class="icon">&#x1F381;</div>
        </ul>
    </div>
    <div class="box">
        <h2>Reviews</h2>
        <p>Check the latest client  reviews.</p>
        <a href="adminreview.php">View Review</a>
        <div class="icon">&#x1F44D;</div>
    </div>

    <div class="box">
        <h2>Emergency Requests</h2>
        
            <a href="adminemergency.php">View Emergency Requests</a>
            <div class="icon"> &#x26A0;</div>
        
    </div>
</div>
</body>
</html>

