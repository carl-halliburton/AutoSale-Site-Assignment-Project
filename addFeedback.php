<?php
//enter feednack into feedback table
$name = $_GET["name"];
$email = $_GET["email"];
$message = $_GET["message"];

session_start();
if (isset($_SESSION['id'])) {
	$sellerid = $_SESSION['id'];
	$id = 0;

	$connection = mysqli_connect("localhost","root","", "vehiclelisting");

	mysqli_query($connection, "INSERT INTO feedback VALUES ('{$id}','{$name}','{$email}','{$message}','{$sellerid}');");

	mysqli_close($connection);
}
else {
	//enter feedback into text file

	//create new text file
	$fh = fopen("feedback.txt", "a");
	
	//write data to file
	fwrite($fh, "Name: " . $name . " Email: " . $email . " Subject: " . $subject . " Message: " . $message . PHP_EOL);

	//Close file
	fclose($fh);	
}

header("location: redirect_feedback.php");
?>