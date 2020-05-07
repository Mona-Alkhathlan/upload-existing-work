<?php include ('connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Web Project</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<style type="text/css">
	#log input {
	  width: 25%;
	  padding: 10px;
	  display: inline-block;
	  border: none;
	  background: #cbc8db;
	  display: inline;
	}
	#log {
	text-align:center;
	}
</style>
</head>
<body>
<?php include 'header.php'; ?>
<div style="text-align:center;">
<h1> Login </h1>
<p> <b> Please fill in this form to login </b> </p>
</div>
<hr/>

<form method="post" action="Login_Page.php">
   <div id="log">
	<label>Username :</label><br> 
	<input type="text" name = "username" placeholder="Enter username" value="<?php echo $username; ?>"><br>
	<label>Password :</label><br> 
	<input type="password" name ="password" placeholder="Enter Password"><br>
	<br><div style="text-align:center;"> 
		<button type="submit" class="btn" name="login_user_button"  style="background-color:#877b91;">Login</button>
		<?php include('errors.php'); ?>
	</div><br>
	<p style="color:#7a7c88; text-align:center;"> You don't have account ? <a href="Register_Page.php"> Sign up </a></p>
</div>
</form>
<?php include 'footer.php'; ?>
</body>
</html>