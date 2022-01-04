<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Shop</title>
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

.client-avater {
  margin-bottom: 20px;
}

.client-meta h3 {
  font-size: 20px;
  font-weight: 600;
}

.client-meta h3 span {
  display: block;
  font-size: 70%;
  margin-top: 10px;
  color: #051922;
  font-weight: 600;
  opacity: 0.5;
}

p.testimonial-body {
  font-size: 17px;
  font-style: italic;
  width: 700px;
  margin: 0 auto;
  line-height: 1.8;
  color: #999999;
  margin-top: 20px;
}

.last-icon {
  margin-top: 20px;
  font-size: 25px;
  opacity: 0.3;
}

.client-avater img {
  max-width: 100px;
  border-radius: 50%;
  margin: 0 auto;
}

.single-logo-item img {
  max-width: 180px;
  margin: 0 auto;
}

.logo-carousel-section {
  background-color: #f5f5f5;
  padding: 50px 0;
}

.list-box .list-icon i {
  display: block;
  font-size: 24px;
  margin-right: 15px;
  color: #ffb600;
  width: 65px;
  height: 65px;
  text-align: center;
  line-height: 60px;
  border: 2px black dotted;
  border-radius: 999px;
}
.product-image {
  padding: 30px;
  padding-bottom: 0;
}

.product-image img {
  width: 90%;
  border-radius: 5px;
  margin-bottom: 20px;
}
.cart-banner {
  background-color: #f5f5f5;
}

.cart-banner .image-column {
  position: relative;
  margin-top: 40px;
}

.cart-banner .image-column .price-box {
  position: absolute;
  left: 15%;
  top: -30px;
  width: 110px;
  height: 110px;
  border-radius: 50%;
  border: 1px solid #fff;
  background-color: #ffb600;
}

.cart-banner .image-column .price-box .inner-price {
  position: relative;
  width: 94px;
  height: 94px;
  margin: 0 auto;
  margin-top: 8px;
  text-align: center;
  border-radius: 50%;
  background-color: #ffb600;
}

.cart-banner .image-column .price-box .inner-price .price {
  color: #051922;
  padding-top: 27px;
  position: relative;
  display: inline-block;
  line-height: 18px;
  font-weight: 400;
}

.cart-banner .image-column .price-box .inner-price .price strong {
  color: #051922;
  font-size: 24px;
}

.cart-banner .content-column {
  position: relative;
  padding-top: 40px;
}

.cart-banner .content-column h3 {
  font-size: 40px;
}

.cart-banner .content-column h4 {
  position: relative;
  font-weight: 300;
  text-transform: uppercase;
}

.cart-banner .content-column .text {
  position: relative;
  font-weight: 400;
  line-height: 1.8em;
  margin-top: 25px;
  margin-bottom: 25px;
}

.shop-banner {
  position: relative;
  background-color: #f5f5f5;
  background-image: url(ed4b3a84e0f361f56b3e37ff5fe9eb3d.jpg);
  background-size: cover;
  padding: 110px 0px 115px;
}

.shop-banner h3 {
  position: relative;
  font-size: 50px;
  line-height: 1.2em;
  margin-bottom: 0px;
}

.shop-banner .sale-percent {
  position: relative;
  font-size: 60px;
  font-weight: 700;
  color: #ffb600;
}

.shop-banner .sale-percent span {
  position: relative;
  font-size: 24px;
  line-height: 1.1em;
  color: #051922;
  font-weight: 400;
  text-align: center;
  margin-right: 10px;
  display: inline-block;
}


