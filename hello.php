<?php
include("connection.php");
$query = "INSERT INTO STUDENT VALUES('3','nagesh shinde','32','mcom')";
$data = mysqli_query($conn, $query);
if($data)
{
	echo"inserted redcord";
}
else{
	echo"not inserted record";
}
?>