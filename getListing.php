<?php
// Step 1 – Open the Database connection
	$connection = mysqli_connect("localhost","root","", "vehiclelisting");
// Step 2 – Select the Database 
	// mysql_select_db("jobseeker", $connection);
// Step 3 – Run the query on the employer table through the connection
   $result = mysqli_query ($connection, "select * from listing");
// Step 4 – Read data from table
   while($output = mysqli_fetch_row($result))
 echo $output[0]. " ".$output[1]. " " .$output[2]. " " .$output[3]. " " .$output[4]. " " 
                     .$output[5]. " " .$output[6]. " " .$output[7]. "<br/>" ;
 mysqli_close($connection);
// Step 5 – Close the database connection
// mysqli_close($connection);
?>