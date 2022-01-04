<?php
session_start();
$trans=$_SESSION['Trans'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Feedback</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
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
  background-image: url(images_constra/icon-image/istockphoto-1257937953-612x612-removebg-preview.png);
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
.container 
    {
        padding: 16px;
        background-color: white;
    }
    input[type=text]
    {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }
    .star-rating {
        margin: 25px 0 0px;
        font-size: 0;
        white-space: nowrap;
        display: inline-block;
        width: 175px;
        height: 35px;
        overflow: hidden;
        position: relative;
        background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjREREREREIiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
        background-size: contain;
    }
    .star-rating i {
    opacity: 0;
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 20%;
    z-index: 1;
    background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjRkZERjg4IiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
    background-size: contain;
    }
    .star-rating input {
    -moz-appearance: none;
    -webkit-appearance: none;
    opacity: 0;
    display: inline-block;
    width: 20%;
    height: 100%;
    margin: 0;
    padding: 0;
    z-index: 2;
    position: relative;
    }
.star-rating input:hover + i,
.star-rating input:checked + i {
  opacity: 1;
}
.star-rating i ~ i {
  width: 40%;
}
.star-rating i ~ i ~ i {
  width: 60%;
}
.star-rating i ~ i ~ i ~ i {
  width: 80%;
}
.star-rating i ~ i ~ i ~ i ~ i {
  width: 100%;
}
.btn-secondary,
.btn-secondary:focus,
.btn-secondary:active {
    color: #fff;
    background-color: #00838f !important;
    border-color: #00838f !important;
    box-shadow: none
}

.advanced {
    color: #00838f !important
}

.form-control:focus {
    box-shadow: none;
    border: 1px solid #00838f
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
<br>
<br>
<div class="container">
    <form action="main/feedbackmain.php" method="POST" enctype="multipart/form-data">    
        <label style="font-size:14px"><b>Your overall experience with us</b></label><br>
        <span class="star-rating">
            <input type="radio" name="rating1" value="1"><i></i>
            <input type="radio" name="rating1" value="2"><i></i>
            <input type="radio" name="rating1" value="3"><i></i>
            <input type="radio" name="rating1" value="4"><i></i>
            <input type="radio" name="rating1" value="5"><i></i>
        </span>
        <br>
        <br>
        <label style="font-size:14px"><b>Behaviour of Delivery partner</b></label><br>
        <span class="star-rating">
            <input type="radio" name="rating2" value="1"><i></i>
            <input type="radio" name="rating2" value="2"><i></i>
            <input type="radio" name="rating2" value="3"><i></i>
            <input type="radio" name="rating2" value="4"><i></i>
            <input type="radio" name="rating2" value="5"><i></i>
        </span>
        <br>
        <br>
        <label style="font-size:14px"><b>Pricing of product(is it reasonable ?)</b></label><br>
        <span class="star-rating">
            <input type="radio" name="rating3" value="1"><i></i>
            <input type="radio" name="rating3" value="2"><i></i>
            <input type="radio" name="rating3" value="3"><i></i>
            <input type="radio" name="rating3" value="4"><i></i>
            <input type="radio" name="rating3" value="5"><i></i>
        </span>
        <br>
        <br>
        <label style="font-size:14px"><b>Quality of product</b></label><br>
        <span class="star-rating">
            <input type="radio" name="rating4" value="1"><i></i>
            <input type="radio" name="rating4" value="2"><i></i>
            <input type="radio" name="rating4" value="3"><i></i>
            <input type="radio" name="rating4" value="4"><i></i>
            <input type="radio" name="rating4" value="5"><i></i>
        </span>
        <br>
        <br>
        
        <label style="font-size:14px"><b>How likely are you to recommend our website to your friends and family ?</b></label><br>
        <span class="star-rating">
            <input type="radio" name="rating5" value="1"><i></i>
            <input type="radio" name="rating5" value="2"><i></i>
            <input type="radio" name="rating5" value="3"><i></i>
            <input type="radio" name="rating5" value="4"><i></i>
            <input type="radio" name="rating5" value="5"><i></i>
        </span>
        <br>
        <br>
        <label style="font-size:14px"><b>Any Other suggestions</b></label><br>
        <textarea cols="50" name="commentText" rows="4"></textarea>
        <br>
        <br>
        <input type="submit" value="Submit Feedback" class="btn btn-secondary" name="submit" style="font-size:14px">
</form>
</div>
         
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