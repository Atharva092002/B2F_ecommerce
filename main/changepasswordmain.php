<?php
$opsw=$_POST['opsw'];
$has_opsw=hash('sha1',$opsw);
$dummy=$opsw;
$npsw=$_POST['npsw'];
$has_npsw=hash('sha1',$npsw);
$rpsw=$_POST['rpsw'];
$usrname=$_POST['usrname'];
$conn=new mysqli('localhost:3308','root','','signup');
    if ($conn->connect_error)
    {
        die('Connection Failed : '.$conn->connect_error);
    }
    else
    {
        $user=mysqli_query($conn,"SELECT * from signup where Password='$has_opsw'");
        $result=mysqli_num_rows($user);
        if ($result<0)
        {
            echo '<script>alert("Try again");window.location="../changepassword.php";</script>';
        }
        else if ($result==0)
        {
            echo '<script>alert("Your old password did not match. If you dont remember your old password please contact site administrator.");window.location="../changepassword.php";</script>';
        }
        else if (empty($opsw))
        {
            echo '<script>alert("Try again");window.location="../changepassword.php";</script>';
        }
        else if (empty($npsw))
        {
            echo '<script>alert("Try again");window.location="../changepassword.php";</script>';
        }
        else if (empty($rpsw))
        {
            echo '<script>alert("Try again");window.location="../changepassword.php";</script>';
        }
        else if ($npsw!=$rpsw)
        {
            echo '<script>alert("New Password and Re-entered Password did not match");window.location="../changepassword.php";</script>';
        }
        else if ($opsw==$npsw)
        {
            echo '<script>alert("New password is same as old password");window.location="../changepassword.php";</script>';
        }
        else
        {
            $stmt=$conn->prepare("update signup set Password='$has_npsw' where Username='$usrname'and Password='$has_opsw'");
            $stmt->execute();
            echo '<script>alert("Your password has been changed");window.location="../changepassword.php";</script>';
            $stmt->close();
            $conn->close();
        }
    }
?>