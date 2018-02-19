<?php
$id = $_GET['listing'];
$connection = mysqli_connect("localhost","root","", "vehiclelisting");

//$query = "SELECT image FROM listing WHERE listingid=".$id;
//$result = mysqli_query($connection, $query);
//$fileRow = mysqli_fetch_row($result);

//$folder = "C:\\wamp64\\www\\Website\\Images\\";
//unlink($folder.$fileRow['image']);

$query = "Delete FROM listing WHERE listingid = ".$id;
mysqli_query($connection, $query);

mysqli_close($connection);
header("Location:seller_account.html);
?>