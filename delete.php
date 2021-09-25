<?php
include("connection.php");
$rollno = $_GET['rn'];
$query = "DELETE FROM STUDENT WHERE rollno='$rollno'";
$data= mysqli_query($conn,$query);
if($data)
{
    echo"<font color='green'>Record Deleted from Table";
	?>
	<a href="display.php">Dispaly</a>
	<?php
}
else
{
    echo"<font color='red'>Sorry,Delete process failed";
}
?>
