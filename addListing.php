<?php
session_start();
// Step 1: read HTML form inputs	
	
	$id = 0;
	$sellerId = $_SESSION['id'];
	$type = "";
	$make = "";
	$model = "";
	$year = "";
	$price = "";
	
	if(!empty($_POST['type']))
		$type = $_POST['type'];
	if(!empty($_POST['make']))
		$make = $_POST['make'];	
	if(!empty($_POST['model']))
		$model = $_POST['model'];  
	if(!empty($_POST['year']))
		$year = $_POST['year'];
	if(!empty($_POST['price']))
		$price = $_POST['price'];
	
	$folder="C:\\wamp64\\www\\Website\\Images\\";
	
	$image_path = $folder . basename($_FILES['uploadimage']['name']);

	$image_name = basename($_FILES['uploadimage']['name']);
	
	move_uploaded_file($_FILES['uploadimage']['tmp_name'], $image_path);
		
// Step 2 – Open the Database connection
	$connection = mysqli_connect("localhost","root","", "vehiclelisting");
// Step 3 – Select the Database 

// Step 4 – Run the query on the Movie table through the connection
   mysqli_query($connection, "INSERT INTO listing VALUES ('{$id}','{$type}','{$make}','{$model}','{$year}','{$price}','{$image_name}','{$sellerId}');");

   // Step 5 – Close the database connection
   mysqli_close($connection);
   
   header("location: redirect_add_car.php");
?>