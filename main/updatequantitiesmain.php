<?php
$id=$_POST['id'];
$Quantity=$_POST['Quantity'];
$conn=new mysqli('localhost:3308','root','','croppurchase');
    if ($conn->connect_error)
    {
        die('Connection Failed : '.$conn->connect_error);
    }
    else
    {
        $user=mysqli_query($conn,"SELECT * from croppurchase where 'id'='$id'");
        $result=mysqli_num_rows($user);
        if (is_numeric($id)!=1)
        {
            echo '<script>alert("Try again");window.location="../admin/updatequantities.php";</script>';
        }
        else if (is_numeric($Quantity)!=1 or $Quantity>10000)
        {
            echo '<script>alert("Try again");window.location="../admin/updatequantities.php";</script>';
        }
        else
        {
            $stmt=$conn->prepare("update croppurchase set Quantity=$Quantity where id=$id");
            $stmt->execute();
            echo '<script>alert("The information has been updated in our Database");window.location="../admin/updatequantities.php";</script>';
            $stmt->close();
            $conn->close();
        }
    }
?>