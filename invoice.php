<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Invoice</title>
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
.body-main {
     background: #ffffff;
     border-bottom: 15px solid #1E1F23;
     border-top: 15px solid #1E1F23;
     margin-top: 30px;
     margin-bottom: 30px;
     padding: 40px 30px !important;
     position: relative;
     box-shadow: 0 1px 21px #808080;
     font-size: 10px
 }

 .main thead {
     background: #1E1F23;
     color: #fff
 }

 .img {
     height: 100px
 }

 h1 {
     text-align: center
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
<?php
$conn=new mysqli('localhost:3308','root','','croppurchase');
$conn_NEW=new mysqli('localhost:3308','root','','signup');
$conn_NEW_or=new mysqli('localhost:3308','root','','orders');
$quantity=$_SESSION['Quantity'];
$new_q=$quantity;
$Username=$_SESSION['Username'];
$id=$_SESSION['id'];
$stat='Order Recieved';
if ($conn->connect_error)
{
    die('Connection Failed : '.$conn->connect_error);
}
else
{
    $user = mysqli_query($conn,"SELECT * FROM croppurchase where id='$id'");
	$user_NEW=mysqli_query($conn_NEW,"SELECT * FROM signup where Username='$Username'");
	$user_NEW_or=mysqli_query($conn_NEW_or,"SELECT Username FROM orders where Username='$Username'");
	$result = mysqli_num_rows($user);
	$result_NEW = mysqli_num_rows($user_NEW);
	$result_NEW_or=mysqli_num_rows($user_NEW_or);
	if($result>0 and $result_NEW>0 and $result_NEW_or>=0)
	{
		while($row = mysqli_fetch_array($user))
		{
			$row_NEW=mysqli_fetch_array($user_NEW);
			$row_NEW_or=mysqli_fetch_array($user_NEW_or);
			$_SESSION['addr']=$row_NEW['Address'];
			$_SESSION['crop_name']=$row["Name"];
            ?>
			<?php
			?>
<div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 body-main">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4"> <img class="img" alt="Invoce Template" src="http://pngimg.com/uploads/shopping_cart/shopping_cart_PNG59.png" /> </div>
                        <div class="col-md-8 text-right">
                            <h4 style="color: #F81D2D;"><strong>Boost 2 Farms</strong></h4>
                            <p>FDP-MDBP Building
                First Floor,<br>       
                JAVA Industrial Estate<br>
                New Delhi-110020 <br>
				customer@b2f.com</p>
                        </div>
                    </div> <br />
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>INVOICE</h2>
                            <h5><?php echo($trans=rand(10,100)*12345) ?></h5>
                        </div>
                    </div> <br/>
                    <div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <h5>Name</h5>
                                    </th>
                                    <th>
                                        <h5>Quantity</h5>
                                    </th>
									<th>
										<h5>Price</h5>
									</th>
									<th>
										<h5>Total</h5>
									</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="col-md-9" style="font-size: 15px;"><?php echo($row["Name"])?></td>
                                    <td class="col-md-3" style="font-size: 15px;"><?php echo($quantity)?> kgs</td>
                                    <td class="col-md-3" style="font-size: 15px;"><i class="fas fa-rupee-sign" area-hidden="true"></i><?php echo($row["price"])?></td>
                                    <td class="col-md-3" style="font-size: 15px;"><i class="fas fa-rupee-sign" area-hidden="true"></i><?php echo($row["price"])?></td>
                                </tr>
								<br>
								<br>
                                <tr class="col-md-8">
                                    <td class="col-md-8 text-right" style="text-align: right;">
                                        <p> <strong>Shipment and Taxes:</strong> </p>
                                        <p> <strong>Total Amount: </strong> </p>
                                        <p> <strong>Discount: </strong> </p>
                                        <p> <strong>Payable Amount: </strong> </p>
                                    </td>
                                    <td>
                                        <p> <strong>Free </strong> </p>
                                        <p> <strong><i class="fas fa-rupee-sign" area-hidden="true"></i> <?php echo($row["price"])?> </strong> </p>
                                        <p> <strong> 25% </strong> </p>
                                        <p> <strong><i class="fas fa-rupee-sign" area-hidden="true"></i> <?php echo ($netprice=($row["price"])*$quantity); ?> </strong> </p>
                                    </td>
                                </tr>
                                <tr style="color: #F81D2D;">
                                    <td class="text-right">
                                        <h4><strong>Total:</strong></h4>
                                    </td>
                                    <td class="text-left">
                                        <h4><strong><i class="fas fa-rupee-sign" area-hidden="true"></i> <?php echo($row["price"]*$quantity)?> </strong></h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <div class="col-md-12">
                            <p><b>Date :</b> 6 June 2019</p> <br />
                            <p><b>Signature</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php  $newquantity=$row["Quantity"]-$quantity;
								$stmt=$conn->prepare("update croppurchase set Quantity=$newquantity where id=$id");
								$stmt_new=$conn_NEW_or->prepare("insert into orders(Product_id,Product_name,Transaction_id,Price,Quantity,Username,Status) values(?, ?, ?, ?, ?, ?, ?)");
    							$stmt_new->bind_param('sssssss',$row["id"],$row["Name"],$trans,$netprice,$quantity,$Username,$stat);
    							$stmt->execute();
								$stmt_new->execute();
								$stmt->close();
								$stmt_new->close();
    							$conn->close();
    							$conn_NEW_or->close();

	}
}
}
?>
<?php
	  $_SESSION['trans']=$trans;
	  $_SESSION['netp']=$netprice;
require 'mails/phpmailer.php';
mailer();
?>
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