<?php
session_start();
include_once '../admin/dbconnect.php';
?>

<header class="main-header">
  <!-- Logo -->
  <a href="index.php" class="logo"><b>CWMS</b> Admin</a>
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
            <img src="dist/img/admin.jpg" class="user-image" alt="User Image"/>

            <?php if (isset($_SESSION['usr_id'])) { ?>




            <span class="hidden-xs">CWMS <?php echo $_SESSION['usr_name']; ?></span>


          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="dist/img/admin.jpg" class="img-circle" alt="User Image" />
              <p>
              Eswahili <?php echo $_SESSION['usr_name']; ?>

              </p>
            </li>
            <!-- Menu Body -->

            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="../admin/logout.php" class="btn btn-default btn-flat">Sign out</a>
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
        <img src="dist/img/admin.jpg" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
        <p>Eswahili <?php echo " ". $_SESSION['usr_name']; ?></p>

        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->

    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li class=" treeview">
        <a href="index.php">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>

      </li>




      <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Words</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="./pages/tables/addnew.php"><i class="fa fa-circle-o"></i>Add new word</a></li>
          <li><a href="./pages/tables/wordimages.php"><i class="fa fa-circle-o"></i> Words with images</a></li>
          <li><a href="./pages/tables/wordnoimages.php"><i class="fa fa-circle-o"></i> Words with no images</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-users"></i> <span>Users</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">

          <li><a href="pages/tables/newuser.php"><i class="fa fa-user"></i> Add new user</a></li>
          <li><a href="pages/tables/users.php"><i class="fa fa-circle-o"></i> All users</a></li>
            <li><a href="pages/tables/certificate.php"><i class="fa fa-user"></i> Who have certificate</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="support.php">
          <i class="fa fa-envelope"></i> <span>Support messages</span>

        </a>

      </li>


      <li class="treeview">
        <a href="#">
          <i class="fa fa-folder"></i> <span>Report</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="pages/tables/newuser.php"><i class="fa fa-circle-o"></i> Users</a></li>
          <li><a href="pages/tables/newuser.php"><i class="fa fa-circle-o"></i> Users with certificate</a></li>
          <li><a href="pages/tables/newuser.php"><i class="fa fa-circle-o"></i> Words with images</a></li>
          <li><a href="pages/tables/newuser.php"><i class="fa fa-circle-o"></i> Words with no images</a></li>

        </ul>
      </li>


    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<?php } else { ?>
<a href="../admin/index.php"><img src="images/login.jpg" alt=""></a>
<?php } ?>
