<?php
// Step 1: read HTML form inputs	
	$id = 0;
	$fname = $_GET["firstName"];
	$lname = $_GET["lastName"];	
	$email = $_GET["email"];  
	$phone = $_GET["phone"];
	$address = $_GET["address"];
	$username = $_GET["username"];
	$password = $_GET["password"];
	
// Step 2 – Open the Database connection
	$connection = mysqli_connect("localhost","root","", "vehiclelisting");
// Step 3 – Select the Database 

// Step 4 – Run the query on the Movie table through the connection
   $result = mysqli_query ($connection, "INSERT INTO seller VALUES ('{$id}','{$fname}','{$lname}','{$email}','{$phone}','{$address}','{$username}','{$password}');");
// Step 5 – Close the database connection
   mysqli_close($connection);
   
   header("location: redirect_create_account.php");
?>