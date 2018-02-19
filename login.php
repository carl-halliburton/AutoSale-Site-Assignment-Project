<?php
echo "testing login";
if (isset($_POST['submit'])) {
	$username = "";
	$password = "";

	if(!empty($_POST['username']))
		$username=$_POST['username'];
	if(!empty($_POST['password']))
		$password=$_POST['password'];
	
	echo "UN: ".$username." PW: ".$password;
	
	$connection = mysqli_connect("localhost","root","", "vehiclelisting");
	
	$query = "SELECT * FROM seller WHERE username = '".$username. "' AND password = '".$password. "'";
	$result = mysqli_query($connection, $query);
	$row = mysqli_fetch_array($result);

	//YOUR NEEDED VALUES
	$sellerid = $row['sellerid'];
	$fname = $row['fname'];
	$lname = $row['lname'];
	$email = $row['email'];
	
	if(mysqli_num_rows(mysqli_query($connection, $query)) > 0){
		session_start();	
		$_SESSION['id'] = $sellerid;
		$_SESSION['user_fn'] = $fname;
		$_SESSION['user_ln'] = $lname;
		$_SESSION['user_email'] = $email;
		header('Location:seller_account.html');
	}
	else {
		header("Location:login.html?errorMssg=".urlencode("Username and password not found"));
	}
}
?>