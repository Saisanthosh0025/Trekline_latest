<?php  
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="./img/logo2.png" type="image/x-icon">
    <link rel="shortcut icon" href="./img/logo2.png" type="image/x-icon">
    <title>Booking Form</title>
    <style>
         .navbar {
            overflow: ;
        }

        .header a {
            float: right; /* Move navigation links to the right */
            display: block;
            color: black;
            text-align: left;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #faf7af;
            color: black;
        }

        .header {
            background: url('img/img5.jpg') no-repeat;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            -ms-background-size: cover;
            background-attachment: fixed;
            height: 60vh;
            padding: 20px;
            text-align: right;
        }

        .content {
            padding: 20px;
        }

        .content {
            transition: transform 0.3s;
        }
        .content2 {
            background: url('img/img2.jpg') no-repeat;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            -ms-background-size: cover;
            background-attachment: fixed;
            height: 20vh;
            padding: 60px;
            text-align: center;
        }
        footer {
            text-align: center;
            background-color: #833ab4;
            color: white;
            display: block;
        }
        .dropdown {
            display: inline-block;
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: bisque;
            min-width: 60px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            text-align: center;
        }

        .dropdown .arrow {
            content: "\25BC";
            margin-left: 5px;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            padding: 12px 16px;
            text-decoration: none;
            display: flex;
            color: black;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }
         .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            top: 0;
            left: -250px; /* Initially hidden */
            background-color: black;
            overflow-x: hidden;
            transition: 0.5s;
        }

        .sidebar-content {
            
            padding: 16px;
            color: transparent;
        }

        #openCloseBtn {
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 1;
        }
        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
        }

        th, td {
            text-align: center;
            padding: 12px;
            text-align: left;
        }

        th {
            text-align: center;
            background-color: #833ab4;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #d3d3d3;
        }

        a {
            text-decoration: none;
            color: #008CBA;
        }

        a:hover {
            color: #005b96;
        }
        input {
    width: 90%;
    align-items: center;
    padding: 9px;
    border: 1px solid #ccc;
    border-radius: 5px;
    transition: border-color 0.3s; /* Add a transition for a border color change */
}

input:focus {
    border-color: #c300ff;
}
.buttonsx {

    background: #c300ff;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 15px;
    cursor: pointer;
    width: 20%;
    transition: background 0.3s; /* Add a transition for a background color change */
}

.buttonsx:hover {
    background: #0056b3;
}

		.error-message {
            background: ; /* 40% transparent white background */
            color: red;
            text-align: center;
            padding: 5px; /* Add some padding to the error message container */
        }

        /* Style the select element */
.custom-dropdown {
    width: 93%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background: #fff;
    font-size: 16px;
    color: #333;
    transition: border-color 0.3s; /* Add a transition for a border color change */
}

.custom-dropdown:focus {
    border-color: #c300ff;
}

/* Style the dropdown arrow indicator */
.custom-dropdown::after {
    content: "\25BC"; /* Downward pointing arrow character */
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 14px;
    pointer-events: none;
}

.custom-dropdown option {
    background: #fff;
    color: #333;
}

    </style>
