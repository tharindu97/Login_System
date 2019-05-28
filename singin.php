<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="css/singin.css">
</head>
<body>
<div class="signin-form">
	<form action="" method="post">
		<div class="form-header">
			<h2>Sign In</h2>
			<p>Login to MyChat</p>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" class="form-control" name="email" placeholder="someone@site.com" autocomplete="off" required>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" class="form-control" name="pass" placeholder="password" autocomplete="off" required>
		</div>
		<div class="small">Forgot password? <a href="forgot_pass.php">Click Here</a></div><br>
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">Sign in</button>
		</div>
		<?php include("singin_user.php"); ?>
	</form>
	<div class="text-center small" style="color: #674288;">Don't have an account? <a href="singup.php">Create one</a></div>
</div>
</body>
</html>