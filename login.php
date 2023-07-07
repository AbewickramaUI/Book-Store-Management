<?php session_start() ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login page</title>
<link rel="stylesheet" type="text/css" href="Public/css/login.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	
	

</head>

<body>
<form name="login" method="post" action="login.php">
<h1><img align="left" src="Public/img/home logo.png" width="403" height="313" alt=""/>RAINBOW<br>
  	BOOKS	</h1>
<h1>
	  <h3> A little time, Big difference..    </h3>
	</h1>
	<nav>
	  <ul>
		  <a href="index.html"><li>Home</li></a>
		  <a href="category.php"><li>Book Category</li></a>
		  <a href="#"><li>Details</li></a>
		  <a href="checkout.php"><li>Checkout</li></a>
		  <a href="aboutus.php"><li>About Us</li></a>
	  </ul>
</nav>
<table width="835" height="377" border="0" align="center">
  <tr>
    <td height="299" colspan="2"><table width="324" height="268" border="0" align="center">
      <tr>
        <td width="294"><p class="imgcontainer"><img src="Public/img/login.png" alt="Avatar" width="99%" height="234" class="avatar" /></p>
          <div class="container">
            <p>
        <label for="uname"><b>Username</b></label>
		<i class="fa fa-user" aria-hidden="true"></i>
        <input type="text"  placeholder="Enter Username" name="txtuname" required>
        
        <label for="psw"><b>Password</b></label>
		<i class="fa fa-lock" aria-hidden="true"></i>
        <input type="password" placeholder="Enter Password" name="txtpassword" required>
            </p>
           
			  <?php
				if(isset($_POST["btnsubmit"]))
				{
				$username = $_POST["txtuname"];
				$password = $_POST["txtpassword"];
				$valid = false;
				$_SESSION['success'] = "";
					
					
				$con = mysqli_connect("localhost","root","","rainbowbooks");
					
				if(!$con)
				{
					die("Cannot connect our DB Server");
				}
						$sql = "SELECT * FROM `user` WHERE `Email` = '".$username."' and `Password` = '".$password."'"; 
					
						$result = mysqli_query($con,$sql);
					
				if (mysqli_num_rows($result) > 0)
				{
					$valid = true;
				}
				else
				{
					$valid = false;
				}
					
				if($valid)
				{
					$_SESSION["username"] = $username;
					$_SESSION['success'] = "You have successfully logged into the RAINBOW BOOKS website";
					header('Location:category.php');
				}
				else
				{
					echo "Please enter correct username and password";
				}
				}
				
				?>
			  
			  
			  
			  
			  
      <button type="submit" name="btnsubmit" >Login</button>
      <label>
        <input type="checkbox" checked="checked" name="chkremember"> Remember me
      </label>
</div>

    <div class="container" style="background-color:#FFFDD5">
		
	 
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
	


      <span class="psw">Forgot <a href="register.php">password?</a></span>
    </div>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
</form>
	
	
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
         <a href="#">Rainbow Books</a>.
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