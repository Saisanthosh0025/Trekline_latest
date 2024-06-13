<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./img/logo2.png" type="image/x-icon">
    <link rel="shortcut icon" href="./img/logo2.png" type="image/x-icon">
    
    <title>TrekLine | Booking Success</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background-color: #f3f3f3;
        }
        .success-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .success-icon {
            color: #4CAF50;
            font-size: 80px;
        }
        .invoice {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            text-align: left;
            background-color: #fff;
        }
        .invoice p {
            margin: 10px 0;
        }
        .go-home-btn {
            display: inline-block;
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="success-container">
        <i class="success-icon">&#10004;</i>
        <h1>Booking Successful</h1>
        <?php
        $bookingID = $_GET['bookingID'];
        $dbHost = 'localhost';
        $dbUser = 'root';
        $dbPass = '';
        $dbName = 'trekline';

        $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM bookings WHERE booking_id = '$bookingID'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='invoice'>";
                echo "<p>Booking ID: " . $row['booking_id'] . "</p>";
                echo "<p>Name: " . $row['name'] . "</p>";
                echo "<p>Phone Number: " . $row['num'] . "</p>";
                echo "<p>Email: " . $row['email'] . "</p>";
                echo "<p>Package: " . $row['package'] . "</p>";
                echo "<p>Persons: " . $row['persons'] . "</p>";
                echo "<p>Price: " . $row['price'] . "</p>";
                echo "<p>Booking Date: " . $row['booking_date'] . "</p>";
                echo "</div>";
            }
        }

        $conn->close();
        ?>
        <a class="go-home-btn" href="index.php">Go to Home</a><br>
        <a class="go-home-btn" href="submit_feedback.php">Submit Feedback</a>
    </div>
</body>
</html>
