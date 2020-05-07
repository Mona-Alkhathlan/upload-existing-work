<style>
  header {
    background-color: #C7C4D7;
    top: 0;
    width: 100%;
    padding: 15px 10px;
  }
  #logo{
      float: left;
      padding: 5px;
      width: 150px;
      position: relative;
      overflow: hidden;
  } 
  /* Style the search box inside the navigation bar */
  .top{
    position: relative;
      overflow: hidden;
    margin-top: 10px;
  }
  .top div a {
    float: left;
    color: black;
    text-align: center;
    padding: 14px 16px; 
    text-decoration: none;
  }
  /* Change the link color to #111 (black) on hover */
  .top div a:hover {
    background-color: #877b91;
  }

  .top a.active {
    text-decoration: underline;
    text-decoration-color: #877b91;

  }

  /* Centered section inside the top navigation */
  .topnav-centered1 a {
    float: none;
    position: absolute;
    top: 30%;
    left: 30%;
    transform: translate(-30%, -30%);
  }

  .topnav-centered2 a {
    float: none;
    position: absolute;
    top: 40%;
    left: 40%;
    transform: translate(-40%, -40%);
  }

  .topnav-centered3 a {
    float: none;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  form.form_search {
      float: right;
  }

  /* Style the search field */
  form.form_search input[type=text] {
     background: #C7C4D7;
     padding: 7px;
     font-size: 17px;
       float: left;
       width: 80%;
       border: 1px solid;
      border-color: #877b91;
  }
  /* Style the submit button */
  form.form_search button {
      float: left;
      width: 10%;
      padding: 9px;
      color: black;
      font-size: 17px;
      border: none;
      cursor: pointer;
      background-color: #877b91;
  }
  form.form_search button:hover {
     background: grey;
  }
</style>
<header>
  <img id="logo" src="https://i.imgur.com/YKGbMPK.png" alt="Limitless Creativity"></img>
  <div class="top">
    <div class="topnav-centered1"><a href="Home_Page.php">Home</a></div>
      <div class="topnav-centered2"><a href="About_Page.php">About</a></div>
    <div class="topnav-centered3"><a href="ContactUs_Page.php">Contact us</a></div>
    <form class="form_search">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>
</header>
<hr/>