<?php

	error_reporting( ~E_NOTICE ); // avoid notice

	require_once 'dbconfig.php';

	if(isset($_POST['btnsave']))
	{
		$username = $_POST['user_name'];// user name
		$userjob = $_POST['user_job'];// user emai
		$level = $_POST['level'];



		if(empty($username)){
			$errMSG = "Please Enter kiswahili.";
		}
		else if(empty($userjob)){
			$errMSG = "Please Enter translation word in English.";
		}

		else
		{

		}


		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('INSERT INTO wordimages(Name,Transalation,levels) VALUES(:uname, :ujob, :ulevel)');
			$stmt->bindParam(':uname',$username);
			$stmt->bindParam(':ujob',$userjob);
			$stmt->bindParam(':ulevel',$level);


			if($stmt->execute())
			{
				$successMSG = "new record succesfully inserted ...";
				// header("refresh:5;index.php"); // redirects image view page after 5 seconds.
			}
			else
			{
				$errMSG = "error while inserting....";
			}
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

</head>
<body>


<div class="container">


	<div class="page-header">
    	<h1 class="h2">add new word. <a class="btn btn-default" href="index.php"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; view all </a></h1>
    </div>


	<?php
	if(isset($errMSG)){
			?>
            <div class="alert alert-danger">
            	<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
            </div>
            <?php
	}
	else if(isset($successMSG)){
		?>
        <div class="alert alert-success">
              <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
        </div>
        <?php
	}
	?>

<form method="post" enctype="multipart/form-data" class="form-horizontal">

	<table class="table table-bordered table-responsive">

    <tr>
    	<td><label class="control-label">Swahili name.</label></td>
        <td><input class="form-control" type="text" name="user_name" placeholder="Enter Swahili word" value="<?php echo $username; ?>" /></td>
    </tr>

    <tr>
    	<td><label class="control-label">English</label></td>
        <td><input class="form-control" type="text" name="user_job" placeholder="Enter translation in English" value="<?php echo $userjob; ?>" /></td>
    </tr>


		<tr>
		<td>	<label for="sel1">Select level:</label></td>
			<td>	<select class="form-control" id="sel1" name="level">
				<option value="1">beginner</option>
				<option value="2">intermediate</option>
				<option value="3">advanced</option>

				</select></td>


</tr>

    <tr>
        <td colspan="2"><button type="submit" name="btnsave" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> &nbsp; save
        </button>
        </td>
    </tr>

    </table>

</form>




</div>






<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>
