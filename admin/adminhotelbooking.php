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
session_start();
 
$errormsg = '';
$action = "add";

$name='';
$email='';
$num='';
$persons='';
$day='';
$price='';
$booking_id='';
$booking_date='';
$chkin='';
$chkout='';
if(isset($_POST['save']))
{

$name= mysqli_real_escape_string($conn,$_POST['name']);
$email= mysqli_real_escape_string($conn,$_POST['email']);
$num= mysqli_real_escape_string($conn,$_POST['num']);
$persons= mysqli_real_escape_string($conn,$_POST['persons']);
$day= mysqli_real_escape_string($conn,$_POST['day']);
$price= mysqli_real_escape_string($conn,$_POST['price']);
$booking_id= mysqli_real_escape_string($conn,$_POST['booking_id']);
$booking_date= mysqli_real_escape_string($conn,$_POST['booking_date']);
$status= mysqli_real_escape_string($conn,$_POST['status']);
$chkin= mysqli_real_escape_string($conn,$_POST['chkin']);
$chkout= mysqli_real_escape_string($conn,$_POST['chkout']);
   

 if($_POST['action']=="add")
 {
 
  $sql = $conn->query("INSERT INTO hotels   VALUES ('$name','$email','$persons','$day','$price','$booking_id','$booking_date','$status','$num','$chkin','$chkout'  )") ;
    
    echo '<script type="text/javascript">window.location="adminhotelbooking.php?act=1";</script>';
 
 }else
  if($_POST['action']=="update")
 {
 $name = mysqli_real_escape_string($conn,$_POST['name']);	
   $sql = $conn->query("UPDATE  hotels  SET  email  = '$email', persons   = '$persons' , day ='$day ' , price='$price' , booking_id='$booking_id' , booking_date='$booking_date', status='$status', num='$num'  WHERE  booking_id  = '$booking_id'");
   echo '<script type="text/javascript">window.location="adminhotelbooking.php?act=2";</script>';
 }



}


if(isset($_GET['action']) && $_GET['action']=="delete"){

$conn->query("delete from hotels    WHERE booking_id='".$_GET['booking_id']."'");
header("location: adminhotelbooking.php?act=3");

}


$action = "add";
if(isset($_GET['action']) && $_GET['action']=="edit" ){
$booking_id = isset($_GET['booking_id'])?mysqli_real_escape_string($conn,$_GET['booking_id']):'';

$sqlEdit = $conn->query("SELECT * FROM hotels WHERE booking_id='".$booking_id."'");
if($sqlEdit->num_rows)
{
$rowsEdit = $sqlEdit->fetch_assoc();
extract($rowsEdit);
$action = "update";
}else
{
$_GET['action']="";
}

}


if(isset($_REQUEST['act']) && @$_REQUEST['act']=="1")
{
$errormsg = "<div class='alert alert-success'><strong>Success </strong>persons Rental Booking details Added successfully</div>";
}else if(isset($_REQUEST['act']) && @$_REQUEST['act']=="2")
{
$errormsg = "<div class='alert alert-success'><strong>Success!</strong>persons Rental Booking Edited successfully</div>";
}
else if(isset($_REQUEST['act']) && @$_REQUEST['act']=="3")
{
$errormsg = "<div class='alert alert-success'><strong>Success!</strong>persons Rental Booking details Deleted successfully</div>";
}

