<?php
require_once ("navbar.php");
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
            <li class="active"><a href="#"><i class="fa fa-book"></i> <span>Settings</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> Settings </h1>
        <ol class="breadcrumb">
            <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Settings</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements disabled -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">General Settings</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                    <form role="form">

                    </form>
            </div>
            <!-- /.box-body -->
          </div>
              </div>
          <!-- /.box -->
        </div>
      </section>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2017 <a href="localhost/cv/user">CV Online Shopping</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->
</body>
</html>