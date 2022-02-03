<?php
require_once ("navbar.php");

    if(isset($_POST['submit'])) {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
            
        $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
        if(! $conn ) {
           die('Could not connect: ' . mysql_error());
        }
        $productname = $_POST['productname'];
        $description = $_POST['description'];
        $type = $_POST['type'];
        $supplier = $_POST['supplier'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];
        $img = $_POST['img'];

        $sql = "INSERT INTO products(name, description, type, supplier, status, price, stock) VALUES ('$productname', '$description', '$type', '$supplier', 'AVAILABLE', '$price', '$qty') " ;
        mysql_select_db('cvdb');
        $retval = mysql_query( $sql, $conn );

        if(! $retval ) {
           die('Could not update data: ' . mysql_error());
        }
        else{
            $message = "Added new product successfully!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            echo "<script>window.open('products.php','_self')</script>";
        }
        mysql_close($conn);
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
            <li>
                <a href="home.php">
                    <i class="fa fa-home"></i> <span>Home</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="home.php"><i class="fa fa-circle-o"></i> Dashboard</a></li>
                    <li><a href="products.php"><i class="fa fa-circle-o"></i> Products</a></li>
                    <li><a href="orders.php"><i class="fa fa-circle-o"></i> Orders</a></li>
                    <li><a href="user_reg.php"><i class="fa fa-circle-o"></i> Registered Users</a></li>
                </ul>
            </li>
            <li class="active treeview"><a><i class="fa fa-cog"></i>
                <span>Config</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Add new products</a></li>
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
        <h1> Add New Products </h1>
        <ol class="breadcrumb">
            <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Config</li>
            <li class="active">Add</li>
        </ol>
    </section>
    
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title"></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form role="form" method = "post" action = "<?php $_PHP_SELF ?>">
                            <!-- text input -->
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-md-2"></div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Product Name</label>
                                        <input type="text" class="form-control" placeholder="Enter product name" name="productname">
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" rows="3" placeholder="Enter the description and specification here.." name="description"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Type</label>
                                        <select class="form-control" name="type">
                                            <option>menshirt</option>
                                            <option>mentuxedo</option>
                                            <option>menwatch</option>
                                            <option>mensandals</option>
                                            <option>womenshirt</option>
                                            <option>womenskirt</option>
                                            <option>ladieswatch</option>
                                            <option>womensandals</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Supplier</label>
                                        <input type="text" class="form-control" placeholder="Supplier" name="supplier">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" class="form-control" placeholder="Price per qty" name="price">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Qty</label>
                                        <input type="text" class="form-control" placeholder="Quantity" name="qty">
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Upload Image</label>
                                        <input type="file" id="exampleInputFile" name="img">
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-2">
                                    <br>
                                    <button type="submit" class="btn btn-block btn-success" name="submit" id="submit">Submit</button>
                                </div>
                            </div>
                            <br>
                            <br>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
</div>

<!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; 2017 <a href="localhost/cv/user">CV Online Shopping</a>.</strong> All rights reserved.
</footer>
</div>
<!-- ./wrapper -->
</body>
</html>