<?php
$hostname = 'localhost'; // Change to your database host
$username = 'root'; // Change to your database username
$password = ''; // Change to your database password
$database = 'TrekLine';

$showSuccessMessage = false;
$showErrorMessage = false;

// Connect to the database
$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['new_password'])) {
        $username = $_POST['username'];

        // Check if the username exists in the database
        $check_query = "SELECT * FROM users WHERE username = '$username'";
        $check_result = mysqli_query($conn, $check_query);

        if (mysqli_num_rows($check_result) > 0) {
            $newPassword = md5($_POST['new_password']); // MD5 encryption for the new password

            // Update the user's password in the database
            $update_query = "UPDATE users SET password = '$newPassword' WHERE username = '$username'";
            $update_result = mysqli_query($conn, $update_query);

            if ($update_result) {
                $showSuccessMessage = true;
            }
        } else {
            $showErrorMessage = true;
        }
    }
}

// Close the database connection
mysqli_close($conn);
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

		.error-message {
            background: rgba(255, 255, 255, 0.4); /* 40% transparent white background */
            color: red;
            text-align: center;
            padding: 5px; /* Add some padding to the error message container */
        }

        .success-message {
            background: rgba(255, 255, 255, 0.4);
    color: green; /* You can change the color to your preference */
    text-align: center;
    font-size: 18px;
    margin-top: 20px;
}

        /* Your existing CSS styles here... */
    </style>
</head>
<body>
    <video autoplay loop muted id="video-background">
        <source src="img/bg.mp4" type="video/mp4">
    </video>
    <div class="container">
        <div class="login-box">
            <?php
            if (!$showSuccessMessage) {
                echo '<form method="POST">
                    <div class="textbox">
                        <input type="text" name="username" placeholder="Username">
                    </div>
                    <div class="textbox">
                        <input type="password" name="new_password" placeholder="New Password">
                    </div>
                    <button type="submit">Reset Password</button>
                </form>';
            }

            if ($showSuccessMessage) {
                echo '<i><h3 class="success-message">Password reset successful.</h3></i>';
                echo '<button onclick="red()">Go to Login Page</button>';
            }

            if ($showErrorMessage) {
                echo '<h3 class="error-message">User not found. Please <a href="signup.php">sign up</a>.</h3>';
            }
            ?>
        </div>
    </div>
    <script>
        function red(){
            window.location.href="login.php";
        }
    </script>
</body>
</html>
