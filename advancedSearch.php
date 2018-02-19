<?php
$type = "";
$make = "";
$model = "";

if(!empty($_POST['bodyType']))
	$type = $_POST['bodyType'];

if(!empty($_POST['make']))
	$make = $_POST['make'];

if(!empty($_POST['model']))
	$model = $_POST['model'];

$connection = mysqli_connect("localhost","root","", "vehiclelisting");

//query database
if ($make != "" && $model == "" && $type == "") //make search
	$query = "SELECT * FROM listing WHERE make LIKE '%" . $make . "%'";
else if ($model != "" && $make == "" && $type == "") //model search
	$query = "SELECT * FROM listing WHERE model LIKE '%" . $model . "%'";
else if ($type != "" && $make == "" && $model == "") //make search
	$query = "SELECT * FROM listing WHERE type LIKE '%" . $type . "%'";
else if ($type != "" && $make != "" && $model == "") //type and make search
	$query = "SELECT * FROM listing WHERE make LIKE '%" . $make ."%' AND type LIKE '%" . $type  ."%'";
else if ($make != "" && $model != "" && $type != "")//make, model, type search	
	$query = "SELECT * FROM listing WHERE make LIKE '%" . $make ."%' AND model LIKE '%" . $model  
											     ."%' AND type LIKE '%" . $type  ."%'"; 

$result = mysqli_query($connection, $query);


//display results
	echo "Search results" . "<br>";
	if(mysqli_num_rows($result)>0){
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			echo $row['make']." ".$row['model']." ".$row['type']." ".$row['year']." ";
			echo "<a href=\"display_listing.html?id=".$row['listingid']."\">Display</a>";
			echo "<br>";
		}
	}
	else
		echo "No results found";
	mysqli_close($connection);
?>