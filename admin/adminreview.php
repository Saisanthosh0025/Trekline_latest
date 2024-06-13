<?php
session_start();

// Database configuration
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "trekline";

// Establish a database connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


function getEmergencyData($conn) {
    $sql = "SELECT * FROM reviews";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return [];
    }
}

// Fetch data from the "emergency" table
$emergencyData = getEmergencyData($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="logo2.png" type="image/x-icon">
    <link rel="shortcut icon" href="logo2.png" type="image/x-icon">
    <title>TrekLine | Reviews Data</title>
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
        }

        .sidebar h3 {
            margin: 0;
            padding-bottom: 20px;
            border-bottom: 2px solid #fff;
            font-size: 24px;
        }

        .sidebar ul {
            list-style: none;
            padding: 20px;
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

        /* Logout button */
        .logout-button {
            background-color: #f00;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        /* Content container */
        .content {
            margin-left: 270px;
            padding: 20px;
        }
        h2 {
            font-size: 36px;
            color: #333;
        }

        p {
            font-size: 18px;
            color: #555;
        }

        table { 
            
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body style=" background: linear-gradient(135deg, rgba(70, 130, 180, 0.3), rgba(0, 0, 128, 0.3));">
<div class="sidebar">
        <h3 align="center">TrekLine Admin Panel</h3><br><img src="img/logo2.png" alt="Logo" class="logo" width="90px" style="border-radius: 1000px; margin-left:85px ;">
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
<div class="content">
    <h2> Bookings reviews From Client's </h2>

    <?php if (empty($emergencyData)) { // Check if there is no data ?>
        <p>No Review data is found.</p>
    <?php } else { // Display the table if data exists ?>
        <!-- Display data in a table format -->
        <table>
            <thead>
                <tr>
                    <th>Booking ID</th>
                    <th>Name</th>
                    <th>Rating of Vacation / Rental [1-5]</th>
                    <th>Comment</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($emergencyData as $data) { ?>
                    <tr>
                        <td><?= $data['booking_id'] ?></td>
                        <td><?= $data['username'] ?></td>
                        <td><?= $data['rating'] ?></td>
                        <td><?= $data['comment'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } ?>
</div>
</body>
</html>
