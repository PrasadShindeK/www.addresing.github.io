<?php
include("connection.php");
error_reporting(0);
$_GET['rn'];
$_GET['sn'];
$_GET['sa'];
$_GET['cl'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update data</title>
</head>
<body>
    <form action=" " method="GET">
     Rroll No <input type="text" name="rollno" value="<?php echo $_GET['rn'] ?>" placeholder="Roll No"/><button><a href="display.php">Record Display</a></button><button><a href="insert.php">Record insert</a></button><br><br>
     Name <input type="text" name="StuName" value="<?php echo $_GET['sn'] ?>" placeholder="Name"/><br><br>
     Age <input type="text" name="Age" value="<?php echo $_GET['sa'] ?>" placeholder="Age"/><br><br>
     Class <input type="text" name="Class" value="<?php echo $_GET['cl'] ?>" placeholder="Class"/><br><br>
     <input type="submit" name="submit" value="update"/><br>
    <?php
    if($_GET['submit'])
    {   
        $rollno = $_GET['rollno'];
        $Name = $_GET['StuName'];
        $age = $_GET['Age'];
        $class = $_GET['Class'];
        $query = "UPDATE student SET name='$Name',Class='$class',age='$age' WHERE rollno='$rollno' ";
        $data = mysqli_query($conn,$query);
        if($data)
        {
            echo"Record Updated Successfully";
            ?>
            <a href="display.php">Display</a>
            <th><button><a href="insert.php">Insert New Record</a></button></th>
            <?php
        }
        else
        {
            echo"Record Not Updated";
        }
    }
    else{
        echo"<font color='green'>Click The Button and Update Record";
    }

    ?>

    </form>
    
</body>
</html>