?>

 


    
 
 <!DOCTYPE html>
    <html lang="en">

    <head>
       
       <link rel="icon" href="logo2.png" type="image/x-icon">
    <link rel="shortcut icon" href="logo2.png" type="image/x-icon">
    <title>TrekLine persons hotels</title>
    <style>
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

        
        .logout-button {
            background-color: #f00;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        
        .content {
            margin-left: 115px;
            padding: 20px;
        }

        
        h1 {
            font-size: 36px;
            color: #333;
        }

        p {
            font-size: 18px;
            color: #555;
        }
        
.content-wrapper {
    background-color: #fff;
    padding: 20px;
    border-radius: 4px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.page-head-line {
    font-size: 24px;
    color: #333;
    margin: 0 0 20px;
}

.alert {
    padding: 15px;
    background-color: #f2dede;
    color: #a94442;
    border: 1px solid #a94442;
    border-radius: 4px;
    margin-bottom: 20px;
}

.alert-success {
    background-color: #dff0d8;
    color: #3c763d;
    border-color: #d6e9c6;
}

.panel-heading {
    background-color: #333;
    color: #fff;
    font-size: 18px;
    padding: 15px;
}

.panel-body {
    padding: 20px;
}

/* Apply styles to the table */
table {
    width: 101%;
    border-collapse: collapse;
    border-spacing: 0;
}

table th, table td {
    padding: 10px;
    text-align: left;
}
th {
  background-color: #c483ee;
  color: white;
}
tr:nth-child(even) {background-color: #f2f2f2;}


/* Apply styles to form elements */
.form-group {
    margin-bottom: 15px;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.btn {
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    border-radius: 4px;
}

.btn-primary {
    background-color: #007bff;
    color: #fff;
}

.btn-primary:hover {
    background-color: #0056b3;
}

/* Style the action buttons in the table */
.btn-xs {
    padding: 5px 10px;
    font-size: 14px;
}

.btn-success {
    background-color: #5bc0de;
    color: #fff;
}

.btn-danger {
    background-color: #d9534f;
    color: #fff;
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
        <div class="wrapper">

            
            <div class="content-wrapper">
                  <section class="content">
                    <div class="col-md-12">
                        <h1 class="page-head-line"> Hotel Room Bookings Admin Dashboard
						
						</h1>
 <h3 align="center">                    
<?php

echo $errormsg;
?>
</h3>
                    </div>
 
				
				
				
        <?php 
		 if(isset($_GET['action']) && @$_GET['action']=="add" || @$_GET['action']=="edit")
		 {
		?>
		
			 
                <div class="row">
				   <div class="col-md-8 offset-md-2">
                    
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           <?php echo ($action=="add")? "Add Hotel Booking": "Edit Hotel Booking"; ?>
                        </div>
						<form action="adminhotelbooking.php" method="post" id="signupForm1" class="form-horizontal">
                        <div class="panel-body">
						
						
						
							<div class="form-group">
								<label class="col-sm-2 control-label" for="booking_id"> Booking Id  </label>
								<div class="col-sm-10">
	                        <input type="text" class="form-control" id="booking_id" name="booking_id" value="<?php echo $booking_id;?>"  />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="booking_date"> Booking Date </label>
								<div class="col-sm-10">
	                        <input type="text" class="form-control" id="booking_date" name="booking_date" value="<?php echo $booking_date;?>"  />
								</div>
							</div>						
						<div class="form-group">
								<label class="col-sm-2 control-label" for="name">Name</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="name" name="name" value="<?php echo $name;?>"  />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="email"> Email</label>
								<div class="col-sm-10">
	                        <textarea class="form-control" id="email" name="email"><?php echo $email ;?></textarea >
								</div>
                                <div class="form-group">
								<label class="col-sm-2 control-label" for="num"> Number</label>
								<div class="col-sm-10">
	                        <textarea class="form-control" id="num" name="num"><?php echo $num ;?></textarea >
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="persons">persons</label>
								<div class="col-sm-10">
								<input type="text" class="form-control" id="persons" name="persons" value="<?php echo $persons;?>"  /> 
							</div>
								
								
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="day">Number of Days </label>
								<div class="col-sm-10">
	                        <input type="text" class="form-control" id="day" name="day" value="<?php echo $day;?>"  />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="chkin">Check In Date </label>
								<div class="col-sm-10">
	                        <input type="date" class="form-control" id="chkin" name="chkin" value="<?php echo $chkin;?>"  />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="chkout">Check Out Date </label>
								<div class="col-sm-10">
	                        <input type="date" class="form-control" id="chkout" name="chkout" value="<?php echo $chkout;?>"  />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="price"> Price </label>
								<div class="col-sm-10">
	                        <input type="text" class="form-control" id="price" name="price" value="<?php echo $price;?>"  />
								</div>
							</div>
                            <div class="form-group">
								<label class="col-sm-2 control-label" for="status"> Status </label>
								<div class="col-sm-10">
	                        <input type="text" class="form-control" id="status" name="status" value=""  />
								</div>
							</div>
							

							
							 
						
						<div class="form-group">
								<div class="col-sm-8 col-sm-offset-2">
								<input type="hidden" name="id" value="<?php echo $name;?>">
								<input type="hidden" name="action" value="<?php echo $action;?>">
								
									<button type="submit" name="save" class="btn btn-primary">Save </button>
								</div>
							</div>
                         
                           
                           
                         
                           
                         </div>
							</form>
							
                        </div>
                            </div>
            
			  </div>
              
               

			   
			   
		 


			   
		<?php
		}else{
		?>
		
		 
		 
		 
		<div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Hotel Bookings
                        </div>
                        <div class="panel-body">
                             <div style="overflow-x:auto;" class="table-sorting table-responsive">

                                <table  class="table table-striped table-bordered table-hover" id="tSortable22">
                                    <thead>
                                        <tr>
                                            <th>SNo</th>
                                            <th>Booking Id</th>
											<th>Booking Date</th>
                                            <th>Name</th>
											<th>Email</th>
                                            <th>Number</th>
                                            <th>persons</th>
											<th>Number of days</th>
											<th>Check In date</th>
											<th>Check Out date</th>
											<th>Prices</th>
											<th>Status</th>

											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$sql = "select * from hotels ";
									$q = $conn->query($sql);
									$i=1;
				while($r = $q->fetch_assoc())
									{
									echo '<tr>
                                            <td>'.$i.'</td>
                                            <td>'.$r['booking_id'].'</td>
                                            <td>'.$r['booking_date'].'</td>
											<td>'.$r['name'].'</td>
											<td>'.$r['email'].'</td>
                                            <td>'.$r['num'].'</td>
											<td>'.$r['persons'].'</td>
											<td>'.$r['day'].'</td>
											<td>'.$r['chkin'].'</td>
											<td>'.$r['chkout'].'</td>
											<td>'.$r['price'].'</td>
											<td>'.$r['status'].'</td>
                                            
											  
											<td>
											<a href="adminhotelbooking.php?action=edit&booking_id='.$r['booking_id'].'" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-edit">&#x270E;</span></a>
											
											<a onclick="return confirm(\'Are you sure you want to delete this record\');" href="adminhotelbooking.php?action=delete&name='.$r['name'].'" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove">&#xe872;</span></a> </td>
                                        </tr>';
										$i++;
									}
									?>
									
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     
	 
		
		<?php
		}
		?>
				
			</section>	
            
            </div>
     </div>
   
        
    </div>
    </body>

    </html>

 