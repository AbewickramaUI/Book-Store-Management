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
<title>About Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="Public/css/aboutus.css">
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
	
	<h3>About Us</h3>
	<br>
	<h5><b>WELCOME TO RAINBOW BOOKS OFFICIAL WEBSITE, </b></h5><br>
		<p>your number one online book store for all the genres of books. Romance, Science fiction, Crime and horror, History, Poetry, Mystery, Religion.
		<br>We're dedicated to giving you the very best quality books, with a focus on knowledge, customer service and uniqueness.
<br>Founded in 2012 by U.I Abewickrama, RAINBOW BOOKS has come a long way from its beginning. When U.I Abewickrama first started out, his passion for the book industry drove him to do more intense research, quit his day job and gave him the impetus to turn hard work and inspiration into to a booming online store.<br> We now serve customers all over the world and are thrilled to be a part of the  fair-trade wing of the books industry.<br><br>
We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.
Sincerely,</p><br>
<h4>U.I Abewickrama, [ CEO, Founder.]</h4>

	<br>
	<br>
<p>
	As distributors it was our fantasy to open a bookshop that comprehended workmanship and showed books enough to commit a whole space to the class, to make an environment as excellent, tricking, and smooth as the books it would house, and to start development with regards to the energizing a wide margin the nation was making in the plan. After eight years we believe we have succeeded.<br>
In these attempting times when books are vying for your consideration, cash and time, and when bookshops are surrendering to the extreme weight set on them, ‘RAINBOW BOOKS’ has figured out how to develop to 8 looks around the nation, because of you, dear readers.<br>
We have manufactured vital associations to remove books from customary spaces, tied up with a notorious way of life stores, for example, Good Earth and Amethyst, and even extended the extension where important. <br>
In any case, at the center of ‘RAINBOW BOOKS’ is a profound love for books, particularly craftsmanship and outlined books that are storehouses of legacy, style, structure, workmanship, cooking, way of life, photography thus substantially more.<br> 
Furthermore, that is the reason we have ventured to the far corners of the planet, tapped our assets to convey to you the best distributors around the world. <br>
As we came and saw your eagerness for the books we were loading, we were urged to extend our vision, including eccentric extras, stationery, and even furnishings.<br>
Today ‘Rainbow books’ is synonymous with a specific tasteful and has solidly settled itself as the home of workmanship and showed books in the nation. 
We presently add a virtual area to the bookstore – an online bookshop where you can purchase books. Much thanks to you for being a piece of this adventure.

	
	</p>
	
	
<br>
	<br>
<h6>Dear readers,</h6><br>
<br>
<p>
We offer a tremendous gathering of books in the various classifications of Fiction, Non-fiction, Biographies,Romance, History, Religions, Self – Help, Children. We likewise move in immense accumulation of Investments and Management, Computers, Engineering, Medical, College and School content references books proposed by various foundations as schedule the nation over. Other than this, we likewise offer an expansive gathering of E-Books at reasonable valuing.<br>

We endeavor to broaden consumer loyalty by providing food simple easy using web indexes, brisk and easy-to-understand installment alternatives, and snappier conveyance frameworks. Upside to the majority of this, we are arranged to give energizing offers and charming limits on our books.<br>

Too, we modestly welcome every one of the merchants around the nation to band together with us. We will without a doubt give you the stage to many shimmering areas and develop the RAINBOW BOOKS family. We might want to thank you for shopping with us. You can keep in touch with us for any new musings at rainbowbooks@gmail.com helping us to ad-lib for the peruser fulfillment. 
		
	</p>
	
	
	
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
	
	
</body>
	
</html>