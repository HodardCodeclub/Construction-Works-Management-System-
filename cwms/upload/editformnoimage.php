<?php

	error_reporting( ~E_NOTICE );

	require_once 'dbconfig.php';

	if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
	{
		$id = $_GET['edit_id'];
		$stmt_edit = $DB_con->prepare('SELECT * FROM branches WHERE id =:uid');
		$stmt_edit->execute(array(':uid'=>$id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	}
	else
	{
		header("Location: ../pages/tables/branches.php");
	}



	if(isset($_POST['btn_save_updates']))
	{
		$username = $_POST['user_name'];// user name
		$userjob = $_POST['user_job'];// user email

	

$bname = $_POST['bname'];
$bcode = $_POST['bcode'];
$baddress = $_POST['baddress'];
$contactname = $_POST['contactname'];
$homephone = $_POST['homephone'];
$mobilephone = $_POST['mobilephone'];
$bemail = $_POST['bemail'];
		





			$stmt = $DB_con->prepare('UPDATE branches
									     SET bname=:bname,
										     bcode=:bcode,
										     baddress=:baddress,
										     contactname=:contactname,
										     homephone=:homephone,
										     mobilephone=:mobilephone,
										     bemail=:bemail

								       WHERE id=:uid');
			$stmt->bindParam(':bname',$bname);
			$stmt->bindParam(':bcode',$bcode);
			$stmt->bindParam(':baddress',$baddress);
			$stmt->bindParam(':contactname',$contactname);
			$stmt->bindParam(':homephone',$homephone);
			$stmt->bindParam(':mobilephone',$mobilephone);
			$stmt->bindParam(':bemail',$bemail);
			$stmt->bindParam(':uid',$id);

			if($stmt->execute()){
				?>
                <script>
				alert('Successfully Updated ...');
				window.location.href='../pages/tables/branches.php';
				</script>
                <?php
			}
			else{
				$errMSG = "Sorry Data Could Not Updated !";
			}

		


	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

<!-- custom stylesheet -->
<link rel="stylesheet" href="style.css">

<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="jquery-1.11.3-jquery.min.js"></script>
</head>
<body>



<div class="container">


	<div class="page-header">
    	<h1 class="h2">update branch. <a class="btn btn-default" href="../pages/tables/branches.php"> all branches </a></h1>
    </div>

<div class="clearfix"></div>

<form method="post" enctype="multipart/form-data" class="form-horizontal">


    <?php
	if(isset($errMSG)){
		?>
        <div class="alert alert-danger">
          <span class="glyphicon glyphicon-info-sign"></span> &nbsp; <?php echo $errMSG; ?>
        </div>
        <?php
	}
	?>


	<table class="table table-bordered table-responsive">

    <tr>
    	<td><label class="control-label">Branch name.</label></td>
        <td><input class="form-control" type="text" name="bname" value="<?php echo $edit_row['bname']; ?>" required /></td>
    </tr>

    <tr>
    	<td><label class="control-label">code.</label></td>
        <td><input class="form-control" type="text" name="bcode" value="<?php echo $edit_row['bcode']; ?>" required /></td>
    </tr>


    <tr>
    	<td><label class="control-label">address.</label></td>
        <td><input class="form-control" type="text" name="baddress" value="<?php echo $edit_row['baddress']; ?>" required /></td>
    </tr>

     <tr>
    	<td><label class="control-label">contact name.</label></td>
        <td><input class="form-control" type="text" name="contactname" value="<?php echo $edit_row['contactname']; ?>" required /></td>
    </tr>

     <tr>
    	<td><label class="control-label">Phone.</label></td>
        <td><input class="form-control" type="text" name="homephone" value="<?php echo $edit_row['homephone']; ?>" required /></td>
    </tr>

     <tr>
    	<td><label class="control-label">Mobile.</label></td>
        <td><input class="form-control" type="text" name="mobilephone" value="<?php echo $edit_row['mobilephone']; ?>" required /></td>
    </tr>

     <tr>
    	<td><label class="control-label">email.</label></td>
        <td><input class="form-control" type="text" name="bemail" value="<?php echo $edit_row['bemail']; ?>" required /></td>
    </tr>

    



    <tr>
        <td colspan="2"><button type="submit" name="btn_save_updates" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> Update
        </button>

        <a class="btn btn-default" href="index.php"> <span class="glyphicon glyphicon-backward"></span> cancel </a>

        </td>
    </tr>

    </table>

</form>



</div>
</body>
</html>
