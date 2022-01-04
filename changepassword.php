<!DOCTYPE html>
<html lang="en">
<head>
  <title>Change Password</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>
    var username = sessionStorage.getItem("username");
    if (username==null)
    {
      alert("To access our website, you need to login first");
      window.location="login.html";
    }
  </script>
  <?php
  session_start();
  $Username = $_SESSION['Username'];
  ?>
  <style>
    .container 
    {
        padding: 16px;
        background-color: white;
    }
    body 
    {
        font-family: Times New Roman;
    }
    input[type=password]
    {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }
  .hero-text h1{
    position: absolute;
    top: 200px;
    left: 50%;
    transform: translate(-50%,-50%);
    font-family: 'Times New Roman', Times, serif;
    color:white;
    font-size: 30px;
  }
</style>
</head>
<body>
<h2 style="text-align: center; font-family:'Times New Roman'">Change Password</h3>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li style="font-family: 'Times New Roman';"class="active"><a href="homepage.html">Home</a></li>
      <li class="dropdown" style="font-family: 'Times New Roman'"><a class="dropdown-toggle" data-toggle="dropdown">Services<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li style="font-family: 'Times New Roman'"><a href="cropinfo.html">Crop Information <span class="glyphicon glyphicon-search"></span></a></li>
          <li style="font-family: 'Times New Roman'"><a href="croppurchase.html">Crop Purchase <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
          <li><a href="#"></a></li>
        </ul>
      </li>
      <li style="font-family: 'Times New Roman'"><a href="contactus.html">Contact us</a></li>
      <li style="font-family: 'Times New Roman'"><a href="aboutus.html">About us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown" style="font-family: 'Times New Roman'"><a class="dropdown-toggle" data-toggle="dropdown">Hi, <script>document.write(username);</script><span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li style="font-family: 'Times New Roman'"><a href="profile.php">Profile </a></li>
        <li style="font-family: 'Times New Roman'"><a href="changepassword.php">Change Password  <span class="glyphicon glyphicon-lock"></span></a></li>
        <li><a href="#"></a></li>
      </ul>
      <li style="font-family: 'Times New Roman'"><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<div class="container">
<form action="main/changepasswordmain.php" method="POST">    
    <center><h4 style="color:maroon">Please enter information below to change your password</h4></center>
    <label for="opsw"><b>Old Password</b></label><br>
    <input type="password" placeholder="Enter your old password" name="opsw" id="opsw" required>
    <label for="npsw"><b>New Password</b></label><br>
    <input type="password" placeholder="Enter new password" name="npsw" id="npsw" required>
    <label for="rpsw"><b>Re-enter Password</b></label><br>
    <input type="password" placeholder="Re-enter new password" name="rpsw" id="rpsw" required>
    <input type="hidden" name="usrname" id="usrname" value="<?php echo $Username; ?>">
    <center><input type="submit" value="Update Password" class="btn btn-success btn-block btn-lg" name="submit"></center>
</form>
</div>
</body>
</html>