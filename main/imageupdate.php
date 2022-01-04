<?php
session_start();
$img=$_FILES['img']['name'];
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
        else if(empty($img))
        {
            echo '<script>alert("Try again");window.location="../profile.php"</script>';
        }
        else
        {
            $stmt=$conn->prepare("update signup set ProfilePic='$img' where Username='$Username'");
            $stmt->execute();
            move_uploaded_file($_FILES['img']['tmp_name'],"$img");
            echo '<script>alert("Your Profile Pic has been changed");window.location="../profile.php";</script>';
            $stmt->close();
            $conn->close();
        }
    }
?>