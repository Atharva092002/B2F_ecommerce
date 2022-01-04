<?php
session_start();
error_reporting(0);
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
    max-width: 950px;
    width: 90%;
    box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 1rem;
    border: transparent
}

@media(max-width:767px) {
    .card {
        margin: 3vh auto
    }
}

.cart {
    background-color: #fff;
    padding: 4vh 5vh;
    border-bottom-left-radius: 1rem;
    border-top-left-radius: 1rem
}

@media(max-width:767px) {
    .cart {
        padding: 4vh;
        border-bottom-left-radius: unset;
        border-top-right-radius: 1rem
    }
}

.summary {
    background-color: #ddd;
    border-top-right-radius: 1rem;
    border-bottom-right-radius: 1rem;
    padding: 4vh;
    color: rgb(65, 65, 65)
}

@media(max-width:767px) {
    .summary {
        border-top-right-radius: unset;
        border-bottom-left-radius: 1rem
    }
}

.summary .col-2 {
    padding: 0
}

.summary .col-10 {
    padding: 0
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
.col {
    padding: 0 1vh
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

#code {
    background-image: linear-gradient(to left, rgba(255, 255, 255, 0.253), rgba(255, 255, 255, 0.185)), url("https://img.icons8.com/small/16/000000/long-arrow-right.png");
    background-repeat: no-repeat;
    background-position-x: 95%;
    background-position-y: center
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

<div class="card">
    <div class="row">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4><b>Cart</b></h4>
                    </div>
                </div>
            </div>
            <?php
$Username=$_SESSION['Username'];
$add_id=$_GET['id'];
$conn=new mysqli('localhost:3308','root','','orders');
    if($_GET['add'])
    {
        $stmt=$conn->prepare("UPDATE orders.cart SET Quantity = Quantity + 1 where cart.Product_id=$add_id and cusername = '$Username'");
        $stmt->execute();
        $stmt->close();     
    }
    else if($_GET['subtract'])
    {
        $stmt=$conn->prepare("UPDATE orders.cart SET Quantity = Quantity - 1 where cart.Product_id=$add_id and cusername = '$Username'");
        $stmt->execute();
        $stmt->close();   
    }

if ($conn->connect_error)
{
    die('Connection Failed : '.$conn->connect_error);
}
else
{
    $user = mysqli_query($conn,"SELECT croppurchase.id,croppurchase.Name,croppurchase.image,croppurchase.price,croppurchase.SoldBy,croppurchase.Rating,cart.Quantity FROM orders.cart join croppurchase.croppurchase where cart.Product_id=croppurchase.id and cart.cusername='$Username'");
    
    $cart_sum = mysqli_query($conn,"SELECT SUM(croppurchase.price*cart.Quantity) AS cart_sum FROM orders.cart join croppurchase.croppurchase where cart.Product_id=croppurchase.id and cart.cusername='$Username'");
	$row_sum = mysqli_fetch_assoc($cart_sum);
    $sum = $row_sum['cart_sum'];

    $result = mysqli_num_rows($user);
	if($result>0)
	{
		while($row = mysqli_fetch_array($user))
		{
            if($row["Quantity"]>0)
            {
			?>
            <div class="row border-top border-bottom">
                <div class="row main align-items-center">
                    <div class="col-2"><img class="img-fluid" src="<?php echo($row["image"])?>"></div>
                    <div class="col">
                        <div class="row text-muted">Crop</div>
                        <div class="row"><?php echo($row["Name"])?></div>
                    </div>
                    <div class="col">
                        <form action="" method="GET">
                        <input type="hidden" value="<?php echo($row['id'])?>" name="id">
                        <input type="submit" name="subtract" style="border: none;padding: 5px 10px;background-color: #ddd;color: #000;width:10px" value="-">
                        <?php echo($row["Quantity"])?>
                        <input type="submit" name="add" style="border: none;padding: 5px 10px;background-color: #ddd;color: #000;width:10px" value="+">
                        </form>
                    </div>
                    
                    <div class="col">₹<?php echo($row["price"])?></div>
                </div>
            </div>
            <?php
            }
            else if($row["Quantity"]==0)
            {
                $stmt=$conn->prepare("DELETE from cart where Quantity=0");
                $stmt->execute();
                $stmt->close();             
            }
					}
      }
    }
 ?>
        </div>
        <div class="col-md-4 summary">
            <div>
                <h5><b>Summary</b></h5>
            </div>
            <br>
            <div class="row">
                <div class="col" style="padding-left:0;">TOTAL PRICE</div>
                <div class="col text-right">₹ <?php echo($sum)?></div>
            </div>
            <div class="row">
                <div class="col" style="padding-left:0;">SHIPPING</div>
                <div class="col text-right">FREE</div>
            </div>
            <div class="row">
                <div class="col" style="padding-left:0;">DISCOUNT</div>
                <div class="col text-right">25%</div>
            </div>
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                <div class="col">TOTAL PAYABLE</div>
                <div class="col text-right">₹ <?php echo($sum)?></div>
            </div> <button class="btn">CHECKOUT</button>
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