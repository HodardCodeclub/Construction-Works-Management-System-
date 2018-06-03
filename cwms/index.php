<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">


        <?php
      include "header.php";

         ?>
      <!-- Left side column. contains the logo and sidebar -->

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Version 2.0</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"> <i class="fa fa-files-o"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Branches</span>
                  <span class="info-box-number">
                     <?php
        $user = "root";
    $password = "lecteur1994ange";
    $host ="localhost";
    $db_name ="hodard";
    $con = mysqli_connect($host,$user,$password,$db_name);
       $count = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM branches"));

echo $count[0];
        //echo 50; ?

?>
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red">  <i class="fa fa-th"></i> </span>
                <div class="info-box-content">
                  <span class="info-box-text">Projects</span>
                  <span class="info-box-number">
                           <?php
        $user = "root";
    $password = "lecteur1994ange";
    $host ="localhost";
    $db_name ="hodard";
    $con = mysqli_connect($host,$user,$password,$db_name);
       $count = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM projects"));

echo $count[0];
        //echo 50; ?

?>
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green">  <i class="fa fa-laptop"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Items</span>
                  <span class="info-box-number">
                                       <?php
        $user = "root";
    $password = "lecteur1994ange";
    $host ="localhost";
    $db_name ="hodard";
    $con = mysqli_connect($host,$user,$password,$db_name);
       $count = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM items"));

echo $count[0];
        //echo 50; ?

?>
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"> <i class="fa fa-pie-chart"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Vendors</span>
                  <span class="info-box-number">
                                       <?php
        $user = "root";
    $password = "lecteur1994ange";
    $host ="localhost";
    $db_name ="hodard";
    $con = mysqli_connect($host,$user,$password,$db_name);
       $count = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM vendors"));

echo $count[0];
        //echo 50; ?

?>
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->


          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
         

            <div class="col-md-12">
              <!-- Info Boxes Style 2 -->
              <div class="info-box bg-yellow">
                <span class="info-box-icon"><i class="fa fa-pie-chart"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">This is the list of our vendors</span>
                  <span class="info-box-number"> <?php
        $user = "root";
    $password = "lecteur1994ange";
    $host ="localhost";
    $db_name ="hodard";
    $con = mysqli_connect($host,$user,$password,$db_name);
       $count = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM vendors"));

echo $count[0];
        //echo 50; ?

?></span>
                  
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
              <div class="info-box bg-green">
                <span class="info-box-icon"><i class="fa fa-laptop"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">This is the list of our items</span>
                  <span class="info-box-number">                                 <?php
        $user = "root";
    $password = "lecteur1994ange";
    $host ="localhost";
    $db_name ="hodard";
    $con = mysqli_connect($host,$user,$password,$db_name);
       $count = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM items"));

echo $count[0];
        //echo 50; ?

?>
  
</span>
                  
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
              <div class="info-box bg-red">
                <span class="info-box-icon"><i class="fa fa-th"></i> </span>
                <div class="info-box-content">
                  <span class="info-box-text">This the list of all projects</span>
                  <span class="info-box-number">                 <?php
        $user = "root";
    $password = "lecteur1994ange";
    $host ="localhost";
    $db_name ="hodard";
    $con = mysqli_connect($host,$user,$password,$db_name);
       $count = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM projects"));

echo $count[0];
        //echo 50; ?

?></span>
                
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
              <div class="info-box bg-aqua">
                <span class="info-box-icon"><i class="fa fa-files-o"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">This is the list of all our branches</span>
                  <span class="info-box-number"> <?php
        $user = "root";
    $password = "lecteur1994ange";
    $host ="localhost";
    $db_name ="hodard";
    $con = mysqli_connect($host,$user,$password,$db_name);
       $count = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM branches"));

echo $count[0];
        //echo 50; ?

?></span>
                 
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

         
                </div><!-- /.box-body -->
              
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="plugins/chartjs/Chart.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>
