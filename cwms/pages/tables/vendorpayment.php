<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  <title>CWMS  </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="../../plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="../../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">

      <?php include "header.php"; ?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          CWMS App

          </h1>

        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">


              <div class="box">
                <a href="newvendorpayment.php" class="btn btn-info">Create new vendor payment</a>
                <div class="box-header">
                  <h3 class="box-title">All vendor payments</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div id="printMe">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Vendor</th>
                        <th>Invoice</th>
                        <th>Order</th>
                        <th>Original</th>
                        <th>Due</th>
                        <th>payment Date</th>
                        <th>Requested</th>
                        <th>Reason</th>


                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>


                      <?php
           $conn = mysqli_connect("localhost","root","lecteur1994ange");
             mysqli_select_db($conn,"hodard");


           $result=mysqli_query($conn,"SELECT * from vendorpayment");

           while($test = mysqli_fetch_array($result))
           {
             $id = $test['id'];
             //echo "<tbody>";
             echo "<tr align='center'>";
                     // echo"<td>" .$test['id']."</font></td>";
              echo"<td>" .$test['vname']."</font></td>";
                   //  echo"<td>" .$test['dateofbirth']."</font></td>";
             echo"<td>" .$test['idate']."</font></td>";
            
             echo"<td>" .$test['inumber']."</font></td>";
             echo"<td>" .$test['odate']."</font></td>";
             echo"<td>" .$test['amount']."</font></td>";
             echo"<td>" .$test['damount']."</font></td>";
             echo"<td>" .$test['rdate']."</font></td>";
             echo"<td>" .$test['dpdate']."</font></td>";

             echo"<td>" .$test['who']."</font></td>";
             echo"<td>" .$test['reason']."</font></td>";

                       echo "<td>";
              ?>

              <td><a href="?delete_id=<?php echo $id; ?>" title="click for delete" onclick="return confirm('sure to delete ?')" class='btn btn-danger'>Delete</a></td>

              <?php
                       echo"</td>";
               //echo"<td> <a href ='prisonerupdate.php?id=$id'><button class='btn btn-success'>Update</button></a>"
               //echo"<td> <a href ='prisonnertransfer.php?id=$id'><button class='btn btn-info'>Transfer</button></a>";
               //echo"<td> <a href ='realesedprisoner.php?id=$id'><button class='btn btn-success'>Realese</button></a>";

               //echo"<td> <a href ='prisonerdeleteadmin.php?id=$id'><button class='btn btn-default'>out</button></a>";

             echo "</tr>";
             //echo "</tbody>";
           }
           mysqli_close($conn);
           ?>




                    </tbody>
                   

                  </table>
                </div>
                    <a href="#" class="btn btn-success" onclick="printDiv('printMe')">Print This report</a>
                                            <script>
                                                function printDiv(divName){
                                                  var printContents = document.getElementById(divName).innerHTML;
                                                  var originalContents = document.body.innerHTML;
                                                  document.body.innerHTML = printContents;
                                                  window.print();
                                                  document.body.innerHTML = originalContents;
                                                }
                                              </script>
                  <?php



                    if(isset($_GET['delete_id']))
                    {
                      // select image from db to delete


                      // it will delete an actual record from db
                      // $stmt_delete = $DB_con->prepare('DELETE FROM users WHERE id =:uid');
                      // $stmt_delete->bindParam(':uid',$_GET['delete_id']);
                      // $stmt_delete->execute();


                      $conn = mysqli_connect("localhost","root","lecteur1994ange");
                        mysqli_select_db($conn,"hodard");
                        $idd =$_GET['delete_id'];

                      $result=mysqli_query($conn,"DELETE FROM vendorpayment where id ='$idd'");


                      // header("Location: index.php");
                    }

                  ?>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include "../../footer.php"; ?>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="../../plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="../../plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="../../plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>

  </body>
</html>
