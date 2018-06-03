
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin | Dashboard</title>
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
   <?php if (isset($_SESSION['usr_id'])) { ?>s
      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>ESwahili App</small>
          </h1>

        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion ion-person"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">ESwahili users</span>
                  <span class="info-box-number">
                    <?php
        $user = "root";
    $password = "";
    $host ="localhost";
    $db_name ="eswahili";
    $con = mysqli_connect($host,$user,$password,$db_name);
       $count = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM users where email !='admin@gmail.com'"));

echo $count[0];
        //echo 50; ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="ion ion-cube"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Words</span>
                  <span class="info-box-number">
                     <?php
        $user = "root";
    $password = "";
    $host ="localhost";
    $db_name ="eswahili";
    $con = mysqli_connect($host,$user,$password,$db_name);
       $count = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM wordimages"));

echo $count[0];
        //echo 50; ?>
      </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-ionic"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Support messages</span>
                  <span class="info-box-number">
                    <?php
       $user = "root";
   $password = "";
   $host ="localhost";
   $db_name ="eswahili";
   $con = mysqli_connect($host,$user,$password,$db_name);
      $count = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM support"));

echo $count[0];
       //echo 50; ?>
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Certificate</span>
                  <span class="info-box-number">
                    <?php
        $user = "root";
    $password = "";
    $host ="localhost";
    $db_name ="eswahili";
    $con = mysqli_connect($host,$user,$password,$db_name);
       $count = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM users where currentmarks >=80"));

echo $count[0];
        //echo 50; ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Some report</h3>

                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">

                        <div class="col-md-12">
                          <!-- Info Boxes Style 2 -->
                          <div class="info-box bg-yellow">
                            <span class="info-box-icon"><i class="ion ion-ios-people-outline"></i></span>
                            <div class="info-box-content" >
                              <span class="info-box-text">User who got our certificate</span>
                              <span class="info-box-number">  <?php
                    $user = "root";
                $password = "";
                $host ="localhost";
                $db_name ="eswahili";
                $con = mysqli_connect($host,$user,$password,$db_name);
                   $count = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM users where currentmarks >=80"));

            echo $count[0];
                    //echo 50; ?></span>
                              <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                              </div>
                              <span class="progress-description">
                                <?php
                    $user = "root";
                $password = "";
                $host ="localhost";
                $db_name ="eswahili";
                $con = mysqli_connect($host,$user,$password,$db_name);
                   $count = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM users where currentmarks >=80"));

            echo $count[0];
                    //echo 50; ?> of   <?php
          $user = "root";
      $password = "";
      $host ="localhost";
      $db_name ="eswahili";
      $con = mysqli_connect($host,$user,$password,$db_name);
         $count = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM users where email !='admin@gmail.com'"));

  echo $count[0];
          //echo 50; ?>
                              </span>
                            </div><!-- /.info-box-content -->
                          </div><!-- /.info-box -->
                          <div class="info-box bg-green">
                            <span class="info-box-icon"><i class="ion ion-ionic"></i></span>
                            <div class="info-box-content">
                              <span class="info-box-text">Support messages from the users</span>
                              <span class="info-box-number">      <?php
                       $user = "root";
                   $password = "";
                   $host ="localhost";
                   $db_name ="eswahili";
                   $con = mysqli_connect($host,$user,$password,$db_name);
                      $count = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM support"));

                echo $count[0];
                       //echo 50; ?></span>
                              <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                              </div>
                              <span class="progress-description">
                                This is the messages that comes from your system users
                              </span>
                            </div><!-- /.info-box-content -->
                          </div><!-- /.info-box -->
                          <div class="info-box bg-red">
                            <span class="info-box-icon"><i class="ion ion-cube"></i></span>
                            <div class="info-box-content">
                              <span class="info-box-text">kiswahili words</span>
                              <span class="info-box-number">
                                <?php
                 $user = "root";
             $password = "";
             $host ="localhost";
             $db_name ="eswahili";
             $con = mysqli_connect($host,$user,$password,$db_name);
                $count = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM wordimages"));

         echo $count[0];
                 //echo 50; ?></span>
                              <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                              </div>
                              <span class="progress-description">
                                <?php
                 $user = "root";
             $password = "";
             $host ="localhost";
             $db_name ="eswahili";
             $con = mysqli_connect($host,$user,$password,$db_name);
                $count = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM wordimages where Pic !=''"));

         echo $count[0];
                 //echo 50; ?> of     <?php
      $user = "root";
  $password = "";
  $host ="localhost";
  $db_name ="eswahili";
  $con = mysqli_connect($host,$user,$password,$db_name);
     $count = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM wordimages "));

echo $count[0];
      //echo 50; ?>  has their images
                              </span>
                            </div><!-- /.info-box-content -->
                          </div><!-- /.info-box -->
                          <div class="info-box bg-aqua">
                            <span class="info-box-icon"><i class="ion-person"></i></span>
                            <div class="info-box-content">
                              <span class="info-box-text">ESwahili users</span>
                              <span class="info-box-number"><?php
                  $user = "root";
              $password = "";
              $host ="localhost";
              $db_name ="eswahili";
              $con = mysqli_connect($host,$user,$password,$db_name);
                 $count = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM users where email !='admin@gmail.com'"));

          echo $count[0];
                  //echo 50; ?></span>
                              <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                              </div>
                              <span class="progress-description">

                              </span>
                            </div><!-- /.info-box-content -->
                          </div><!-- /.info-box -->
                        </div><!-- /.col -->

                  </div><!-- /.row -->
                </div><!-- ./box-body -->

              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->








        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <?php


      include "footer.php"; ?>

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
<?php }else{

}

?>
