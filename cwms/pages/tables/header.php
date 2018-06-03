<?php
session_start();
include_once '../../../admin/dbconnect.php';
?>

<header class="main-header">
  <!-- Logo -->
  <a href="../../index.php" class="logo"><b>CWMS</b> Admin</a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->

        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="../../dist/img/admin.jpg" class="user-image" alt="User Image"/>






            <span class="hidden-xs">CWMS <?php echo $_SESSION['usr_name']; ?></span>


          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="../../dist/img/admin.jpg" class="img-circle" alt="User Image" />
              <p>
              CWMS <?php echo $_SESSION['usr_name']; ?>

              </p>
            </li>
            <!-- Menu Body -->

            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="../../../admin/logout.php" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="../../dist/img/admin.jpg" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
        <p>CWMS   <?php echo $_SESSION['usr_name']; ?></p>

        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">

      <li class="active ">
        <a href="../../index.php">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
        </a>
        <!-- <ul>

          <li class="active"><a href="index.php"><i class="fa fa-circle-o"></i> Dashboard</a></li>
        </ul> -->
      </li>
      <li class="">
        <a href="./branches.php">
          <i class="fa fa-files-o"></i>
          <span>Branches</span>

        </a>
        <!-- <ul class="treeview-menu">
          <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
          <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
          <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
          <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
        </ul> -->
      </li>
      <li>
        <a href="projects.php">
          <i class="fa fa-th"></i> <span>Projects</span>
        </a>
      </li>
      <li class="">
        <a href="vendors.php">
          <i class="fa fa-pie-chart"></i>
          <span>Vendors</span>
        
        </a>

      </li>
      <li class="">
        <a href="items.php">
          <i class="fa fa-laptop"></i>
          <span>Items</span>

        </a>
      
      </li>
      <li class="">
        <a href="purchaseorder.php">
          <i class="fa fa-edit"></i> <span>Purchase order</span>

        </a>

      </li>
     
      <li>
        <a href="vendorpayment.php">
          <i class="fa fa-calendar"></i> <span>Vendor payment Request</span>

        </a>
      </li>
     



    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
