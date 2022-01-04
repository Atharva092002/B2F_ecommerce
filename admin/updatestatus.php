<?php
$conn_orders = new mysqli('localhost:3308', 'root', '', 'orders');
$query = "select * from orders";
$result_orders = mysqli_query($conn_orders, $query);
$count_orders = mysqli_num_rows($result_orders);

$result = mysqli_query($conn_orders, 'SELECT SUM(quantity*price) AS value_sum FROM orders');
$row = mysqli_fetch_assoc($result);
$sum = $row['value_sum'];

$query = "select * from cart";
$result_cart = mysqli_query($conn_orders, $query);
$count_cart = mysqli_num_rows($result_cart);

$query = "select * from feedback";
$result_feed = mysqli_query($conn_orders, $query);
$count_feed = mysqli_num_rows($result_feed);

$conn_signup = new mysqli('localhost:3308', 'root', '', 'signup');
$query = "select * from signup";
$result_signup = mysqli_query($conn_signup, $query);
$count_signup = mysqli_num_rows($result_signup);

$conn_products = new mysqli('localhost:3308', 'root', '', 'croppurchase');
$query = "select * from croppurchase";
$result_products = mysqli_query($conn_products, $query);
$count_products = mysqli_num_rows($result_products);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Update Status</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script>
    $(function(){
    $('.nav_head').load('../templates/adminnavbar.html');
    });

    $(function(){
    $('.nav_side').load('../templates/nav_side.html');
    });
  </script>
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <a href="#" class="logo">
        <span class="logo-mini"><b>A</b>P</span>
        <span class="logo-lg"><b>Admin Panel</span>
      </a>
      <div class="nav_head">

      </div>
    </header>
    <div class="nav_side"></div>
    <div class="content-wrapper">
      <section class="content-header">
        <h1>
          Update Status of Orders
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Update Status</li>
        </ol>
      </section>
      <section class="content">
        <div class="row">
          <div class="col-md-4">
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Order status</h3>
              </div>
              <div class="box-body">
                <ul class="products-list product-list-in-box">
                  <?php
                  while ($row=mysqli_fetch_array($result_orders)) {
                  ?>
                    <li class="item">
                      <div class="product-img" style="width:120px;border-radius:10px;font-family:'Calibri';">
                        <?php echo ($row["Product_name"]) ?>
                      </div>
                      <div class="product-info">
                          <span class="label label-danger pull-right"><?php echo ($row['Status']) ?></span></a>
                        <span class="product-description">
                          <?php echo ($row['Transaction_id']) ?>
                          <?php echo ($row['Username']) ?>
                        </span>
                      </div>
                    </li>
                  <?php
                  }
                  ?>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box box-info" style="width:700px;height:200px;background-color:lavender">
              <div class="box-header with-border">
                <h3 class="box-title">Update Status</h3>
              </div>
              <div class="box-body">
                <section class="vh-100 gradient-custom">
                  <div class="container py-5 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                      <div class="col-12 col-lg-9 col-xl-7">
                        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                          <div class="card-body p-4 p-md-5">
                          <form action="../main/updatestatusmain.php" method="POST" enctype="multipart/form-data">
                            <div class="row">

                                <div class="col-md-3 mb-4">
                                  <div class="form-outline">
                                    <input type="text" name="Username" class="form-control form-control-lg" style="width:200px;border-radius:10px;font-family:'Calibri';" placeholder="Username" required>
                                  </div>
                                </div>

                                <div class="col-md-2 mb-4">
                                  <div class="form-outline">
                                    <input type="text" name="Transaction" class="form-control form-control-lg" style="width:350px;border-radius:10px;font-family:'Calibri';" placeholder="Transaction" required>
                                  </div>
                                </div>
                              </div>
                              <br>
                              <div class="row">
                                <div class="col-md-3 mb-4">
                                  <div class="form-outline">
                                    <input type="text" name="Status" class="form-control form-control-lg" style="width:200px;border-radius:10px;font-family:'Calibri';" placeholder="Status" required>
                                  </div>
                                </div>
                              </div>
                              <br>
                              <input class="btn btn-success btn-md" type="submit" value="Submit" style="width:100px;border-radius:10px;font-family:'Calibri';">
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
      </section>
    </div>
    <div class="control-sidebar-bg"></div>
  </div>
  <script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <script src="../plugins/fastclick/fastclick.js"></script>
  <script src="../dist/js/app.min.js"></script>
  <script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
  <script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <script src="../plugins/chartjs/Chart.min.js"></script>
  <script src="../dist/js/pages/dashboard2.js"></script>
  <script src="../dist/js/demo.js"></script>

</body>

</html>