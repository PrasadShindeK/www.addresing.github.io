<style>
    td{
        padding: 12px;
    }
</style>
<?php
include('connection.php');
error_reporting(0);
$query = "SELECT * FROM student";
$data= mysqli_query($conn, $query);
$total= mysqli_num_rows($data);

if($total !=0)
{
    ?>
    <table>
      <tr>
        <th>Roll No.</th>
        <th>Image</th>        
        <th>Student Name</th>
        <th>Age</th>
        <th>Class</th>
        <th colspan="2">Operation</th>
        <th><button><a href="insert.php">Insert New Record</a></button></th>
        
      </tr>

    <?php
    while($result= mysqli_fetch_assoc($data))
    {
        echo"<tr>
            <td>".$result['rollno']."</td>
            <td><a href='$result[picsource]'><img src='".$result['picsource']."'height='100' width='100'/></a></td>
            <td>".$result['name']."</td>
            <td>".$result['age']."</td>
            <td>".$result['class']."</td>
            <td><a href='update.php?rn=$result[rollno]&sn=$result[name]&sa=$result[age]&cl=$result[class]'>Edit</a></td>
            <td><a href='delete.php?rn=$result[rollno]'>delete</a></td>
             <tr/>";
    }
}
else
{
    echo"No Record found";
}
?>
    </table>
