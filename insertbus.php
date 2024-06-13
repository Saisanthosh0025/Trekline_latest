<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Book a Vehicle</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $dbHost = 'localhost';
        $dbUser = 'root';
        $dbPass = '';
        $dbName = 'trekline';

        $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Get form data
        $name = $_POST['name'];
        $num = $_POST['num'];
        $email = $_POST['email'];
        $vehicle = $_POST['vehicle'];
        $day = $_POST['day'];
        $price = $_POST['price'];
        // Generate a unique booking ID
        $bookingID = uniqid();

        // Get the current date
        $bookingDate = date("Y-m-d");
        $sql = "INSERT INTO vehicles (booking_id, name, num, email, vehicle, day, price, booking_date) VALUES ('$bookingID', '$name', '$num', '$email', '$vehicle', '$day', '$price', '$bookingDate')";
        
        if ($conn->query($sql) === TRUE) {
            // Redirect to success page with bookingID parameter
            header("Location: vsuccess.php?bookingID=$bookingID");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>


</body>
</html>
