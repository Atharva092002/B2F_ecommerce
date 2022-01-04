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
  <title>Main Admin Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script>
    window.onload = function() {

      var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        axisY: {
          includeZero: false,
          prefix: "$"
        },
        toolTip: {
          shared: true
        },
        legend: {
          fontSize: 13
        },
        data: [{
            type: "splineArea",
            showInLegend: true,
            name: "Salaries",
            yValueFormatString: "$#,##0",
            xValueFormatString: "MMM YYYY",
            dataPoints: [{
                x: new Date(2016, 2),
                y: 30000
              },
              {
                x: new Date(2016, 3),
                y: 35000
              },
              {
                x: new Date(2016, 4),
                y: 30000
              },
              {
                x: new Date(2016, 5),
                y: 30400
              },
              {
                x: new Date(2016, 6),
                y: 20900
              },
              {
                x: new Date(2016, 7),
                y: 31000
              },
              {
                x: new Date(2016, 8),
                y: 30200
              },
              {
                x: new Date(2016, 9),
                y: 30000
              },
              {
                x: new Date(2016, 10),
                y: 33000
              },
              {
                x: new Date(2016, 11),
                y: 38000
              },
              {
                x: new Date(2017, 0),
                y: 38900
              },
              {
                x: new Date(2017, 1),
                y: 39000
              }
            ]
          },
          {
            type: "splineArea",
            showInLegend: true,
            name: "Cost",
            yValueFormatString: "$#,##0",
            dataPoints: [{
                x: new Date(2016, 2),
                y: 20100
              },
              {
                x: new Date(2016, 3),
                y: 16000
              },
              {
                x: new Date(2016, 4),
                y: 14000
              },
              {
                x: new Date(2016, 5),
                y: 18000
              },
              {
                x: new Date(2016, 6),
                y: 18000
              },
              {
                x: new Date(2016, 7),
                y: 21000
              },
              {
                x: new Date(2016, 8),
                y: 22000
              },
              {
                x: new Date(2016, 9),
                y: 25000
              },
              {
                x: new Date(2016, 10),
                y: 23000
              },
              {
                x: new Date(2016, 11),
                y: 25000
              },
              {
                x: new Date(2017, 0),
                y: 26000
              },
              {
                x: new Date(2017, 1),
                y: 25000
              }
            ]
          },
          {
            type: "splineArea",
            showInLegend: true,
            name: "Revenue",
            yValueFormatString: "$#,##0",
            dataPoints: [{
                x: new Date(2016, 2),
                y: 10100
              },
              {
                x: new Date(2016, 3),
                y: 6000
              },
              {
                x: new Date(2016, 4),
                y: 3400
              },
              {
                x: new Date(2016, 5),
                y: 4000
              },
              {
                x: new Date(2016, 6),
                y: 9000
              },
              {
                x: new Date(2016, 7),
                y: 3900
              },
              {
                x: new Date(2016, 8),
                y: 4200
              },
              {
                x: new Date(2016, 9),
                y: 5000
              },
              {
                x: new Date(2016, 10),
                y: 14300
              },
              {
                x: new Date(2016, 11),
                y: 12300
              },
              {
                x: new Date(2017, 0),
                y: 8300
              },
              {
                x: new Date(2017, 1),
                y: 6300
              }
            ]
          },
          {
            type: "splineArea",
            showInLegend: true,
            yValueFormatString: "$#,##0",
            name: "Profit",
            dataPoints: [{
                x: new Date(2016, 2),
                y: 1700
              },
              {
                x: new Date(2016, 3),
                y: 2600
              },
              {
                x: new Date(2016, 4),
                y: 1000
              },
              {
                x: new Date(2016, 5),
                y: 1400
              },
              {
                x: new Date(2016, 6),
                y: 900
              },
              {
                x: new Date(2016, 7),
                y: 1000
              },
              {
                x: new Date(2016, 8),
                y: 1200
              },
              {
                x: new Date(2016, 9),
                y: 5000
              },
              {
                x: new Date(2016, 10),
                y: 1300
              },
              {
                x: new Date(2016, 11),
                y: 2300
              },
              {
                x: new Date(2017, 0),
                y: 2800
              },
              {
                x: new Date(2017, 1),
                y: 1300
              }
            ]
          }
        ]
      });
      chart.render();
    }
  </script>
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
      <div class="nav_head"></div>
    
    </header>
    
    <div class="nav_side"></div>
    <div class="content-wrapper">
      <section class="content-header">
        <h1>
          Dashboard
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>

      <section class="content">
        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3><?php echo ($count_orders); ?></h3>
                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
              <div class="inner">
                <h3><?php echo ($count_cart); ?><sup style="font-size: 20px"></sup></h3>
                <p>Products in Cart</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3><?php echo ($count_signup); ?></h3>
                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
              <div class="inner">
                <h3><?php echo ($count_feed); ?></h3>
                <p>Positive Feedback</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Report</h3>
                </div>
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-8">
                      <p class="text-center">
                        <strong>Sales: 1 Mar, 2016 - 30 Jan, 2017</strong>
                      </p>

                      <div id="chartContainer" style="height: 180px;"></div>
                      <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

                    </div>
                    <div class="col-md-4">
                      <p class="text-center">
                        <strong>Goal Completion</strong>
                      </p>

                      <div class="progress-group">
                        <span class="progress-text">Products added to Cart</span>
                        <span class="progress-number"><b><?php echo ($count_cart); ?></b></span>

                        <div class="progress sm">
                          <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                        </div>
                      </div>
                      <div class="progress-group">
                        <span class="progress-text">Complete Purchase</span>
                        <span class="progress-number"><b><?php echo ($count_orders) ?></b></span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                        </div>
                      </div>

                      <div class="progress-group">
                        <span class="progress-text">Products Delivered</span>
                        <span class="progress-number"><b><?php echo ($count_feed); ?></b></span>

                        <div class="progress sm">
                          <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                        </div>
                      </div>

                      <div class="progress-group">
                        <span class="progress-text">Feedbacks Received</span>
                        <span class="progress-number"><b><?php echo ($count_feed) ?></b></span>

                        <div class="progress sm">
                          <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block border-right">
                        <h5 class="description-header">₹ <?php echo ($sum); ?></h5>
                        <span class="description-text">TOTAL REVENUE</span>
                      </div>
                    </div>

                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block border-right">
                        <h5 class="description-header">₹ <?php echo ($sum - 15000); ?></h5>
                        <span class="description-text">TOTAL COST</span>
                      </div>
                    </div>

                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block border-right">
                        <h5 class="description-header">₹ 15000</h5>
                        <span class="description-text">TOTAL PROFIT</span>
                      </div>
                    </div>

                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block">
                        <h5 class="description-header"><?php echo ($count_cart + $count_feed + $count_orders + $count_feed); ?></h5>
                        <span class="description-text">GOAL COMPLETIONS</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-8">
              <div class="row">
                <div class="col-md-6">
                  <div class="box box-info direct-chat direct-chat-warning" style="width: 735px;height: 400px;">
                    <div class="box-header with-border">
                      <h3 class="box-title">User Feedback</h3>
                    </div>
                    <div class="box-body">
                      <div class="direct-chat-messages">
                        <?php
                        while ($row = mysqli_fetch_array($result_feed)) {
                        ?>
                          <div class="direct-chat-msg">
                            <div class="direct-chat-info clearfix">
                              <span class="direct-chat-name pull-left">User Name</span>
                            </div>
                            <img class="direct-chat-img" src="../dist/img/21104.png" alt="message user image"><!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                              <?php echo ($row['feedback']) ?>
                            </div>
                          </div>
                        <?php
                        }
                        ?>
                      </div>

                    </div>

                  </div>
                </div>
              </div>
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Latest Orders</h3>

                </div>
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          <th>Order ID</th>
                          <th>Item</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($result_orders)) {
                        ?>
                          <tr>
                            <td><a href="pages/examples/invoice.html"><?php echo ($row['Transaction_id']); ?></a></td>
                            <td><?php echo ($row['Product_name']) ?></td>
                            <td><span class="label label-warning"><?php echo ($row['Status']) ?></span></td>
                          </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info-box bg-yellow">
                <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Inventory</span>
                  <span class="info-box-number">5,200</span>

                  <div class="progress">
                    <div class="progress-bar" style="width: 50%"></div>
                  </div>
                  <span class="progress-description">
                    50% Increase in 30 Days
                  </span>
                </div>
              </div>
              <div class="info-box bg-green">
                <span class="info-box-icon"><i class="icon ion-thumbsup"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Overall Rating</span>
                  <span class="info-box-number">4.5</span>

                  <div class="progress">
                    <div class="progress-bar" style="width: 20%"></div>
                  </div>
                  <span class="progress-description">
                    20% Increase in 30 Days
                  </span>
                </div>
              </div>
              <div class="info-box bg-red">
                <span class="info-box-icon"><i class="icon ion-cash"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Value for Money</span>
                  <span class="info-box-number">5</span>

                  <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                  </div>
                  <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
                </div>
              </div>
              <div class="info-box bg-aqua">
                <span class="info-box-icon"><i class="icon ion-arrow-graph-up-right"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Products Delivered</span>
                  <span class="info-box-number"><?php echo ($count_feed); ?></span>

                  <div class="progress">
                    <div class="progress-bar" style="width: 40%"></div>
                  </div>
                  <span class="progress-description">
                    40% Increase in 30 Days
                  </span>
                </div>
              </div>

              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Recently Added Products</h3>
                </div>
                <div class="box-body">
                  <ul class="products-list product-list-in-box">
                    <?php
                    while ($row = mysqli_fetch_array($result_products)) {
                    ?>
                      <li class="item">
                        <div class="product-img">
                          <img src="../<?php echo ($row["image"]) ?>">
                        </div>
                        <div class="product-info">
                          <a href="javascript:void(0)" class="product-title"><?php echo ($row['Name']) ?>
                            <span class="label label-warning pull-right">₹ <?php echo ($row['price']) ?></span></a>
                          <span class="product-description">
                            <?php echo ($row['Rating']) ?>
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
          </div>
          <center>
          <div class="row">
                <img src="../images/MapChart_Map(2).png" style="width:1100px;height:600x;">
          </div></center>
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