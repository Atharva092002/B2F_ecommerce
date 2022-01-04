<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>
    $(function(){
    $('.space').load('templates/footer.html');
    }); 
      $(function(){
    $('#nav').load('templates/navbar.html');
    });
    var username = sessionStorage.getItem("username");
    if (username==null)
    {
      alert("To access our website, you need to login first");
      window.location="login.html";
    }
  </script>
  <style>
  .hero-text h1
  {
    position: absolute;
    top: 200px;
    left: 50%;
    transform: translate(-50%,-50%);
    font-family: 'Times New Roman', Times, serif;
    color:white;
    font-size: 30px;
  }
  .picbig{
	position: absolute;
	width:0px;
	-webkit-transition:width 0.3s linear 0s;
	transition:width 0.3s linear 0s;
	z-index:10;
  }
  .picbig1:hover + .picbig
  {
	  width:850px;
  }
</style>
</head>
<body>
<h2 style="text-align: center; font-family:'Times New Roman'">Profile</h3>
<div id="nav"></div>
<?php
if($result>0)
{
  while($row = mysqli_fetch_array($user))
  {
    $_SESSION['address'] = $row["Address"];
    $_SESSION['mobile'] = $row["Mobile"];
    ?>
<form class='container' method="POST" action="main/profileupdate.php">
  <div class="form-group row">
		<label class="col-sm-4 col-form-label" style="font-family: 'Times New Roman'">Username</label>
		<label name="username" class="col-sm-4 col-form-label" style="font-family: 'Times New Roman'"><?php echo $row["Username"];?></label>
    <br>
    <br>
	</div>
  <div class="form-group row">
		<label class="col-sm-4 col-form-label" style="font-family: 'Times New Roman'">Name</label>
		<label name="name" class="col-sm-4 col-form-label" style="font-family: 'Times New Roman'"><?php echo $row["Name"];?></label>
    <br>
    <br>
	</div>
  <div class="form-group row">
		<label class="col-sm-4 col-form-label" style="font-family: 'Times New Roman'">EmailId</label>
		<label name="Email" class="col-sm-4 col-form-label" style="font-family: 'Times New Roman'"><?php echo $row["Email"];?></label>
    <br>
    <br>
	</div>
  <div class="form-group row">
		<label class="col-sm-4 col-form-label" style="font-family: 'Times New Roman'">Address</label>
		<label name="Address" class="col-sm-4 col-form-label" style="font-family: 'Times New Roman'"><?php echo $row["Address"];?></label>
    <br>
    <br>
	</div>
  <div class="form-group row">
		<label class="col-sm-4 col-form-label" style="font-family: 'Times New Roman'">Mobile No</label>
		<label name="Mobile" class="col-sm-4 col-form-label" style="font-family: 'Times New Roman'"><?php echo $row["Mobile"];?></label>
    <br>
    <br>
	</div>
  <div class="form-group row">
		<label class="col-sm-4 col-form-label" style="font-family: 'Times New Roman'">Profile Image</label>
		<label name="Image" class="col-sm-4 col-form-label" style="font-family: 'Times New Roman'"></label><img src="<?php echo ($row["ProfilePic"]); ?>" width="200px" height="200px"align="center" class="picbig1">
    <img class="picbig" src="<?php echo $row["ProfilePic"];?>">
    <br>
    <br>
	</div>
<?php
  }
}
?>
  <div class="form-group row">
			<label class="col-sm-4 col-form-label" style="font-family: 'Times New Roman'">New email id</label>
			<input type="email" id="mail" name="mail" required>
      <br>
      <br>
      <input class="btn btn-warning" type="submit" name="email_btn" value="Change Email" style="font-family: 'Times New Roman'">
      <br>
      <br>
	</div>
</form>
<form class='container' method="POST" action="main/addreessupdate.php">
  <div class="form-group row">
			<label class="col-sm-4 col-form-label" style="font-family: 'Times New Roman'">Address</label>
			<input type="text" id="addr" name="addr" required>
      <br>
      <br>
      <input class="btn btn-warning" type="submit" name="addre_btn" value="Update Address" style="font-family: 'Times New Roman'">
      <br>
      <br>
	</div>
