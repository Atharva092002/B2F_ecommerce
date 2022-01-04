<?php
$Username=$_POST['Username'];
$Transaction=$_POST['Transaction'];
$Status=$_POST['Status'];
$conn=new mysqli('localhost:3308','root','','orders');
    if ($conn->connect_error)
    {
        die('Connection Failed : '.$conn->connect_error);
    }
    else
    {
        $user=mysqli_query($conn,"SELECT 'Username' from orders where 'Username'='$Username'");
        $result=mysqli_num_rows($user);
        $stmt=$conn->prepare("update orders set Status='$Status' where Username='$Username' and Transaction_id='$Transaction'");
        $stmt->execute();
        echo '<script>alert("The Status has been changed");window.location="../admin/updatestatus.php";</script>';
        $stmt->close();
        $conn->close();
    }
?>

