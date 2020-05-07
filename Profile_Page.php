<?php
include('connection.php');
if(!isset($_GET['user_id']) || $_GET['user_id'] == null ) {
  header('location: Home_Page.php');/* Redirect browser */ }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Web Project</title>
  <!-- Load icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="mystyle.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style type="text/css">
    /* Style the counter cards */
    .card_profile {
      max-width: 300px;
      margin: auto;
      text-align: center;
      width: 80%;
      margin-bottom: 25px;
    }
    .card_profile .title {
      color: grey;
      font-size: 18px;
    }
    .card_profile a {
      text-decoration: none;
      font-size: 22px;
      color: black;
    }
    /* Float four columns side by side */
    .body_column {
      float: left;
      padding-left: 20px;
      padding-top: 50px;
      padding-bottom: 50px;
      width: 25%;
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
    .circle {
      height: 55px;
      width: 50px;
      margin-right: 50%;
      background-color: #877b91;
      border-radius: 50%;
      display: inline-grid;
    }
    .circle a {
      padding: 0;
      max-width: 300px;
      margin: auto;
      text-align: center;
    } 
    .body_column2 {
      float: left;
      padding-top: 50px;
      padding-bottom: 50px;
      width: 32%;
    }
    .body_row2 {
      margin: 0 -10px;
      padding-left: 90px;

    }
    #img_div {
       box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
       width: 80%;
    }
    .container {
      padding: 5px 20px;
    }
    #content{
      padding: 15px 80px;
    }
    form {
      width: 50%;
      margin: 20px auto;
    }
    .btn {
      cursor: pointer;
      padding: 12px;
      font-size: 16px;
      color: black;
      background: #877b91;
      border: none;
      border-radius: 10px;
    }
    /* Full-width input fields */
    textarea {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      border: none;
      background: #f1f1f1;
    }
    /* When the inputs get focus, do something */
    textarea:focus {
      background-color: #ddd;
      outline: none;
    }
  </style>
</head>

<body>
  <?php include('header.php'); ?>
  <?php
  $results = mysqli_query($db, "SELECT * FROM users where user_id='" . $_GET['user_id'] . "'");
  $username = null;
  while ($row = mysqli_fetch_array($results)) {
    $username = $row['username']; ?>

    <div class="card_profile">
      <img src="<?php echo $profile_imgs[$row['image_index']]; ?>" alt="Mona" class="w3-left w3-circle" style="width:100%; height:50%; ">
      <h2><?php echo $row['firstname'] . " " . $row['lastname']; ?></h2>
      <h6><?php echo "@" . $row['username']; ?></h6>

      <p class="title"><?php echo "JOB: " . $row['job']; ?></p>
      <p><span style="color:#5a4e64"> &#9733 &#9733 &#9733 &#9733 &#9733 </span></p>
      <div class="body_row">
        <div class="body_column">
          <span class="circle"><a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a></span>
        </div>
        <div class="body_column">
          <span class="circle"><a href="https://twitter.com/explore"><i class="fa fa-twitter"></i></a></span>
        </div>
        <div class="body_column">
          <span class="circle"><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></span>
        </div>
        <div class="body_column">
          <span class="circle"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></span>
        </div>
      </div>
      <hr />
    </div>
  <?php } 
  ?>

  <div id="content">
    <?php
    $result = mysqli_query($db, "SELECT * FROM image_upload WHERE user_id=" . $_GET["user_id"]);

    while ($row = mysqli_fetch_array($result)) {
      echo "<div class='body_row2'>";
       echo "<div class='body_column2'>";
      echo "<div id='img_div'>";
      echo "<img src='image_upload/" . $row['image'] . "'  style='width:100%;'>";
      echo "<div class='container'>";
      echo "<p>" . $row['image_text'] . "</p>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
    }
    ?>
  </div>

  <?php if (isset($_SESSION['username']) && $_SESSION['username'] == $username) : ?>

    <form method="POST" action=<?php echo "Profile_Page.php?user_id=" .$_GET['user_id']; ?> enctype="multipart/form-data">
        <input type='hidden' name='user_id' value=<?php echo $_GET['user_id']; ?> />     
        <div id="content">
        <lable>Select image to upload:
        <input type="file" class="btn" name="image">
        </lable>
        <textarea id="text" cols="5" rows="4" name="image_text" placeholder="Say something about this image..."></textarea>
        <button type="submit" name="upload" class="btn">POST</button>
        </div>
    </form>
  <?php endif ?>
<?php include('footer.php'); ?>
</body>
</html>