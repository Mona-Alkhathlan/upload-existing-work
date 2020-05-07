<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8" />
<title>Limitless Creativity</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<style type="text/css">
	/* Button used to open the contact form - fixed at the center of the page */
	.GET_IN_TOUCH_button {
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
	.GET_IN_TOUCH_button:hover {
		box-shadow: 0 12px 16px 0 rgba(0,0,0,0.5), 0 17px 50px 0 rgba(0,0,0,0.10);
	}
	/* The popup form - hidden by default */
	.form_popup {
	  position: fixed;
	  display: none;
	  position: fixed;
	  top: 10%;
	  margin-left: 25%;
	  border: 3px solid #f1f1f1;
	}
	/* Add styles to the form container */
	.form_container {
	  width: 100%;
	  height: 500px;
	  overflow: scroll;
	  max-width: 600px;
	  padding: 10px;
	  background-color: white;
	}
	/* Full-width input fields */
	.form_container input[type=text], textarea{
	  width: 100%;
	  padding: 15px;
	  margin: 5px 0 22px 0;
	  border: none;
	  background: #f1f1f1;
	}
	/* When the inputs get focus, do something */
	.form_container input[type=text]:focus,.form_container textarea:focus {
	  background-color: #ddd;
	  outline: none;
	}
	/* Set a style for the submit/login button */
	.form_container .btn {
	  background-color: #ccc;
	  color: black;
	  padding: 16px 20px;
	  border: none;
	  cursor: pointer;
	  width: 100%;
	  margin-bottom:10px;
	  opacity: 0.8;
	}
	/* Add a red background color to the cancel button */
	.form_container .cancel {
	  background-color: white;
	}
	/* Add some hover effects to buttons */
	.form_container .btn:hover, .GET_IN_TOUCH_button:hover {
	  opacity: 1;
	}
</style>
</head>
<body>
<?php include 'header.php'; ?>

	<div style="text-align: center; margin-top: 10%; margin-bottom: 5%;">
		<h1 style="font-size: 50px;">Contact Us</h1>
		<p style="font-size:20px; ">If you have any question please complete the form by<br>clicking next button</p>
		<button type="submit" class="GET_IN_TOUCH_button" onclick="openForm()">GET IN TOUCH</button>
	</div>
	
	<div class="form_popup" id="myForm">
	  <form action="/action_page.php" class="form_container" method="post">
	    <h1>Contact Us</h1>

        <label for="fname"><b>First Name*</b></label>
        <input type="text" id="fname" name="firstname" placeholder="Enter First Name" required>

        <label for="lname"><b>Last Name*</b></label>
        <input type="text" id="lname" name="lastname" placeholder="Enter Last Name" required>

	    <label for="email"><b>Email*</b></label>
	    <input type="text" placeholder="Enter Email" name="email" required>

	    <label for="subject"><b>Subject</b></label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px;"></textarea>

	    <button type="submit" class="btn"><b>Submit</b></button>
	    <button type="button" class="btn cancel" onclick="closeForm()"><b>Close</b></button>
	  </form>
	</div>
<script>
	function openForm() {
	  document.getElementById("myForm").style.display = "block";
	}

	function closeForm() {
	  document.getElementById("myForm").style.display = "none";
	}
</script>
<?php include 'footer.php'; ?>
</body>
</html>