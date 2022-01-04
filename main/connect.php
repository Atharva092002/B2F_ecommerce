<?php
$Name=$_POST['Name'];
$Username=$_POST['Username'];
$Password=$_POST['Password'];
$Email=$_POST['EmailId'];
$New_pass=hash('sha1',$Password);
$conn=new mysqli('localhost:3308','root','','signup');
if ($conn->connect_error)
{
    die('Connection Failed : '.$conn->connect_error);
}
else
{
    $user=mysqli_query($conn,"SELECT Username from signup where Username='$Username'");
    $result=mysqli_num_rows($user);
    if ($result>0)
    {
        echo '<script>alert("Sorry, this username already exists. Please select other usernames.");window.location="../html/login.html";</script>';
    }
    else if (empty($Name))
    {
        echo '<script>alert("Try again");window.location="../html/login.html";</script>';
    }
    else if (empty($Username))
    {
        echo '<script>alert("Try again");window.location="../html/login.html";</script>';
    }
    else if (empty($Password))
    {
        echo '<script>alert("Try again");window.location="../html/login.html";</script>';
    }
    else if (empty($Email))
    {
        echo '<script>alert("Try again");window.location="../html/login.html";</script>';
    }
    else if(strlen($Password)<8 or strlen($Password)>20)
    {
        echo '<script>alert("A password should have 8 to 20 characters");window.location="../html/login.html";</script>';
    }
    else if(!preg_match("#[0-9]+#", $Password ))
    {
        echo '<script>alert("A Password should have a number");window.location="../html/login.html";</script>';
    }
    else if(!preg_match("#[A-Z]+#", $Password ))
    {
        echo '<script>alert("A assword should have one capital letter");window.location="../html/login.html";</script>';
    }
    else if( !preg_match("#\W+#", $Password ))
    {
        echo '<script>alert("A assword should have one special cheacter");window.location="../html/login.html";</script>';
    }
    else
    {
    $stmt=$conn->prepare("insert into signup(Name,Username,Password,Email) values(?, ?, ?, ?)");
    $stmt->bind_param('ssss',$Name,$Username,$New_pass,$Email);
    $stmt->execute();
    echo '<script>alert("Your account has been created. Please login to go to your homepage");window.location="../html/login.html";</script>';
    $stmt->close();
    $conn->close();
    }
}
?>