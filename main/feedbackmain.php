<?php
session_start();
$exp=$_POST['rating1'];
$behav=$_POST['rating2'];
$pricing=$_POST['rating3'];
$quality=$_POST['rating4'];
$recomend=$_POST['rating5'];
$Username=$_SESSION['Username'];
$trans=$_SESSION['Trans'];
$feedback=$_POST['commentText'];
$conn=new mysqli('localhost:3308','root','','orders');
if ($conn->connect_error)
    {
        die('Connection Failed : '.$conn->connect_error);
    }
    else
    {
        $user=mysqli_query($conn,"SELECT * from orders.feedback where Username='$Username' and transaction_ids='$trans'");
        $result=mysqli_num_rows($user);
        if($result==0)
        {
        $stmt=$conn->prepare("insert into feedback(Username,transaction_ids,feedback,overall,behaviour,pricing,quality,recommend) values(?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('ssssssss',$Username,$trans,$feedback,$exp,$behav,$pricing,$quality,$recomend);
        $stmt->execute();
        echo '<script>alert("Thank you for your feedback");window.location="../feedback.php";</script>';
        $stmt->close();
        $conn->close();
        }
        else
        {
            echo '<script>alert("Feedback for this product has already been submitted");window.location="../feedback.php";</script>';
        }
    }
?>