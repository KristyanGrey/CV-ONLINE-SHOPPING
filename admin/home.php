<?php
require_once ("navbar.php");
require_once("controlller.php");
$db_handle = new DBController();

date_default_timezone_set('Asia/Manila');
$date = date('m');
$con = mysqli_connect("localhost","root","","cvdb");

while (mysqli_connect_errno())
{
    echo "MySQLi Connection was not established: " . mysqli_connect_error();
}


?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Admin</p>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="home.php">
                    <i class="fa fa-home"></i> <span>Home</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Dashboard</a></li>
                    <li><a href="products.php"><i class="fa fa-circle-o"></i> Products</a></li>
                    <li><a href="orders.php"><i class="fa fa-circle-o"></i> Orders</a></li>
                    <li><a href="user_reg.php"><i class="fa fa-circle-o"></i> Registered Users</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-cog"></i>
                <span>Config</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="add.php"><i class="fa fa-circle-o"></i> Add new products</a></li>
                <li><a href="update.php"><i class="fa fa-circle-o"></i> Update stocks</a></li>
                <li><a href="outOfStock.php"><i class="fa fa-circle-o"></i> Out of stock</a></li>
            </ul>
        </li>
        <li><a><i class="fa fa-dashboard"></i>
            <span>Status</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="pending.php"><i class="fa fa-circle-o"></i> Pending</a></li>
            <li><a href="approved.php"><i class="fa fa-circle-o"></i> Approved</a></li>
            <li><a href="shipped.php"><i class="fa fa-circle-o"></i> Shipped</a></li>
            <li><a href="delivered.php"><i class="fa fa-circle-o"></i> Delivered</a></li>
        </ul>
    </li>
    <li><a href="settings.php"><i class="fa fa-book"></i> <span>Settings</span></a></li>
