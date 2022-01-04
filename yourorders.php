<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>HomePage</title>
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

.title {
    margin-bottom: 5vh
}

.card {
    margin: auto;
    max-width:1000px;
    width: 90%;
    box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 1rem;
    border: transparent
}

@media(max-width:900px) {
    .card {
        margin: 3vh auto
    }
}

.cart {
    background-color: #fff;
    padding: 4vh 5vh;
    border-bottom-left-radius: 2rem;
    border-top-left-radius: 2rem
}

@media(max-width:900px) {
    .cart {
        padding: 4vh;
        border-bottom-left-radius: unset;
        border-top-right-radius: 4rem
    }
}

.row {
    margin: 0
}

.title b {
    font-size: 1.5rem
}

.main {
    margin: 0;
    padding: 2vh 0;
    width: 100%
}

.col-2,
.col,
.col-4{
    padding-left :50px;
}

a {
    padding: 0 1vh
}

.close {
    margin-left: auto;
    font-size: 0.7rem
}

img {
    width: 3.5rem
}

.back-to-shop {
    margin-top: 4.5rem
}

h5 {
    margin-top: 4vh
}

hr {
    margin-top: 1.25rem
}

form {
    padding: 2vh 0
}

select {
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 1.5vh 1vh;
    margin-bottom: 4vh;
    outline: none;
    width: 100%;
    background-color: rgb(247, 247, 247)
}

input {
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 1vh;
    margin-bottom: 4vh;
    outline: none;
    width: 100%;
    background-color: rgb(247, 247, 247)
}

input:focus::-webkit-input-placeholder {
    color: transparent
}

.btn {
    background-color: #000;
    border-color: #000;
    color: white;
    width: 100%;
    font-size: 0.7rem;
    margin-top: 4vh;
    padding: 1vh;
    border-radius: 0
}

.btn:focus {
    box-shadow: none;
    outline: none;
    box-shadow: none;
    color: white;
    -webkit-box-shadow: none;
    -webkit-user-select: none;
    transition: none
}

.btn:hover {
    color: white
}

a {
    color: black
}

a:hover {
    color: black;
    text-decoration: none
}

.btn-secondary,
.btn-secondary:focus,
.btn-secondary:active {
    color: #fff;
    background-color: #00838f !important;
    border-color: #00838f !important;
    box-shadow: none;
    font-size:15px;
}

.title b {
    font-size: 1.5rem
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
<div class="col"><center>
    <h3><b>ORDERS</b></h3>
</div></center>

<?php
$conn=new mysqli('localhost:3308','root','','orders');
$Username=$_SESSION['Username'];
if ($conn->connect_error)
{
    die('Connection Failed : '.$conn->connect_error);
}
else
{
  $user = mysqli_query($conn,"SELECT orders.Product_id,orders.Product_name,orders.Transaction_id,orders.Price,orders.Quantity,orders.Username,orders.Status,croppurchase.image,croppurchase.price FROM orders.orders join croppurchase.croppurchase where orders.Product_id=croppurchase.id and orders.Username='$Username'");
  $result = mysqli_num_rows($user);
	if($result>0)
	{
		while($row = mysqli_fetch_array($user))
		{
			?>
            <div class="card shadow-0 border mb-4">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-2">
                    <img src="<?php echo($row["image"])?>" class="img-fluid" alt="Phone">
                  </div>
                  <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text mb-0" style="color: #000;"><?php echo($row["Product_name"])?></p>
                  </div>
                  <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text mb-0 small"><b>₹ <?php echo($row["price"])?></p></b>
                  </div>
                  <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text mb-0 small"  style="color: red;">25% off</p>
                  </div>
                  <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text mb-0 small">Qty: <?php echo($row["Quantity"])?></p>
                  </div>
                  <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text mb-0 small" style="color: #00838f;"><b>₹ <?php echo($row["Price"])?></p></b>
                  </div>
                </div>
                <?php if(($row["Status"])=="Delivered")
                          {
                            $_SESSION['Trans'] =  $row["Transaction_id"];
                    ?>
                    <br>
                    <center> <div class="col-md-3"> <button style="font-family:Times New Roman" type="submit" onclick="location.href='feedback.php'" class="btn btn-secondary btn-block">Feedback Form</button></div></center>
                    <?php
                          }
                          elseif(($row["Status"])=="Order Recieved")
                          {
                      ?>
                    <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                <div class="row d-flex align-items-center">
                  <div class="col-md-2">
                    <p class="text mb-0 small">Track Order</p>
                  </div>
                  <div class="col-md-10">
                    <div class="progress" style="height: 6px; border-radius: 16px;">
                      <div
                        class="progress-bar"
                        role="progressbar"
                        style="width: 10%; border-radius: 16px; background-color: #ffb600;"
                        aria-valuenow="65"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <div class="d-flex justify-content-around mb-1">
                      <p class="text mt-1 mb-0 small ms-xl-5"><?php echo($row["Status"])?></p>
                      <p class="text mt-1 mb-0 small ms-xl-5" style="color: green;">Delivered</p>
                    </div>
                    <?php 
                    }
                    elseif(($row["Status"])=="Shipped")
                          {
                    ?>
                    <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                <div class="row d-flex align-items-center">
                  <div class="col-md-2">
                    <p class="text mb-0 small">Track Order</p>
                  </div>
                  <div class="col-md-10">
                    <div class="progress" style="height: 6px; border-radius: 16px;">
                      <div
                        class="progress-bar"
                        role="progressbar"
                        style="width: 50%; border-radius: 16px; background-color: #ffb600;"
                        aria-valuenow="65"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <div class="d-flex justify-content-around mb-1">
                      <p class="text mt-1 mb-0 small ms-xl-5"><?php echo($row["Status"])?></p>
                      <p class="text mt-1 mb-0 small ms-xl-5" style="color: green;">Delivered</p>
                    </div>
                    <?php
                    }
                    elseif(($row["Status"])=="Out for delivery")
                          {
                    ?>
                    <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                <div class="row d-flex align-items-center">
                  <div class="col-md-2">
                    <p class="text mb-0 small">Track Order</p>
                  </div>
                  <div class="col-md-10">
                    <div class="progress" style="height: 6px; border-radius: 16px;">
                      <div
                        class="progress-bar"
                        role="progressbar"
                        style="width: 80%; border-radius: 16px; background-color: #ffb600;"
                        aria-valuenow="65"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <div class="d-flex justify-content-around mb-1">
                      <p class="text mt-1 mb-0 small ms-xl-5"><?php echo($row["Status"])?></p>
                      <p class="text mt-1 mb-0 small ms-xl-5" style="color: green;">Delivered</p>
                    </div>
                    <?php }?>
                  </div>
                </div>
              </div>
            </div>
            <?php
					}
      }
      else
      {
        ?>
          <center style="font-family:'Times New Roman'"><h5>You havent placed any orders yet<center></h5>
    <?php
      }
  }
?>
        </div>
    </div>
</div>
<br>
<br>

            
          
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