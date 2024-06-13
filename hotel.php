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

// Get form data
$name = $_POST['name'];
$num = $_POST['num'];
$email = $_POST['email'];
$chkin = $_POST['chkin'];
$chkout = $_POST['chkout'];
$days = $_POST['days'];
$person = $_POST['persons'];
$price = $_POST['price'];
// Insert data into the database
 // Generate a random booking ID
 $bookingID = uniqid();

 // Get the current date
 $bookingDate = date("Y-m-d");
$sql = "INSERT INTO hotels (name, num, email,chkin,chkout,  day,persons, price,booking_id,booking_date) VALUES ('$name', '$num', '$email','$chkin','$chkout','$days','$person','$price','$bookingID','$bookingDate')";

if ($conn->query($sql) === TRUE) {
    // Redirect to success page
    header("Location: hosuccess.php?bookingID=$bookingID");
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
