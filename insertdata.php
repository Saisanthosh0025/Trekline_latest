<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Book a Tour</title>
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

        $name = $_POST['name'];
        $num = $_POST['num'];
        $email = $_POST['email'];
        $package = $_POST['package'];
        $persons = $_POST['persons'];
        $price = $_POST['price'];

        // Generate a random booking ID
        $bookingID = uniqid();

        // Get the current date
        $bookingDate = date("Y-m-d");

        $sql = "INSERT INTO bookings (booking_id, name, num, email, package, persons, price, booking_date) 
                VALUES ('$bookingID', '$name', '$num', '$email', '$package', '$persons', '$price', '$bookingDate')";

        if ($conn->query($sql) === TRUE) {
            // Redirect to success page
            header("Location: success.php?bookingID=$bookingID");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>
    
    <form method="POST">
        <!-- Your booking form fields -->
        <!-- ... -->
        <button type="submit">Book Now</button>
    </form>
</body>
</html>
