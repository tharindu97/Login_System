<!DOCTYPE html>
<html>
<head>
	<title>Create New Account</title>
	<link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="css/singup.css">
</head>
<body>
<div class="signup-form">
	<form action="" method="post">
		<div class="form-header">
			<h2>Sign Up</h2>
			<p>Fill out this form and start chating with your friends.</p>
		</div>
		<div class="form-group">
			<label>Username</label>
			<input type="text" class="form-control" name="user_name" placeholder="Yourname" autocomplete="off" required>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="user_password" class="form-control" name="user_pass" placeholder="password" autocomplete="off" required>
		</div>
		<div class="form-group">
			<label>Email Address</label>
			<input type="email" class="form-control" name="user_email" placeholder="someone@site.com" autocomplete="off" required>
		</div>
		<div class="form-group">
			<label>Country</label>
			<select class="form-control" name="user_country" required="">
				<option disabled="">Select a Country</option>
				<option>Sri Lanka</option>
				<option>India</option>
				<option>UK</option>
				<option>USA</option>
				<option>US</option>
			</select>
		</div>
		<div class="form-group">
			<label>Gender</label>
			<select class="form-control" name="user_gender" required="">
				<option disabled="">Select your gender</option>
				<option>Male</option>
				<option>Female</option>
			</select>
		</div>
		<div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required>I accept the <a href="#">Terms Of Use</a>&amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign Up</button>
		</div>
		<?php include("signup_user.php"); ?>
	</form>
	<div class="text-center small" style="color: #674288;">Already have an account? <a href="singin.php">signin here</a></div>
</div>
</body>
</html>