</form>
<form class='container' method="POST" action="main/mobileupdate.php">
  <div class="form-group row">
			<label class="col-sm-4 col-form-label" style="font-family: 'Times New Roman'">Mobile No</label>
			<input type="text" id="mobile" name="mobile" required>
      <br>
      <br>
      <input class="btn btn-warning" type="submit" name="mobile_btn" value="Update Mobile No" style="font-family: 'Times New Roman'">
      <br>
      <br>
	</div>
</form>
<form class='container' method="POST" action="main/imageupdate.php" enctype="multipart/form-data">
  <div class="form-group row">
			<label class="col-sm-4 col-form-label" style="font-family: 'Times New Roman'">Profile Image</label>
			<input type="file" id="img" name="img" required>
      <br>
      <input class="btn btn-warning" type="submit" name="addre_btn" value="Update Profile Image" style="font-family: 'Times New Roman'">
      <br>
      <br>
	</div>
</form>
</body>
</html> -->

<?php
session_start();
$Username=$_SESSION['Username'];
$conn=new mysqli('localhost:3308','root','','signup');
$user = mysqli_query($conn,"SELECT * FROM signup where Username='$Username'");
$result = mysqli_num_rows($user);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Profile Page</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="E Commerce Website">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <link rel="stylesheet" href="plugins/colorbox/colorbox.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <style>
    .feature-bg {
  position: relative;
  margin: 150px 0;
}

.feature-bg:after {
  position: absolute;
  right: 0;
  top: 0;
  width: 40%;
  height: 100%;
  content: "";
  background-size: cover;
  background-position: center;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
}

  </style>
  <script>
    $(function(){
    $('.nav_head').load('templates/navbar.html');
    });

    $(function(){
    $('.nav_foot').load('templates/footer.html');
    });
var username = sessionStorage.getItem("username");
    if (username==null)
    {
      alert("To access our website, you need to login first");
      window.location="html/login.html";
    }
  </script>
</head>
<body>  
  <div class="body-inner">
    <div class="nav_head"></div>
    
<!-- <form class='container' method="POST" action="main/profileupdate.php">
  <div class="form-group row">
		<label class="col-sm-4 col-form-label" style="font-family: 'Times New Roman'">Username</label>
		<label name="username" class="col-sm-4 col-form-label" style="font-family: 'Times New Roman'"><?php echo $row["Username"];?></label>
    <br>
    <br>
	</div>
  <div class="form-group row">
		<label class="col-sm-4 col-form-label" style="font-family: 'Times New Roman'">Name</label>
		<label name="name" class="col-sm-4 col-form-label" style="font-family: 'Times New Roman'"><?php echo $row["Name"];?></label>
    <br>
    <br>
	</div>
  <div class="form-group row">
		<label class="col-sm-4 col-form-label" style="font-family: 'Times New Roman'">EmailId</label>
		<label name="Email" class="col-sm-4 col-form-label" style="font-family: 'Times New Roman'"><?php echo $row["Email"];?></label>
    <br>
    <br>
	</div>
  <div class="form-group row">
		<label class="col-sm-4 col-form-label" style="font-family: 'Times New Roman'">Address</label>
		<label name="Address" class="col-sm-4 col-form-label" style="font-family: 'Times New Roman'"><?php echo $row["Address"];?></label>
    <br>
    <br>
	</div>
  <div class="form-group row">
		<label class="col-sm-4 col-form-label" style="font-family: 'Times New Roman'">Mobile No</label>
		<label name="Mobile" class="col-sm-4 col-form-label" style="font-family: 'Times New Roman'"><?php echo $row["Mobile"];?></label>
    <br>
    <br>
	</div>
  <div class="form-group row">
		<label class="col-sm-4 col-form-label" style="font-family: 'Times New Roman'">Profile Image</label>
		<label name="Image" class="col-sm-4 col-form-label" style="font-family: 'Times New Roman'"></label><img src="<?php echo ($row["ProfilePic"]); ?>" width="200px" height="200px"align="center" class="picbig1">
    <img class="picbig" src="<?php echo $row["ProfilePic"];?>">
    <br>
    <br>
	</div>
<?php
  // }
// }
?>
  <div class="form-group row">
			<label class="col-sm-4 col-form-label" style="font-family: 'Times New Roman'">New email id</label>
			<input type="email" id="mail" name="mail" required>
      <br>
      <br>
      <input class="btn btn-warning" type="submit" name="email_btn" value="Change Email" style="font-family: 'Times New Roman'">
      <br>
      <br>
	</div>
