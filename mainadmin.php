
<?php
 session_start();
$error_message = ''; // Initialize the error message

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Database connection settings (You need to set your own values here)
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "trekline";

    // Establish a database connection
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
        $username    =  $_POST['username'];
        $password    =  $_POST['password'];
    
    $rs    = $conn->query( "SELECT * FROM users WHERE username='" . $username . "' AND password='" .  MD5($password) . "'")  ;
    $numrow    = $rs->num_rows;
        $row = $rs->fetch_assoc();
    $_SESSION['name']  = $row['username'];
    }
    // Get user input
    $username = $_POST["username"];
    $password = $_POST["password"];
    
       
    
    // Perform a database query to check credentials
    $query = "SELECT * FROM adminuser WHERE username = '$username' AND password = MD5('$password')";
    $result = $conn->query($query);

    if ($result->num_rows === 1) {
        // Successful login
        header("Location: ./admin/adminindex.php");
        exit();
    } else {
        // Failed login
        $error_message = "Wrong credentials. Please try again.";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/logo2.png" type="image/x-icon">
    <link rel="shortcut icon" href="./img/logo2.png" type="image/x-icon">
    <title>TrekLine Vacations & Rentals | Admin Login</title>

    <style>
        /* Your existing CSS styles here... */

        .center-box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(255, 255, 255, 0.0000000000000000004); /* 40% transparent white background */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .center-box a {
            text-decoration: none;
            color: #c300ff;
            padding: 10px 20px;
            margin: 10px;
            border: 1px solid #c300ff;
            border-radius: 5px;
            display: inline-block;
        }
        #video-background {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
         z-index: -1; 
        }


        .center-box a:hover {
            background: #c300ff;
            color: #fff;
        }
        body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
        }



.container {
    width: 300px;
}

.login-box {
    align="center"
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
    color: white;
}

.textbox {
    position: relative;
    margin: 15px 0;
}

input {
    width: 50%;
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
    width: 50%;
    align="center";
    transition: background 0.3s; /* Add a transition for a background color change */
}

button:hover {
    background: #0056b3;
}

		.error-message {
            background: ; /* 40% transparent white background */
            color: red;
            text-align: center;
            padding: 5px; /* Add some padding to the error message container */
        }
        
    </style>
    <!-- Your existing head section... -->
</head>
   
<body>
<video autoplay loop muted id="video-background">
        <source src="img/bg.mp4" type="video/mp4">
    </video>
    <div class="container">
        <div class="center-box">
            <h1>TrekLine Vacations & Rentals Admin Login</h1>
            <h3>Please Login</h3>
            <form method="POST">
                <div class="textbox">
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div class="textbox">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <?php if ($error_message) : ?>
                    <div class="error-message"><?= $error_message ?></div>
                <?php endif; ?>
              
                <button type="submit">Sign In</button>
                
            </form>
        </div>
    </div>
</body>
</html>
