<?php session_start();
if(!isset($_SESSION["username"]))
{
	header('Location:login.php');
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Categories</title>
</head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="Public/css/category.css">
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
		  <a href="aboutus.php"><li>About Us</li></a>
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
	
	
	
	<br>
	<div class="gallery">
  <a target="_blank" href="romance.php">
    <img src="Public/img/romance.jpg" alt="Romance" width="800" height="600">
  </a>
  <div class="desc">Romance Books</div>
</div>

<div class="gallery">
  <a target="_blank" href="poetry.php">
    <img src="Public/img/poetry.jpg" alt="Poetry" width="800" height="600">
  </a>
  <div class="desc">Poetry Books</div>
</div>

<div class="gallery">
  <a target="_blank" href="science.php">
    <img src="Public/img/science.jpg" alt="Science Fiction" width="800" height="600">
  </a>
  <div class="desc">Science Fiction</div>
</div>

<div class="gallery">
  <a target="_blank" href="crime.php">
    <img src="Public/img/horror.jpg" alt="Crime and Thriller" width="800" height="600">
  </a>
  <div class="desc">Crime and Thriller</div>
</div>
	
<div class="gallery">
  <a target="_blank" href="fantasy.php">
    <img src="Public/img/fantasy.jpg" alt="Fantasy" width="800" height="600">
  </a>
  <div class="desc">Fantasy</div>
</div>
	
	<div class="gallery">
  <a target="_blank" href="fairytales.php">
    <img src="Public/img/fairytale.jpg" alt="Fairy Tales" width="800" height="600">
  </a>
  <div class="desc">Fairy Tales</div>
</div>

<div class="gallery">
  <a target="_blank" href="history.php">
    <img src="Public/img/history.jpg" alt="Historical" width="800" height="600">
  </a>
  <div class="desc">Historical Books</div>
</div>

<div class="gallery">
  <a target="_blank" href="biography.php">
    <img src="Public/img/biography.jpg" alt="Biography" width="800" height="600">
  </a>
  <div class="desc">Biography</div>
</div>

<div class="gallery">
  <a target="_blank" href="mystery.php">
    <img src="Public/img/mystery.jpg" alt="Mystery" width="800" height="600">
  </a>
  <div class="desc">Mystery</div>
</div>
	
<div class="gallery">
  <a target="_blank" href="religion.php">
    <img src="Public/img/religion.jpg" alt="Religion" width="800" height="600">
  </a>
  <div class="desc">Religion Books</div>
</div>
	
	<div class="gallery">
  <a target="_blank" href="education.php">
    <img src="Public/img/education.jpg" alt="Education" width="800" height="600">
  </a>
  <div class="desc">Educational</div>
</div>

<div class="gallery">
  <a target="_blank" href="art.php">
    <img src="Public/img/art.jpg" alt="Art" width="800" height="600">
  </a>
  <div class="desc">Art Books</div>
</div>
	
	
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	

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
              <li><a href="#">Details</a></li>
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
	
	
	
	
</body>
</html>