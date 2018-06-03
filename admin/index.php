<?php
session_start();

if(isset($_SESSION['usr_id'])!="") {
	header("Location: ../cwms/");
}

include_once 'dbconnect.php';

//check if form is submitted
if (isset($_POST['login'])) {

	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$result = mysqli_query($con, "SELECT * FROM users WHERE email = '" . $email. "' and password = '" . md5($password) . "'");

	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['usr_id'] = $row['id'];
		$_SESSION['usr_name'] = $row['name'];
	//	$_SESSION['level'] = $row['levels'];
		header("Location: ../cwms/");
	} else {
		$errormsg = "Incorrect Email or Password!!!";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin </title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body style="background-image: url('./bglogin.jpg');background-repeat: no-repeat;background-size: cover;">



<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well"  style="background-color:white; border-radius:10px;margin-top:130px">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
				<fieldset>
					<legend>Admin login.</legend>

					<div class="form-group">
						<label for="name">Admin Email</label>
						<input type="text" name="email" placeholder="Admin Email" required class="form-control" />
					</div>

					<div class="form-group">
						<label for="name">Admin Password</label>
						<input type="password" name="password" placeholder="Admin Password" required class="form-control" />
					</div>

					<div class="form-group">
						<input type="submit" name="login" value="Login" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>

			<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">

		</div>
	</div>
</div>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
