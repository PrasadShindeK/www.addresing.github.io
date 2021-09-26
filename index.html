<?php
include("connection.php");
error_reporting(0);
?>
<html>
<head>
<title>insert page
</title>
</head>
<body>
<form action="" method="POST"enctype="multipart/form-data">
RollNo <input type="text" name="rollno" value=""/><br><br>
Name <input type="text" name="name" value=""/><br><br>
Age  <input type="text" name="age" value=""/><br><br>
Class <input type="text" name="class" value=""/> <br><br>
Username <input type="text" name="username" value=""/> <br><br>
Password <input type="text" name="password" value=""/> <br><br>
<input type="file" name="uploadfile" value=""> <br><br>
<input type="submit" name="submit" value="submit"/>

</form>
<?php
if($_POST['submit'])
{
	$rn = $_POST['rollno'];
	$sn = $_POST['name'];
	$sa = $_POST['age'];
	$cl = $_POST['class'];
	$un = $_POST['username'];
	$ps = $_POST['password'];
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "student/".$filename;
	move_uploaded_file($tempname,$folder);

	if($rn!="" && $sn!="" && $sa!="" && $cl!="" && $filename!="" && $un!="" && $ps!="")
	{
		$query = "INSERT INTO STUDENT VALUES('$rn','$sn','$sa','$cl','$folder','$un','$ps')";
		$data = mysqli_query($conn, $query);
		if($data)
		{
			echo"inserted redcord";
		?>
        <a href="display.php">Dispaly</a>
        <?php

		}
		else
		{
			echo"not inserted record";
		}
	}
	else
	{
		echo"ALL fields are required";
	}
}






?>

</body>
</html>
