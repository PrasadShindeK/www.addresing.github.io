<?php
session_start();
error_reporting(0);
include('connection.php');
$userprofile =$_SESSION['username'];
if($userprofile==true)
{
	
}
else
{
	header('location:login.php');
}



$query ="SELECT * FROM student WHERE username='$userprofile'";
$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);
echo "Welcome  ".$result['name'];

?>
<p align="justify" style="border: 2px solid gray;padding: 2px 2px">
	<img src="<?php echo $result['picsource']?>" height="90" width="90" align="left" >
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta numquam labore dignissimos necessitatibus. Reiciendis vero error dicta facilis ea architecto quasi cumque. Excepturi ratione laborum ducimus reprehenderit veritatis vitae nam.Excepturi ratione laborum ducimus reprehenderit veritatis vitae nam Excepturi ratione laborum ducimus reprehenderit conseterure veritatis.

Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta numquam labore dignissimos necessitatibus. Reiciendis vero error dicta facilis ea architecto quasi cumque. Excepturi ratione laborum ducimus reprehenderit veritatis vitae nam.Excepturi ratione laborum ducimus reprehenderit veritatis vitae nam Excepturi ratione laborum ducimus reprehenderit conseterure veritatis.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta numquam labore dignissimos necessitatibus. Reiciendis vero error dicta facilis ea architecto quasi cumque. Excepturi ratione laborum ducimus reprehenderit veritatis vitae nam.Excepturi ratione laborum ducimus reprehenderit veritatis vitae nam Excepturi ratione laborum ducimus reprehenderit conseterure veritatis.
</p>
<a href="logout.php">Logout</a>
