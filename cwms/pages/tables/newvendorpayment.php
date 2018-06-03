<?php

	error_reporting( ~E_NOTICE ); // avoid notice

	require_once './dbconfig.php';

	if(isset($_POST['btnsave']))
	{
		$project =$_POST['project'];
    $idate =$_POST['idate'];
    $inumber =$_POST['inumber'];
    $odate =$_POST['odate'];
    $amount =$_POST['amount'];
    $damount =$_POST['damount'];
    $rdate =$_POST['rdate'];
    $dpdate =$_POST['dpdate'];
    $vendor =$_POST['vendor'];
    $reason =$_POST['reason'];



			$stmt = $DB_con->prepare('INSERT INTO vendorpayment(vname,idate,inumber,odate,amount,damount,rdate,dpdate,who,reason) VALUES(:project, :idate, :inumber,:odate, :amount, :damount,:rdate, :dpdate, :vendor,:reason)');
			$stmt->bindParam(':project',$project);
      $stmt->bindParam(':idate',$idate);
      $stmt->bindParam(':inumber',$inumber);
      $stmt->bindParam(':odate',$odate);
      $stmt->bindParam(':amount',$amount);
      $stmt->bindParam(':damount',$damount);
      $stmt->bindParam(':rdate',$rdate);
      $stmt->bindParam(':dpdate',$dpdate);
      $stmt->bindParam(':vendor',$vendor);
      $stmt->bindParam(':reason',$reason);



			if($stmt->execute())
			{
				$successMSG = "new record succesfully inserted ...";
				// header("refresh:5;index.php"); // redirects image view page after 5 seconds.
        ?>
<script type="text/javascript">
  alert("new record succesfully inserted");
</script>

        <?php
			}
			else
			{
				$errMSG = "error while inserting....";
			}

	}
?>
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
          CWMS New vendor payment request

          </h1>

        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-8 col-xs-offset-2">


              <div class="box">

                <div class="box-body">


<a href="vendorpayment.php" class="btn btn-success">See all vendor payment request</a>
                  <form method="post" enctype="multipart/form-data" class="form-horizontal">



									<label class="control-label">Vendor name.</label>
								    <?php

$conn = new mysqli('localhost', 'root', 'lecteur1994ange', 'hodard')
or die ('Cannot connect to db');

    $result = $conn->query("SELECT * from vendors");


    echo "<select name='project' class='form-control' >";
      echo "<option>Select vendor name</option>";
    while ($row = $result->fetch_assoc()) {

                  unset($id, $name);
                  $id = $row['id'];
                  $name = $row['vname'];
                  echo '<option value="'.$name.'">'.$name.'</option>';

}

    echo "</select>";    

?>
										<label class="control-label">Invoice date.</label></td>
													<input class="form-control" type="date" name="idate" />
										<label class="control-label"> Vendor invoice number.</label>
													<input class="form-control" type="text" name="inumber" placeholder="Enter Vendor invoice number" />


										<label class="control-label">Order date.</label>
													<input class="form-control" type="date" name="odate"  />

													<label class="control-label">Original amount.</label>
																	<input class="form-control" type="text" name="amount" placeholder="Enter Original amount" />
														<label class="control-label">Due amount.</label></td>
																	<input class="form-control" type="text" name="damount" placeholder="Enter Due amount" />
														<label class="control-label">Vendor payment request date</label>
																	<input class="form-control" type="date" name="rdate"  />

																	<label class="control-label">Due date of payment.</label>
																					<input class="form-control" type="date" name="dpdate" />


																					<label class="control-label">Requested by.</label>
																				  <?php

$conn = new mysqli('localhost', 'root', 'lecteur1994ange', 'hodard')
or die ('Cannot connect to db');

    $result = $conn->query("SELECT * from vendors");


    echo "<select name='vendor' class='form-control' >";
      echo "<option>Select vendor name</option>";
    while ($row = $result->fetch_assoc()) {

                  unset($id, $name);
                  $id = $row['id'];
                  $name = $row['vname'];
                  echo '<option value="'.$name.'">'.$name.'</option>';

}

    echo "</select>";    

?>
														<label class="control-label">Reason for payment.</label></td>
																	<input class="form-control" type="text" name="reason" placeholder="Enter Reason for payment." />


                    <button type="submit" name="btnsave" class="btn btn-info">
                          <span class="glyphicon glyphicon-save"></span> &nbsp; Create nnew request
                          </button>


                  </form>




                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

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
