<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
session_start();

// initializing variables
$servername = "localhost";
$username_pc = "root";
$pass = "";
$dbname = "limitless_creativity";
$errors = array();

// connect to the database
$db = new mysqli($servername, $username_pc, $pass, $dbname);
//check connection 
if ($db->connect_error) {
	die("Connection Failed: " . $db->connect_error);
}

$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
$job = isset($_POST['job']) ? $_POST['job'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// REGISTER USER
if (isset($_POST['reg_user_button'])) {
	// receive all input values from the form
	$firstname = mysqli_real_escape_string($db, $firstname);
	$lastname = mysqli_real_escape_string($db, $lastname);
	$job = mysqli_real_escape_string($db, $job);
	$email = mysqli_real_escape_string($db, $email);
	$username = mysqli_real_escape_string($db, $username);
	$password = mysqli_real_escape_string($db, $password);
	// form validation: ensure that the form is correctly filled ...
	// by adding (array_push()) corresponding error unto $errors array
	if (empty($firstname)) {
		array_push($errors, "First name is required");
	}
	if (empty($job)) {
		array_push($errors, "Jop is required");
	}
	if (empty($username)) {
		array_push($errors, "username is required");
	}
	if (empty($email)) {
		array_push($errors, "Email is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// first check the database to make sure 
	// a user does not already exist with the same username and/or email
	$user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
	$result = mysqli_query($db, $user_check_query);
	$user = mysqli_fetch_assoc($result);

	if ($user) { // if user exists
		if ($user['username'] === $username) {
			array_push($errors, "Username already exists");
		}

		if ($user['email'] === $email) {
			array_push($errors, "email already exists");
		}
	}

	// Finally, register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password); //encrypt the password before saving in the database

		$query = "INSERT INTO users (firstname,lastname,job,email,username,password, image_index) VALUES ('$firstname', '$lastname', '$job','$email', '$username', '$password'," . rand(0,3) . ")";
		mysqli_query($db, $query);
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
		header('location: Login_Page.php');/* Redirect browser */
	}
}
// LOGIN USER
if (isset($_POST['login_user_button'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	if (count($errors) == 0) {
		$password = md5($password);
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) == 1) {
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			echo $_SESSION['success'];
			header('location: Home_Page.php');/* Redirect browser */
		} else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}
// Initialize message variable
$msg = "";
// If upload button is clicked ...
if (isset($_POST['upload'])) {
	// Get image name
	$image = $_FILES['image']['name'];
	// Get text
	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
	//To write -all path
	// define ('SITE_ROOT', realpath(dirname(__FILE__)));

	// image file directory
	$target = 'image_upload/' . basename($image);
	// $uploadOk = 1;
	$sql = "INSERT INTO image_upload (image, image_text, user_id) VALUES ('$image', '$image_text',". $_POST['user_id'] .")";
	// execute query
	mysqli_query($db, $sql);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
		$msg = "Image uploaded successfully";
	} else {
		$msg = "Failed to upload image";
	}
}
//..get all users
$profile_imgs = ["https://i.imgur.com/pOvEdeP.png", "https://i.imgur.com/4uXZ66M.png", "https://i.imgur.com/OCx1KwW.png", "https://i.imgur.com/HJJKDY1.png"];
$query_users = "SELECT user_id, firstname,lastname,job,email,username, image_index FROM users;";
if ($results = mysqli_query($db, $query_users)) {
	$users = '';
	while($row = mysqli_fetch_assoc($results)) {
		$href= 'Profile_Page.php?user_id='.$row["user_id"];
		$users .= '<div class="body_column">
				<div class="card">
					<img src="'. $profile_imgs[$row['image_index']] .'" alt="'. $row['firstname'] .'" style="width:100%">
					<h1>'. $row['firstname'] . " " . $row['lastname'] .'</h1>
					<p class="title">'. $row['job'].'</p>
					<p><span style="color:#5a4e64"> &#9733 &#9733 &#9733 &#9733 &#9733 </span></p>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<p><button style="cursor: pointer;" onclick="window.location=\'' . $href . '\';">View Profile</button></p>
				</div>
			</div>';
	}
}