<?php include ('connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Web Project</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<style type="text/css">
	#reg input {
	  width: 25%;
	  padding: 10px;
	  display: inline-block;
	  border: none;
	  background: #cbc8db;
	  display: inline;
	}
	#reg {
	text-align:center;
	}	
</style>
</head>
<body>
<?php include 'header.php'; ?>
<div style="text-align:center;">
<h1> Register </h1>
<p> <b> Please fill in this form to create an account </b> </p>
</div> <hr/>
<form method="post" action="Register_Page.php">	
<div id="reg">
	<label>First Name :</label><br> 
	<input type="text" name = "firstname" placeholder="Enter first name" value="<?php echo $firstname; ?>"><br>
	<label>Last Name :</label><br> 
	<input type="text" name = "lastname" placeholder="Enter last name" value="<?php echo $lastname; ?>"><br>
	<label>Job :</label><br> 
	<input type="text" name = "job" placeholder="Enter Job" value="<?php echo $job; ?>"><br>
	<label>Email :</label><br> 
	<input type="email" name = "email" placeholder="Enter Email" value="<?php echo $email; ?>"><br>
	<label>Username :</label><br> 
	<input type="text" name = "username" placeholder="Enter username" value="<?php echo $username; ?>"><br>
	<label>Password :</label><br> 
	<input type="password" name ="password" placeholder="Enter Password"><br>
	<br><div style="text-align:l;"> 
		<button type="submit" class="btn" name="reg_user_button" style=" background-color:#877b91;">Register</button>
		<?php include('errors.php'); ?>
	</div><br>
	<p style="color:#7a7c88; text-align:center;">  Already have an account ? <a id="login" href="Login_Page.php"> login </a></p>
</div>
</form>
<?php include 'footer.php'; ?>
</body>
</html>