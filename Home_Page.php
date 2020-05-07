<!DOCTYPE html>
<html>
<?php include 'connection.php' ?>
<?php
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: Login_Page.php"); }
?>
<head>
	<meta charset="utf-8" />
	<title>Limitless Creativity</title>
	<!-- Load icon library -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="mystyle.css">
	<style type="text/css">
		.Signin_Login_div button {
			font-style: normal;
			background-color: #877b91;
			border: none;
			color: black;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 17px;
			 border-radius: 10px; 
		}
		.Signin_Login_div button:hover {
			box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.5), 0 17px 50px 0 rgba(0, 0, 0, 0.10);
		}
		/* Float four columns side by side */
		.body_column {
			float: left;
			padding-top: 50px;
			padding-bottom: 50px;
			width: 32%;
		}
		/* Remove extra left and right margins, due to padding in columns */
		.body_row {
			margin: 0 -10px;
		}
		/* Clear floats after the columns */
		.body_row:after {
			content: "";
			display: table;
			clear: both;
		}
		/* On mouse-over, add a deeper shadow */
		.card:hover {
			box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
		}
		/* Add some padding inside the card container */
		.container {
			text-align: center;
			padding: 10px 20px;
		}
		/* Style the counter cards */
		.card {
			max-width: 300px;
			text-align: center;
			margin:100px;
			width: 80%;
			background-color: white;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			margin-bottom: 25px;
		}
		.card .title {
			color: grey;
			font-size: 18px;
		}
		.card button {
			border: none;
			outline: 0;
			display: inline-block;
			padding: 8px;
			color: white;
			background-color: #877b91;
			text-align: center;
			cursor: pointer;
			width: 100%;
			font-size: 18px;
		}		
		.Signin_Login_div a , .card a{
			text-decoration: none;
			font-size: 22px;
			color: black;
		}
		.card button:hover,a:hover {
			opacity: 0.7;
		}
	</style>
</head>
<body>
	<?php include 'header.php'; ?>
	<header style="padding-bottom:15%;">
		<?php if (isset($_SESSION['username'])) : ?>
			<div class="Signin_Login_div" style="text-align: center; margin-top: 10%;">
				<h1 style="font-size: 50px;">
					<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>To our website<br>Where you belong
				</h1>
				<button type="submit"><a href="Home_Page.php?logout='1'"> logout</a></button>
			</div>
		<?php else : ?>
				<div class="Signin_Login_div" style="text-align: center; margin-top: 10%;">
					<h1 style="font-size: 50px;">Welcome to our website<br>where creative people belong</h1>
					<p style="font-size:20px; ">Are you designer , artist or you have creativity sense?<br>Then sign in to be part with our family.</p>
					<button type="submit"> <a href="Register_Page.php">SIGN UP</a></button>
					<button type="submit"> <a href="Login_Page.php">LOGIN</a></button>
				</div>
		<?php endif ?>
	</header>

		<div style="text-align:center; font-size:28px">
			<hr style="display:inline-block; position:relative; top:4px; width:40%" />
			&nbsp;NEW USERS&nbsp;
			<hr style="display:inline-block; position:relative; top:4px; width:40%" />
		</div>
		<div class="body_row">
		<?php echo $users; ?>
		</div>
	<?php include 'footer.php'; ?>
</body>
</html>