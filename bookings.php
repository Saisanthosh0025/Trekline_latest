<?php
session_start(); // Start the session

// Your other PHP code here
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./img/logo2.png" type="image/x-icon">
    <link rel="shortcut icon" href="./img/logo2.png" type="image/x-icon">
    <title>TrekLine | Tour Bookings</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 1920px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #c300ff;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #c300ff;
            color: white;
        }
        td {
            background-color: white;
        }
        .button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #c65be7;
            color: white;
            text-align: center;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            width:90%;
        }
        .button:hover {
            background-color: rgb(243,130,130);
        }
        footer {
            text-align: center;
            background-color: #833ab4;
            color: white;
            display: block;
            position: sticky;
        }

    </style>
</head>
<body>
    <div class="container">
    <h1 style="color:#333;">TREKLINE VACATION BOOKINGS</h1>
        <h1 style="color:#333;">Booking Details of <?=  $_SESSION['name'] ?></h1>
        <table>
            <tr>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Package</th>
                <th>Number of Persons</th>
                <th>Price</th>
                <th>booking_id</th>
                <th>booking_date</th>
                <th>status</th>
            </tr>
            <?php
            // Connect to your database
            $hostname = 'localhost'; // Change to your database host
            $dbUsername = 'root'; // Change to your database username
            $dbPassword = ''; // Change to your database password
            $database = 'TrekLine'; // Change to your database name

            $conn = mysqli_connect($hostname, $dbUsername, $dbPassword, $database);

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Get the logged-in user's name from the session
            $username = $_SESSION['name'];

            // Query the database to get booking details for the logged-in user
            $query = "SELECT name, num, email, package, persons, price,booking_id,booking_date,status FROM bookings WHERE name = '$username'";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['num'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['package'] . "</td>";
                    echo "<td>" . $row['persons'] . "</td>";
                    echo "<td>" . $row['price'] . "</td>";
                    echo "<td>" . $row['booking_id'] . "</td>";
                    echo "<td>" . $row['booking_date'] . "</td>";
                    echo "<td>" . $row['status'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No bookings found.</td></tr>";
            }

            mysqli_close($conn);
            ?>
        </table>
        <a class="button" href="touragency.html">Book a Tour</a>
        <a class="button" href="review.php">Give a Review</a>
        <a class="button" href="index.php">Go to Main Page</a>
        <a class="button" href="payments.html">Go to Payments Page</a>
    </div>
    
    <footer>
        &copy; 2023 TrekLine Vacations & Rentals. All rights reserved.
    </footer>
</body>
</html>
