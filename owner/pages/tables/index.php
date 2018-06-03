<?php

	require_once 'dbconfig.php';

	if(isset($_GET['delete_id']))
	{
		// select image from db to delete
		$stmt_select = $DB_con->prepare('SELECT Pic FROM wordimages WHERE ID =:uid');
		$stmt_select->execute(array(':uid'=>$_GET['delete_id']));
		$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
		unlink("user_images/".$imgRow['Pic']);

		// it will delete an actual record from db
		$stmt_delete = $DB_con->prepare('DELETE FROM wordimages WHERE ID =:uid');
		$stmt_delete->bindParam(':uid',$_GET['delete_id']);
		$stmt_delete->execute();

		header("Location: index.php");
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
</head>

<body>


<div class="container">

	<div class="page-header">
    	<h1 class="h2">all words. /
				<a class="btn btn-success" href="addnew.php"> <span class="glyphicon glyphicon-plus"></span> 	&nbsp; add new word with images </a>
			<a class="btn btn-info" href="addnewnoimage.php"> <span class="glyphicon glyphicon-plus"></span> 	&nbsp; add new word without image</a></h1>
    </div>

<br />
<div class="container">

	<div class="row">
	<?php

		$stmt = $DB_con->prepare('SELECT ID, Name, Transalation, Pic, levels FROM wordimages ORDER BY ID DESC');
		$stmt->execute();

		if($stmt->rowCount() > 0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				extract($row);
				if($row['Pic'] == ""){


				?>
				<div class="col-xs-3">
					<p class="page-header"><?php echo $Name."&nbsp;==>>&nbsp;".$Transalation; ?></p>
					<img src="../images/noimage.png" class="img-rounded" width="250px" height="250px" />
					<p class="page-header">
					<span>
					<a class="btn btn-info" href="editform.php?edit_id=<?php echo $row['ID']; ?>" title="click for edit" onclick="return confirm('sure to edit ?')"><span class="glyphicon glyphicon-edit"></span> Edit</a>
					<a class="btn btn-danger" href="?delete_id=<?php echo $row['ID']; ?>" title="click for delete" onclick="return confirm('sure to delete ?')"><span class="glyphicon glyphicon-remove-circle"></span> Delete</a>
					</span>
					</p>
				</div>
				<?php
					}
					else{
						?>
						<div class="col-xs-3">
							<p class="page-header"><?php echo $Name."&nbsp;==>>&nbsp;".$Transalation; ?></p>
							<img src="user_images/<?php echo $row['Pic']; ?>" class="img-rounded" width="250px" height="250px" />
							<p class="page-header">
							<span>
							<a class="btn btn-info" href="editform.php?edit_id=<?php echo $row['ID']; ?>" title="click for edit" onclick="return confirm('sure to edit ?')"><span class="glyphicon glyphicon-edit"></span> Edit</a>
							<a class="btn btn-danger" href="?delete_id=<?php echo $row['ID']; ?>" title="click for delete" onclick="return confirm('sure to delete ?')"><span class="glyphicon glyphicon-remove-circle"></span> Delete</a>
							</span>
							</p>
						</div>
						<?php
					}
			}
		}
		else
		{
			?>
	        <div class="col-xs-12">
	        	<div class="alert alert-warning">
	            	<span class="glyphicon glyphicon-info-sign"></span> &nbsp; No Data Found ...
	            </div>
	        </div>
	        <?php
		}

	?>
	</div>


</div>



</div>


<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>
