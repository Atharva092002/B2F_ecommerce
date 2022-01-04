<?php
error_reporting(0);
$Crop=$_GET["search2"];
$conn=new mysqli('localhost:3308','root','','cropsinfo');
if ($conn->connect_error)
{
    die('Connection Failed : '.$conn->connect_error);
}
else
{
    $user=mysqli_query($conn,"SELECT * from cropsinfo where CropName='$Crop'");
    $result=mysqli_num_rows($user);
    $sql = "SELECT * FROM cropsinfo where CropName='$Crop'";
    $resultnew = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Crop|Info</title>
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
<form class="example" action="" method="GET">
<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card p-3 py-4">
                <h5>Easier way to find information about crops</h5>
                <div class="row g-3 mt-2">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6"> <input type="text" class="form-control" placeholder="Enter name of crop"  name="search2" value="<?php if(isset($_GET['search2'])){echo $_GET['search2']; }?>" required></div>
                    <div class="col-md-3"> <button type="submit" class="btn btn-secondary btn-block">Search Results</button> </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
<br>
<br>
<?php
    if ($result>0)
    {
        while($row = $resultnew->fetch_assoc()) 
        {
?>
<div class="main-content">
    <div class="container mt-7">
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0"><?php echo ($row["CropName"]);?> (<?php echo ($row["ScientificName"]); ?>)</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Soil Type</th>
                    <th scope="col">Rainfall</th>
                    <th scope="col">Season</th>
                    <th scope="col">Best seeds</th>
                    <th scope="col">Climate</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="<?php echo ($row["Image"]); ?>" width="200px" height="200px">
                        </a>
                      </div>
                    </th>
                    <td style="width: 200px;">
                    <?php echo ($row["Soil_Type"]); ?>
                    </td>
                    <td>
                      <?php echo ($row["Amt_Rain"]); ?>
                    </td>
                    <td>
                    <?php echo ($row["Season"]); ?>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mr-2"><?php echo ($row["Best_seeds"]); ?></span>
                        <div>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mr-2"><?php echo ($row["Climate"]); ?></span>
                        <div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
    <br>
    <br>
<?php
        }
    }
    else
    {?>
        <h5><center><?php echo "Please enter the correct crop name"?></center></h5>
        <br>
        <br>
    <?php
    }
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