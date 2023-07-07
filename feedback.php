<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>About Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="Public/css/adlogin.css">
	<link rel="stylesheet" href="Public/css/nav.css">
<body onload="showSlides()">
	<nav class="navbar">
		<div class="nav">
			<img src="Public/img/home logo.png" alt="" width="269" height="202" class="brand-logo">
			<div class="nav-items">
				<div class="search">
					<input type="text" class="search-box" placeholder="search title, Author">
					<button class="search-btn">search</button>
			  </div>
				<a href="profile.php"><img src="Public/img/user.png" alt=""></a>
				<a href="cart.php"><img src="Public/img/cart.png" alt=""></a>
		  </div>
	  </div>
	  <ul>
		  <a href="index.html"><li>Home</li></a>
		  <a href="category.php"><li>Book Category</li></a>
		  		    <div class="dropdown">
    <button class="dropbtn">Details
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="romance.php">Romance</a>
      <a href="crime.php">Crime and Thriller</a>
      <a href="fantasy.php">Fantasy</a>
	  <a href="science.php">Science Fiction</a>
	  <a href="poetry.php">Poetry</a>
	  <a href="history.php">Historical</a>
	  <a href="religion.php">Religion</a>
	  <a href="fairytales.php">Fairy Tales</a>
	  <a href="mystery.php">Mystery</a>
	  <a href="biography.php">Biography</a>
	  <a href="art.php">Art</a>
	  <a href="education.php">Education</a>
    </div>
  </div>
		  <a href="checkout.php"><li>Checkout</li></a>
		  <a href="aboutus.php"><li>About Us</li></a>
	  </ul>
	</nav>
	
	    <form>
        <div class="login-box">
            <h1>Customer Feedback Section</h1>
 
            <div class="textbox">
                <i class="fa fa-circle" aria-hidden="true"></i>
                <input type="email" placeholder="email"
                         name="email" value="">
            </div>
 
            <div class="textbox">
                <p><i class="fa fa-circle" aria-hidden="true"></i>
                  <input type="text" placeholder="name"
                         name="name" value="">
                </p>

            </div>
			            <div class="textbox">
                <i class="fa fa-circle" aria-hidden="true"></i>
                <input type="text" placeholder="subject"
                         name="subject" value="">
            </div>
			            <div class="textbox">
                <i class="fa fa-circle" aria-hidden="true"></i>
                <input type="text" placeholder="Add any comments"
                         name="comments" value="">
            </div>
 
            <input class="button" type="submit"
                     name="submit" value="Submit feedback">
        </div>
</form>
	
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
	
<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify"> Our purpose is to sustainably make the pleasure and the benifits of books accessible to the many..</p>
          </div>
          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="aboutus.php">About Us</a></li>
              <li><a href="index.html">Details</a></li>
              <li><a href="privacy.php">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by 
         <a href="index.html">Rainbow Books</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
	
	
	<?php
				if(isset($_POST["login"]))
				{
				$username = $_POST["adminID"];
				$password = $_POST["password"];
				$valid = false;
				$_SESSION['success'] = "";
					
					
				$con = mysqli_connect("localhost","root","","rainbowbooks");
					
				if(!$con)
				{
					die("Cannot connect our DB Server");
				}
						$sql = "SELECT * FROM `admin` WHERE `adminID` = '".$username."' and `Password` = '".$password."'"; 
					
						$result = mysqli_query($con,$sql);
					
				if (mysqli_num_rows($result) > 0)
				{
					$valid = true;
				}
				else
				{
					$valid = false;
				}
					

				}
				
				?>
			  
	
	
</body>
	
</html>