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
            transition: transform 0.3s;
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
            transition: border-color 0.3s;
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
            transition: background 0.3s;
        }
        button:hover {
            background: #0056b3;
        }
        .error-message {
            color: red;
            text-align: center;
            padding: 5px;
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
                    <input type="text" id="username" name="username" placeholder="Username">
                </div>
                <div class="textbox">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <button type="submit">Login</button><br><br>
            </form>
            <button onclick="forgotpass()">Forgot Password</button>
            <div class="error-message" id="error-message"></div>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $hostname = 'localhost';
                $dbUsername = 'root';
                $dbPassword = ''; // Update with your MySQL password
                $database = 'trekLine';
                
                // Connect to the database
                $conn = mysqli_connect($hostname, $dbUsername, $dbPassword, $database);

                if (!$conn) {
                    die("<div class='error-message'>Connection failed: " . mysqli_connect_error() . "</div>");
                }

                if (isset($_POST['username']) && isset($_POST['password'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    // Query the database to check credentials
                    $query = "SELECT * FROM users WHERE username = '$username' AND password = MD5('$password')";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) == 1) {
                        if (!isset($_SESSION)) {
                            session_start();
                        }

                        $row = mysqli_fetch_assoc($result);
                        $_SESSION['name'] = $row['username'];

                        header("Location: index.php");
                        exit();
                    } else {
                        echo '<div class="error-message">Wrong credentials. Please try again.</div>';
                    }

                    mysqli_close($conn);
                }
            }
            ?>
        </div>
    </div>
    <script>
        function forgotpass() {
            window.location.href = 'forgotpassword.php';
        }
    </script>
</body>
</html>
