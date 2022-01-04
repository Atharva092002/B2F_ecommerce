<?php
$Username=$_POST['Username'];
$Password=$_POST['Password'];
$conn=new mysqli('localhost:3308','root','','admin');
if ($conn->connect_error)
{
    die('Connection Failed : '.$conn->connect_error);
}
else
{
    $query="select * from admin where AdminUsername='$Username' and AdminPassword='$Password'";
    $result=mysqli_query($conn,$query);
    $count=mysqli_num_rows($result);
    if ($count>0)
    {
       header("Location: adminhomepage.php");
    }
    else
    {
        echo '<script>alert("Username or Password is incorrect");window.location="../admin/adminpg.php";</script>';
    }
}
?>