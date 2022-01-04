<?php
session_start();
$Username=$_POST['Username'];
$Password=$_POST['Password'];
$New_password=hash('sha1',$Password);
$_SESSION['Username'] = $Username;
?>
<!DOCTYPE html>
<html lang="en">
<script>
    function transmit()
    {
        var username="<?php echo $Username; ?>"
        document.write(username)
        sessionStorage.setItem("username", username);
        location.href = "../homepage.html";
    }
</script>
<body onload="transmit()">
</body>
</html>
<?php
$conn=new mysqli('localhost:3308','root','','signup');
if ($conn->connect_error)
{
    die('Connection Failed : '.$conn->connect_error);
}
else
{
    $query="select * from signup where Username='$Username' and Password='$New_password'";
    $result=mysqli_query($conn,$query);
    $count=mysqli_num_rows($result);
    if ($count>0)
    {
        //header("Location: homepage.html");
    }
    else
    {
        echo '<script>alert("Username or Password is incorrect");window.location="../html/login.html";</script>';
    }
}
?>