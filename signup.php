<?php
$hostname = 'localhost'; // Change to your database host
$username = 'root'; // Change to your database username
$password = ''; // Change to your database password
$database = 'TrekLine';

$showGoToLoginLink = false; // Set the initial value

// Connect to the database
$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // MD5 encryption

    // Check if the username is already taken
    $check_query = "SELECT * FROM users WHERE username = '$username'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        $error_message = "Username already taken. Please choose a different one.";
    } else {
        // Insert the user data into the database
        $query = "INSERT INTO `users` (`username`, `password`) VALUES ('$username', MD5('$password'));";
        $result = mysqli_query($conn, $query);

        if ($result) {
            // Successful registration, set the flag to show the link
            $showGoToLoginLink = true;
        } else {
            $error_message = "Error registering the user. Please try again.";
        }
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/logo2.png" type="image/x-icon">
    <link rel="shortcut icon" href="./img/logo2.png" type="image/x-icon">
    <title>TrekLine Vacations & Rentals</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}
        #video-background {
     position: fixed;
     right: 0;
     bottom: 0;
     min-width: 100%;
     min-height: 100%;
     z-index: -1; 
   }
   .container {
    width: 300px;
}

.login-box {
    align="center";
    background: transparent;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s; /* Add a transition for a sliding animation */
}

.login-box:hover {
    transform: translateY(5px);
}

h1 {
    text-align: center;
    color: #c300ff;
}

.textbox {
    position: relative;
    margin: 15px 0;
}

input {
    width: 100%;
    align-items: center;
    padding: 9px;
    border: 1px solid #ccc;
    border-radius: 5px;
    transition: border-color 0.3s; /* Add a transition for a border color change */
}

input:focus {
    border-color: #c300ff;
}

button {
    background: #c300ff;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 15px;
    cursor: pointer;
    width: 110%;
    transition: background 0.3s; /* Add a transition for a background color change */
}

button:hover {
    background: #0056b3;
}
    </style>
</head>
<body>
    <video autoplay loop muted id="video-background">
        <source src="img/bg.mp4" type="video/mp4">
    </video>
    <div class="container">
        <div class="login-box">
            <form method="POST">
                <div class="textbox">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="textbox">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit">Sign Up</button><br><br>
            </form>
            <?php
            if (isset($error_message)) {
                echo '<i><h3 class="error-message" style="color:red;">' . $error_message . '</h3></i>';
            }

            if ($showGoToLoginLink) {
                echo '<i><h3 class="error-message" style="color:green;">User Registered!</h3></i>';
                echo '<button onclick="redirectToLoginPage()">Go login</button>';
            }
            ?>
        </div>
    </div>
    <script>
        function redirectToLoginPage() {
            window.location.href = 'login.php';
        }
    </script>
</body>
</html>


