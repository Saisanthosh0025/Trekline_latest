

<?php
session_start();

?>
<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "trekline";

// Establish a database connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to fetch all feedback responses from the database
function getFeedback($conn) {
    $sql = "SELECT * FROM feedback";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return [];
    }
}

// Fetch all feedback responses
$feedback = getFeedback($conn);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="./img/logo2.png" type="image/x-icon">
    <link rel="shortcut icon" href="./img/logo2.png" type="image/x-icon">
    <title>TrekLine | Rating</title>
    <style>
        /* Styling for the sidebar */
        .sidebar {
            width: 250px;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            background-color: #333;
            color: #fff;
            padding: 20px;
            overflow-y: auto;
        }

        .sidebar h2 {
            margin: 0;
            padding-bottom: 20px;
            border-bottom: 2px solid #fff;
            font-size: 24px;
        }

        .sidebar ul {
            list-style: none;
            padding: 20px;
        }

        .sidebar li {
            margin-bottom: 10px;
            padding: 10px
        }
        .sidebar li:hover {
            background: grey
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
        }

        .sidebar a:hover {
            background-color: #555;
        }

        /* Logout button */
        .logout-button {
            background-color: #f00;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        /* Content container */
        .content {
            margin-left: 270px;
            padding: 20px;
        }

        /* Optional styling for header and main content */
        h1 {
            font-size: 36px;
            color: #333;
        }

        p {
            font-size: 18px;
            color: #555;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body style="background: linear-gradient(135deg, rgba(70, 130, 180, 0.3), rgba(0, 0, 128, 0.3));">
<div class="sidebar">
        <h2>TrekLine Admin Panel</h2><br><img src="img/logo2.png" alt="Logo" class="logo" width="90px" style="border-radius: 1000px; margin-left:85px ;">
        <ul align="center">
            <li><a href="adminindex.php">Home</a></li>
            <li><a href="adminemergency.php">Emergency Request</a></li>
            <li><a href="admintourbooking.php">Tour Bookings</a></li>
            <li><a href="adminvehiclebooking.php">Vehicle Bookings</a></li>
            <li><a href="adminhotelbooking.php">Hotel Bookings</a></li>
            <li><a href="adminrating.php">Client's Feedback</a></li>
            <li><a href="admincontact.php">Client's contact Request</a></li>
            <li><a href="adminreview.php">Client's Reviews</a></li>
            
        </ul>
        <button class="logout-button" onclick="location.href='adminlogout.php'">Logout</button>
    </div>
    <div class="content">
    <h2>Feedback Responses</h2>

    <?php if (empty($feedback)) { // Check if there are no feedback responses ?>
        <p>No feedback responses are found.</p>
    <?php } else { // Display the table if feedback responses exist ?>
        <!-- Display feedback responses in a table format -->
        <table>
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Rating</th>
                    <th>Comments</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($feedback as $response) { ?>
                    <tr>
                        <td><?= $response['username'] ?></td>
                        <td><?= $response['rating'] ?></td>
                        <td><?= $response['comments'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } ?>
    </div>
</body>
</html>