.advanced {
    text-decoration: none;
    font-size: 15px;
    font-weight: 500
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

.card {
    background-color: #fff;
    border: none;
    border-radius: 10px;
    width: 190px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}

.image-container {
    position: relative
}

.thumbnail-image {
    border-radius: 10px !important
}

.discount {
    background-color: red;
    padding-top: 1px;
    padding-bottom: 1px;
    padding-left: 4px;
    padding-right: 4px;
    font-size: 10px;
    border-radius: 6px;
    color: #fff
}

.wishlist {
    height: 25px;
    width: 25px;
    background-color: #eee;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}

.first {
    position: absolute;
    width: 100%;
    padding: 9px
}

.dress-name {
    font-size: 13px;
    font-weight: bold;
    width: 75%
}

.new-price {
    font-size: 15px;
    font-weight: bold;
    color: red
}

.old-price {
    font-size: 11px;
    font-weight: bold;
    color: grey
}

.btn {
    width: 14px;
    height: 14px;
    border-radius: 50%;
    padding: 3px
}

.creme {
    background-color: #fff;
    border: 2px solid grey
}

.creme:hover {
    border: 3px solid grey
}

.creme:focus {
    background-color: grey
}

.red {
    background-color: #fff;
    border: 2px solid red
}

.red:hover {
    border: 3px solid red
}

.red:focus {
    background-color: red
}

.blue {
    background-color: #fff;
    border: 2px solid #40C4FF
}

.blue:hover {
    border: 3px solid #40C4FF
}

.blue:focus {
    background-color: #40C4FF
}

.darkblue {
    background-color: #fff;
    border: 2px solid #01579B
}

.darkblue:hover {
    border: 3px solid #01579B
}

.darkblue:focus {
    background-color: #01579B
}

.yellow {
    background-color: #fff;
    border: 2px solid #FFCA28
}

.yellow:hover {
    border-radius: 3px solid #FFCA28
}

.yellow:focus {
    background-color: #FFCA28
}

.item-size {
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background: #fff;
    border: 1px solid grey;
    color: grey;
    font-size: 10px;
    text-align: center;
    align-items: center;
    display: flex;
    justify-content: center
}

.rating-star {
    font-size: 10px !important
}

.rating-number {
    font-size: 13px;
    color: grey
}

.buy {
    font-size: 12px;
    color: purple;
    font-weight: 500
}

.voutchers {
    background-color: #fff;
    border: none;
    border-radius: 10px;
    width: 190px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    overflow: hidden
}

.voutcher-left {
    width: 100%
}

.voutcher-name {
    color: grey;
    font-size: 9px;
    font-weight: 500
}

.voutcher-code {
    color: red;
    font-size: 13px;
    font-weight: bold
}

.voutcher-right {
    width: 100%;
    background-color: purple;
    color: #fff
}

.discount-percent {
    font-size: 12px;
    font-weight: bold;
    position: relative;
    top: 5px
}

.off {
    font-size: 14px;
    position: relative;
    bottom: 5px
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
    <div class="container mt-5">
    <div class="row">
    <?php
	$conn=new mysqli('localhost:3308','root','','croppurchase');
  $query = "SELECT * FROM croppurchase";
	$user = mysqli_query($conn,$query);
	$result = mysqli_num_rows($user);
	if($result>0)
	{
		while($row = mysqli_fetch_array($user))
		{
			?>
        <div class="col-md-3">
            <div class="card">
                <div class="image-container">
                    <div class="first">
                        <div class="d-flex justify-content-between align-items-center"> <span class="discount">-25%</span></div>
                    </div> <img src="<?php echo($row["image"])?>" class="img-fluid rounded thumbnail-image">
                </div>
                <div class="product-detail-container p-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="dress-name"><?php echo($row['Name'])?></h5>
                        <div class="d-flex flex-column mb-2"> <span class="new-price">₹ <?php echo($row['price'])?></span> <small class="old-price text-right">₹ <?php echo($row['price']+10)?></small> </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center pt-1">
                        <div> <i class="fa fa-star-o rating-star"></i> <span class="rating-number"><?php echo($row["Rating"])?></span> </div> <span class="buy"><?php echo($row['SoldBy'])?></span>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <div class="card voutchers">
                    <div class="voutcher-divider">
                        <div class="voutcher-left text-center">
                            <form action="mainpurchase.php" method="POST" >
                        <input type="hidden" name='id' value="<?php echo $row['id']; ?>">	
                            <button type="submit" style="border: none;outline: none; background: none;color: red;
    font-size: 13px;font-weight: bold">Buy Now</form>
                        </div>
                        <form action="usercart.php" method="POST" >
                        <div class="voutcher-right text-center border-left" style="background-color: #ffb600;">
                        <input type="hidden" name='id' value="<?php echo $row['id']; ?>">	
                            <!-- <h5 class="discount-percent">Add to cart</h5> -->
                            <button type="submit" style="border: none;outline: none; background: none;color: red;
    font-size: 13px;font-weight: bold">Add to Cart</form>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <br>
        </div>
        <?php
    }
  }
        ?>
    </div>
</div>
</form>
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