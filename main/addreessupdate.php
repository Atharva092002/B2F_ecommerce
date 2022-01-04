<?php
session_start();
$address=$_POST['addr'];
$Username = $_SESSION['Username'];
$conn=new mysqli('localhost:3308','root','','signup');
    if ($conn->connect_error)
    {
        die('Connection Failed : '.$conn->connect_error);
    }
    else
    {
        $user=mysqli_query($conn,"SELECT * from signup where Username='$Username'");
        $result=mysqli_num_rows($user);
        if ($result==0)
        {
            echo '<script>alert("Try again");window.location="../profile.php";</script>';
        }
        else if(empty($address))
        {
            echo '<script>alert("Try again");window.location="../profile.php"</script>';
        }
        else
        {
            $stmt=$conn->prepare("update signup set Address='$address' where Username='$Username'");
            $stmt->execute();
            echo '<script>alert("Your Address has been changed");window.location="../profile.php";</script>';
            $stmt->close();
            $conn->close();
        }
    }
?>