<?php

	error_reporting( ~E_NOTICE );

	require_once 'dbconfig.php';

	if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
	{
		$id = $_GET['edit_id'];
		$stmt_edit = $DB_con->prepare('SELECT * FROM items WHERE id =:uid');
		$stmt_edit->execute(array(':uid'=>$id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	}
	else
	{
		header("Location: ../pages/tables/items.php");
	}



	if(isset($_POST['btn_save_updates']))
	{
		

	

$name = $_POST['name'];
$unite = $_POST['unite'];
$baddress = $_POST['baddress'];
$price = $_POST['price'];
$description = $_POST['description'];





			$stmt = $DB_con->prepare('UPDATE items
									     SET name=:name,
										     unite=:unite,
										     baddress=:baddress,
										     price=:price,
										     description=:description

								       WHERE id=:uid');
			$stmt->bindParam(':name',$name);
			$stmt->bindParam(':unite',$unite);
			$stmt->bindParam(':baddress',$baddress);
			$stmt->bindParam(':price',$price);
			$stmt->bindParam(':description',$description);
			$stmt->bindParam(':uid',$id);

			if($stmt->execute()){
				?>
                <script>
				alert('Successfully Updated ...');
				window.location.href='../pages/tables/items.php';
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
    	<h1 class="h2">update items. <a class="btn btn-default" href="../pages/tables/items.php"> all items </a></h1>
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
    	<td><label class="control-label">item name.</label></td>
        <td><input class="form-control" type="text" name="name" value="<?php echo $edit_row['name']; ?>" required /></td>
    </tr>

    <tr>
    	<td><label class="control-label">unite.</label></td>
        <td><input class="form-control" type="text" name="unite" value="<?php echo $edit_row['unite']; ?>" required /></td>
    </tr>


    <tr>
    	<td><label class="control-label">address.</label></td>
        <td><input class="form-control" type="text" name="baddress" value="<?php echo $edit_row['baddress']; ?>" required /></td>
    </tr>

     <tr>
    	<td><label class="control-label">price.</label></td>
        <td><input class="form-control" type="text" name="price" value="<?php echo $edit_row['price']; ?>" required /></td>
    </tr>

     <tr>
    	<td><label class="control-label">description.</label></td>
        <td><input class="form-control" type="text" name="description" value="<?php echo $edit_row['description']; ?>" required /></td>
    </tr>

    
    



    <tr>
        <td colspan="2"><button type="submit" name="btn_save_updates" class="btn btn-success">
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
