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
<title>Romance</title>
</head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="Public/css/romance.css">
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
	
	<h1>Romance Books</h1>
	
	 <div class="card">
  <img src="Img/r1.jpg" alt="Talking Heads" style="width:100%">
  <h2>Talking Heads</h2>
  <h5>Adeline Polmerston</h5>
  <p class="price">Rs:780</p>
  <p>ISBM-000001</p>
      <p><button id="myButton5">Add to Cart</button>
		 <script type="text/javascript">
    		document.getElementById("myButton5").onclick = function () {
        		alert('Do you want to add this book to the cart');
				location.href = "cart.php";
    		};
</script>	 
		 </p>
</div> 
		 <div class="card">
  <img src="Img/r2.jpg" alt="Our Last Summer" style="width:100%">
  <h2>Our Last Summer</h2>
  <h5>Carolin Sumit</h5>
  <p class="price">Rs:980</p>
  <p>ISBM-000002</p>
      <p><button id="myButton6">Add to Cart</button>
		 <script type="text/javascript">
    		document.getElementById("myButton6").onclick = function () {
        		alert('Do you want to add this book to the cart');
				location.href = "cart.php";
    		};
</script>	 
		 </p>
</div> 
		 <div class="card">
  <img src="Img/r3.jpg" alt="Love at first sight" style="width:100%">
  <h2>Love at first sights</h2>
  <h5>Cloudia Wilson</h5>
  <p class="price">Rs:700</p>
  <p>ISBM-000003</p>
      <p><button id="myButton7">Add to Cart</button>
		 <script type="text/javascript">
    		document.getElementById("myButton7").onclick = function () {
        		alert('Do you want to add this book to the cart');
				location.href = "cart.php";
    		};
</script>	 
		 </p>
</div> 
		 <div class="card">
  <img src="Img/r4.jpg" alt="The Last Summer" style="width:100%">
  <h2>The Last Summer</h2>
  <h5>Nasiyat Akmatova</h5>
  <p class="price">Rs:780</p>
  <p>ISBM-000004</p>
      <p><button id="myButton8">Add to Cart</button>
		 <script type="text/javascript">
    		document.getElementById("myButton8").onclick = function () {
        		alert('Do you want to add this book to the cart');
				location.href = "cart.php";
    		};
</script>	 
		 </p>
</div> 
		 <div class="card">
  <img src="Img/r5.jpg" alt="When We First Met" style="width:100%">
  <h2>When We First</h2>
  <h5>Olivia Janet</h5>
  <p class="price">Rs:655</p>
  <p>ISBM-000005</p>
      <p><button id="myButton9">Add to Cart</button>
		 <script type="text/javascript">
    		document.getElementById("myButton9").onclick = function () {
        		alert('Do you want to add this book to the cart');
				location.href = "cart.php";
    		};
</script>	 
		 </p>
</div> 
		 <div class="card">
  <img src="Img/r6.jpg" alt="Waiting For You" style="width:100%">
  <h2>Waiting For You</h2>
  <h5>Kate Winnie</h5>
  <p class="price">Rs:730</p>
  <p>ISBM-000006</p>
      <p><button id="myButton10">Add to Cart</button>
		 <script type="text/javascript">
    		document.getElementById("myButton10").onclick = function () {
        		alert('Do you want to add this book to the cart');
				location.href = "cart.php";
    		};
</script>	 
		 </p>
</div> 
		 <div class="card">
  <img src="Img/r7.jpg" alt="The Day We Met" style="width:100%">
  <h2>The Day We Met</h2>
  <h5> Gohan Mel</h5>
  <p class="price">Rs:900</p>
  <p>ISBM-000007</p>
      <p><button id="myButton11">Add to Cart</button>
		 <script type="text/javascript">
    		document.getElementById("myButton11").onclick = function () {
        		alert('Do you want to add this book to the cart');
				location.href = "cart.php";
    		};
</script>	 
		 </p>
</div> 
		 <div class="card">
  <img src="Img/r8.jpg" alt="The Women" style="width:100%">
  <h2>The Women</h2>
  <h5>Hannah Morales</h5>
  <p class="price">Rs:780</p>
  <p>ISBM-000008</p>
      <p><button id="myButton12">Add to Cart</button>
		 <script type="text/javascript">
    		document.getElementById("myButton12").onclick = function () {
        		alert('Do you want to add this book to the cart');
				location.href = "cart.php";
    		};
</script>	 
		 </p>
</div> 
	
	
	
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
	
	
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