<?php
// Start a session (if not already started)
session_start();

// Establish a database connection
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'trekline';

$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data safely
if (isset($_POST['rating']) && isset($_POST['username'])) {
    $rating = $conn->real_escape_string($_POST['rating']);
    $username = $conn->real_escape_string($_POST['username']);
    $comments = $conn->real_escape_string($_POST['comments']);

    // Insert data into the feedback table using prepared statements
    $sql = "INSERT INTO feedback (username, rating, comments) VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $rating, $comments);

    if ($stmt->execute()) {
        // Data inserted successfully
        header("Location: index.php"); // Redirect to the index.html page
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "";
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./img/logo2.png" type="image/x-icon">
    <link rel="shortcut icon" href="./img/logo2.png" type="image/x-icon">
    <title>TrekLine | Feedback</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .feedback-container {
        background-color: #f0f0f0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        padding: 20px;
    }

    .feedback-form {
        background-color: #fff;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        max-width: 400px;
        text-align: left;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    
        .comments textarea {
            width: 100%;
            height: 100px;
            padding: 10px;
        }

        .submit-button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        *{
    margin: 0;
    padding: 0;
}
.rate {
    display:"justify";
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}


    </style>
</head>
<body style="background: linear-gradient(135deg, rgba(255, 0, 0, 0.2), rgba(0, 0, 255, 0.2));">
    <div class="feedback-container">
        <h2>Please provide your valuable Feedback</h2>
        <form class="feedback-form" method="post" action="submit_feedback.php">
            <label><i>Username</i></label>
            <input type="text" name="username" value="<?=  $_SESSION['name'] ?>" readonly><br><br>
        
            <h4>Booking Experience</h4><br>
            <div class="rate" >
    <input type="radio" id="star5" name="rating" value="5" />
    <label for="star5" title="text">★</label>
    <input type="radio" id="star4" name="rating" value="4" />
    <label for="star4" title="text">★</label>
    <input type="radio" id="star3" name="rating" value="3" />
    <label for="star3" title="text">★</label>
    <input type="radio" id="star2" name="rating" value="2" />
    <label for="star2" title="text">★</label>
    <input type="radio" id="star1" name="rating" value="1" />
    <label for="star1" title="text">★</label>
  </div>
  <br>  <br>         
  <br>
            <label>Additional Comments (optional)</label><br>
            <textarea class="comments" name="comments"></textarea><br>
            <button type="submit" class="submit-button">Submit Feedback</button>
        </form>
    </div>

    <script>
        // JavaScript for star rating
        const stars = document.querySelectorAll('input[name="rating"]');
        stars.forEach((star, index) => {
            star.addEventListener('click', () => {
                for (let i = 0; i <= index; i++) {
                    stars[i].checked = true;
                }
                for (let i = index + 1; i < stars.length; i++) {
                    stars[i].checked = false;
                }
            });
        });
    </script>
</body>
</html>