</head>
<body>
    <div class="header">
   
        <div class="navbar">
            <img src="img/logo2.png" alt="Logo" class="logo" width="60px" style="border-radius: 1000px; ;">
            <div id="mySidebar" class="sidebar">
       
        
            </div>
            <div class="dropdown">
                <a href="index.php"><b>Home</a>
            </div>
            <div class="dropdown">
                <a href="about.php">About</a>
            </div>
            <div class="dropdown">
                <a href="services.html">Services<span class="arrow"></span></a>
                <div class="dropdown-content">
                    <a href="touragency.html">Tour Agency</a>
                    <a href="vehiclerentals.html">Vehicle Rentals</a>
                    <a href="hotelbooking.html">Hotel Bookings</a>
                </div>
            </div>
            <div class="dropdown">
                <a href="gallery.php">Gallery</a>
            </div>
            <div class="dropdown">
                <a href="contact.php">Contact</a>
            </div>
            <div class="dropdown">
                <a href="emergency.php">Emergency</b></a>
            </div>
            <h1 align="center">TrekLine Vacations & Rentals</h1>
        </div>
        
        </div>
        
        
    <h1 align="center" style="color: rgb(255, 102, 0);">Tour Booking Form</h1>
    <form id="tourForm" method="post" action="insertdata.php">
        <table border="1">
        <tr>
            <th>Details</th>
            <th>Input</th>
        </tr>
        <tr>
            <td><label for="name">Name:</label></td>
            <td><input type="text" name="name"  id="name"></td>
        </tr>
        <tr>
            <td><label for="text">Mobile Number:</label></td>
            <td><input type="text" id="num" name="num" required></td>
        </tr>
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="email" id="email" name="email" required></td>
        </tr>
        <tr>
            <td><label for="packageSelect">Select a Package:</label></td>
            <td>
                <select id="packageSelect" name="package" class="custom-dropdown"required>
                    <option value="">Select a package</option>
                    <option value="Adventure in the Amazon">Adventure in the Amazon</option>
                    <option value="Explore Paris">Explore Paris</option>
                    <option value="Romantic Getaway in Venice">Romantic Getaway in Venice</option>
                    <option value="Historical Tour of Athens">Historical Tour of Athens</option>
                    <option value="Safari Adventure in Africa">Safari Adventure in Africa</option>
                    <option value="Majestic Taj Mahal Tour">Majestic Taj Mahal Tour</option>
                    <option value="Exotic Kerala Backwaters">Exotic Kerala Backwaters</option>
                    <option value="Golden Triangle Tour">Golden Triangle Tour</option>

                    <option value="Spiritual Journey to Varanasi">Spiritual Journey to Varanasi</option>
                    <option value="Adventure in the Himalayas">Adventure in the Himalayas</option>


                    <!-- Add more package options as needed -->
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="persons">Number of Persons:</label></td>
            <td><input type="number" id="persons" name="persons" min="1" required></td>
            
        </tr>
        <tr>
            <td><label for="price">Price:</label></td>
            <td><input type="text" id="price" name="price" readonly> <button class="buttonsx"type="button" onclick="calculatePrice()">Calculate Price</button></td>
                
        </tr>
        
        <tr>
            <td><button class=" buttonsx"type="reset">Reset</button></td>
            
            <td><button class="buttonsx"type="submit" value="book">Submit</button></td>
            
        </tr>
    </table>
    </form>
    
    <footer>
        &copy; 2023 TrekLine Vacations & Rentals. All rights reserved.
    </footer>

    <script>
        // JavaScript to update the price based on the selected package and number of persons
        const packageSelect = document.getElementById("packageSelect");
        const priceInput = document.getElementById("price");
        const personsInput = document.getElementById("persons");

        // Price data for packages
        const packagePrices = {
            "Adventure in the Amazon": 2500,
            "Explore Paris": 1800,
            "Romantic Getaway in Venice": 2200,
            "Historical Tour of Athens": 1950,
            "Safari Adventure in Africa": 3300,
            "Majestic Taj Mahal Tour": 1200,
            "Exotic Kerala Backwaters": 1800,
            "Golden Triangle Tour": 2300,
            "Spiritual Journey to Varanasi": 1500,
            "Adventure in the Himalayas": 2800,

            // Add more package prices here
        };

        function calculatePrice() {
            const selectedPackage = packageSelect.value;
            const numberOfPersons = parseInt(personsInput.value, 10);
            if (selectedPackage in packagePrices && !isNaN(numberOfPersons)) {
                const totalPrice = packagePrices[selectedPackage] * numberOfPersons;
                priceInput.value = `$${totalPrice}`;
            } else {
                priceInput.value = ""; // Clear the price if the package is not found or the number of persons is invalid
            }
        }
    </script>
    <script>
        function openCloseSidebar() {
        var sidebar = document.getElementById("mySidebar");
        if (sidebar.style.width === "0px" || sidebar.style.width === "") {
            sidebar.style.width = "250px";
            sidebar.style.left = "0";
        } else {
            sidebar.style.width = "0";
            sidebar.style.left = "-250px";
        }
    }

    function closeSidebar() {
        var sidebar = document.getElementById("mySidebar");
        sidebar.style.width = "0";
        sidebar.style.left = "-250px";
    }
    document.addEventListener('DOMContentLoaded', function() {
    const logoutButton = document.getElementById('logout-btn');

    // Check if the user is logged in (you should set a session variable in PHP)
    const isLoggedIn = true; // Replace with your logic to check if the user is logged in

    // Show/hide the logout button based on the user's login status
    if (isLoggedIn) {
        logoutButton.style.display = 'block';
    } else {
        logoutButton.style.display = 'none';
    }

    // Add an event listener for the logout button
    logoutButton.addEventListener('click', function() {
        // Redirect to the logout script (logout.php) to destroy the session
        window.location.href = 'logout.php';
    });
});

</body>
</html>