</ul>
</section>
<!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Dashboard</h1>
        <ol class="breadcrumb">
            <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3> 
                            <?php

                            $sql = "SELECT * FROM order_items WHERE status='pending' ";
                            if ($result=mysqli_query($con,$sql))
                            {
                        // Return the number of rows in result set
                                $rowcount=mysqli_num_rows($result);
                                echo $rowcount;
                        // Free result set
                                mysqli_free_result($result);
                            }
                            ?>                       
                        </h3>
                        <p>Orders</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="orders.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>
                            <?php

                            $sql = "SELECT * FROM products";
                            if ($result=mysqli_query($con,$sql))
                            {
                        // Return the number of rows in result set
                                $rowcount=mysqli_num_rows($result);
                                echo $rowcount;
                        // Free result set
                                mysqli_free_result($result);
                            }

                            ?>          
                        </h3>
                        <p>Products</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="products.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>
                            <?php

                            $sql = "SELECT * FROM customers";
                            if ($result=mysqli_query($con,$sql))
                            {
                        // Return the number of rows in result set
                                $rowcount=mysqli_num_rows($result);
                                echo $rowcount;
                        // Free result set
                                mysqli_free_result($result);
                            }

                            ?> 
                        </h3>
                        <p>User Registrations</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        
        <div class="row">
            <div class="col-md-12">
                <!-- AREA CHART -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Sales Analytics</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="chart">
                            <canvas id="areaChart" style="height:250px"></canvas>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <div class="row">
            <!-- PRODUCT LIST -->
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Recently Added Products</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <ul class="products-list product-list-in-box">
                            <?php
                            $product_array = $db_handle->runQuery("SELECT * FROM products ORDER BY date_added DESC LIMIT 0,5");
                            if (!empty($product_array)) { 
                                foreach($product_array as $key=>$value){
                                    ?>
                                    <li class="item">
                                        <div class="product-img">
                                            <img src="<?php echo $product_array[$key]["image"]; ?>" alt="Product Image">
                                        </div>
                                        <div class="product-info">
                                            <a href="javascript:void(0)" class="product-title"><?php echo $product_array[$key]["name"]; ?>
                                                <span class="label label-warning pull-right">&#8369;<?php echo $product_array[$key]["price"]; ?></span></a>
                                                <span class="product-description">
                                                    <?php echo $product_array[$key]["description"]; ?>
                                                </span>
                                            </div>
                                        </li>
                                        <?php
                                    }
                                }
                                ?>
                            </ul>
                        </div>

                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <a href="products.php" class="uppercase">View All Products</a>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- TABLE: LATEST ORDERS -->
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Latest Orders</h3>

                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table class="table no-margin">
                                            <thead>
                                                <tr>
                                                    <th><center>Customer ID</center></th>
                                                    <th><center>Total Cost</center></th>
                                                    <th><center>Date Ordered</center></th>
                                                    <th><center>Status</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <?php
                                                    $product_array = $db_handle->runQuery("SELECT * FROM orders ORDER BY created DESC LIMIT 0,10");
                                                    if (!empty($product_array)) { 
                                                        foreach($product_array as $key=>$value){
                                                            ?>
                                                            <tr>
                                                                <td><center><?php echo $product_array[$key]["customer_id"]; ?></center></td>
                                                                <td><center>&#8369;<?php echo $product_array[$key]["total_price"]; ?></center></td>
                                                                <td><center><?php echo $product_array[$key]["created"]; ?></center></td>
                                                                <td>
                                                                    <center>
                                                                        <?php
                                                                        if($product_array[$key]["status"] == 'pending'){ echo " <span class='label label-warning'>Pending</span>";}
                                                                        else if($product_array[$key]["status"] == 'processing'){ echo " <span class='label label-info'>Processing</span>";}
                                                                        else if($product_array[$key]["status"] == 'shipped'){ echo " <span class='label label-success'>Shipped</span>";}
                                                                        else if($product_array[$key]["status"] == 'delivered'){ echo " <span class='label label-danger'>Delivered</span>";}
                                                                        else if($product_array[$key]["status"] == 'cancelled'){ echo " <span class='label label-info'>Cancelled</span>";}
                                                                        ?>
                                                                    </center>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>

                                <div class="box-footer clearfix">
                                    <a href="orders.php" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
                                </div>
                                <!-- /.box-footer -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <div class="col-md-12">
                            <!-- MOST BUYED ITEMS -->
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Most Buyed Item of the Month</h3>

                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <ul class="products-list product-list-in-box">
                                        <?php
                                        $product_array = $db_handle->runQuery("SELECT * FROM products WHERE analytics = (SELECT MAX(analytics) FROM products WHERE MONTH(modified) = $date) LIMIT 5");
                                        if (!empty($product_array)) { 
                                            foreach($product_array as $key=>$value){
                                                ?>
                                                <li class="item">
                                                    <div class="product-img">
                                                        <img src="<?php echo $product_array[$key]["image"]; ?>" alt="Product Image">
                                                    </div>
                                                    <div class="product-info">
                                                        <a href="javascript:void(0)" class="product-title"><?php echo $product_array[$key]["name"]; ?>
                                                            <span class="label label-warning pull-right">&#8369;<?php echo $product_array[$key]["price"]; ?></span></a>
                                                            <span class="product-description">
                                                                <?php echo $product_array[$key]["description"]; ?>
                                                            </span>
                                                            <span class="product-description">
                                                                <i>No. of sales: </i> <b> <?php echo $product_array[$key]["analytics"]; ?></b>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </ul>
                                    </div>

                                    <!-- /.box-body -->
                                    <div class="box-footer text-center">
                                        <a href="products.php" class="uppercase">View All Products</a>
                                    </div>
                                    <!-- /.box-footer -->
                                </div>
                                <!-- /.box -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<footer class="main-footer">
    <strong>Copyright &copy; 2017 <a href="localhost/cv/user">CV Online Shopping</a>.</strong> All rights reserved.
</footer>

</div>
<!-- ./wrapper -->
<script>
$(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
    // This will get the first returned node in the jQuery collection.
    var areaChart = new Chart(areaChartCanvas);

    var areaChartData = {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [
        {
          label: "Electronics",
          fillColor: "rgba(210, 214, 222, 1)",
          strokeColor: "rgba(210, 214, 222, 1)",
          pointColor: "rgba(210, 214, 222, 1)",
          pointStrokeColor: "#c1c7d1",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [65, 59, 80, 81, 56, 55, 40]
        },
        {
          label: "Digital Goods",
          fillColor: "rgba(60,141,188,0.9)",
          strokeColor: "rgba(60,141,188,0.8)",
          pointColor: "#3b8bba",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: [28, 48, 40, 19, 86, 27, 90]
        }
      ]
    };

    var areaChartOptions = {
      //Boolean - If we should show the scale at all
      showScale: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: false,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - Whether the line is curved between points
      bezierCurve: true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension: 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot: false,
      //Number - Radius of each point dot in pixels
      pointDotRadius: 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth: 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius: 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke: true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth: 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true
    };

    //Create the line chart
    areaChart.Line(areaChartData, areaChartOptions);
});
</script>
</body>
</html>