</form>
<form class='container' method="POST" action="main/addreessupdate.php">
  <div class="form-group row">
			<label class="col-sm-4 col-form-label" style="font-family: 'Times New Roman'">Address</label>
			<input type="text" id="addr" name="addr" required>
      <br>
      <br>
      <input class="btn btn-warning" type="submit" name="addre_btn" value="Update Address" style="font-family: 'Times New Roman'">
      <br>
      <br>
	</div>
</form>
<form class='container' method="POST" action="main/mobileupdate.php">
  <div class="form-group row">
			<label class="col-sm-4 col-form-label" style="font-family: 'Times New Roman'">Mobile No</label>
			<input type="text" id="mobile" name="mobile" required>
      <br>
      <br>
      <input class="btn btn-warning" type="submit" name="mobile_btn" value="Update Mobile No" style="font-family: 'Times New Roman'">
      <br>
      <br>
	</div>
</form>
<form class='container' method="POST" action="main/imageupdate.php" enctype="multipart/form-data">
  <div class="form-group row">
			<label class="col-sm-4 col-form-label" style="font-family: 'Times New Roman'">Profile Image</label>
			<input type="file" id="img" name="img" required>
      <br>
      <input class="btn btn-warning" type="submit" name="addre_btn" value="Update Profile Image" style="font-family: 'Times New Roman'">
      <br>
      <br>
	</div>
</form> -->
<?php
if($result>0)
{
  while($row = mysqli_fetch_array($user))
  {
    $_SESSION['address'] = $row["Address"];
    $_SESSION['mobile'] = $row["Mobile"];
    ?>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img alt="Profile Pic" class="rounded-circle mt-5" width="150px" src="<?php echo($row["ProfilePic"])?>"><span class="font-weight-bold"><?php echo($row["Name"])?></span><span class="text-black-50"><?php echo($row["Email"])?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels"><b>Name</b></label><br><?php echo($row["Name"])?></div>
                    <div class="col-md-6"><label class="labels"><b>Username</b></label><br><?php echo($row["Username"])?></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels"><b>Mobile Number</b></label><br><?php echo($row["Mobile"])?></div>
                    <div class="col-md-12"><label class="labels"><b>Address</b></label><br><?php echo($row["Name"])?></div>
                    <div class="col-md-12"><label class="labels"><b>Email</b></label><br><?php echo($row["Email"])?></div>
                </div>
                  <div class="row mt-2">
                  <form method="POST" action="main/addreessupdate.php">
                    <div class="col-md-6"><label class="labels"><b>Address</b></label><br><input type="text" class="form-control" placeholder="address" id="addr" name="addr"></div>
                    <div class="col-md-6"><label class="labels"><b></b></label><br><input class="btn" type="submit" name="addre_btn" value="Update Address" style="background-color:#ffb600;font-size:12px"></div>
                  </form>
                  </div>
                  <div class="row mt-2">
                  <form method="POST" action="main/mobileupdate.php">
                    <div class="col-md-6"><label class="labels"><b>Mobile</b></label><br><input type="text" class="form-control" placeholder="mobile" id="mobile" name="mobile"></div>
                    <div class="col-md-6"><label class="labels"><b></b></label><br><input class="btn" type="submit" name="addre_btn" value="Update Mobile" style="background-color:#ffb600;font-size:12px"></div>
                  </form>
                  </div>
                  <div class="row mt-2">
                  <form method="POST" action="main/imageupdate.php">
                    <div class="col-md-6"><label class="labels"><b>Profile Pic</b></label><br><input type="file" id="img" name="img" required></div>
                    <div class="col-md-6"><label class="labels"><b></b></label><br><input class="btn btn-warning" type="submit" name="addre_btn" value="Update Address" style="background-color:#ffb600;font-size:12px"></div>
                  </form>
                  </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php

  }
  
}?>
    <div class="nav_foot"></div>

  <script src="plugins/jQuery/jquery.min.js"></script>
  <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/slick/slick-animation.min.js"></script>
  <script src="plugins/colorbox/jquery.colorbox.js"></script>
  <script src="plugins/shuffle/shuffle.min.js" defer></script>
  <script src="js/script.js"></script>
  </div>
  </body>
  </html>