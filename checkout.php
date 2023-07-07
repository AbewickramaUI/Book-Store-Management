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
<title>Checkout Form</title>
	<link rel="stylesheet" type="text/css" href="Public/css/checkout.css"/>
	
<script type="text/javascript">
function checkEmail() {

    var email = document.getElementById('txtEmail');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
    }
	return true;
}	
	
function valISBM(){
	var isbm=document.getElementById('txtISBM').value;
	var num=isbm.split("-");
	var first=num[0];
	var second=num[1];
	
	
	if(((first.charAt(0)=="I") || (first.charAt(0)=="i")) && ((first.charAt(0)=="S") || (first.charAt(0)=="s")) && ((first.charAt(0)=="B") || (first.charAt(0)=="b")) && ((first.charAt(0)=="M") || (first.charAt(0)=="m"))){
		return true;
	}
	alert('Please provide a valid ISBM number');
	return false;
	if(second.length==6){
		return true;
	}
	alert('Please provide a valid ISBM number');
	return false;
}
function validateAll()
{
		if(checkEmail() && valISBM())
			{
				alert("Your order has been placed successfully");
			}
		else
			{
				event.preventDefault();
			}
}	
	
	
	
	
</script>	
	
	
	
	
	
</head>

<body>
	<h1><img align="left" src="Public/img/home logo.png" width="372" height="261" alt=""/>RAINBOW<br>
  	BOOKS
		<h3> A little time, Big difference..</h3>
	</h1>
<nav>
	  <ul>
	    <a href="index.html"><li>Home</li></a>
		  <a href="category.php"><li>Book Category</li></a>
		  <a href="index.html"><li>Details</li></a>
	    <a href="checkout.php"><li>Checkout</li></a>
	    <a href="aboutus.php"><li>About Us</li></a>
	  </ul>
</nav>
<h2>Customer Checkout Form</h2>
<br><br>
	    <p1>We are so excited for all the great books you are going to purchase!</p1>
	    <p1>Please complete the checkout form to finalize your order.</p1>

<form id="form1" name="form1" method="post" action="">
  <table width="671" height="931" border="1" align="center" >
    <tbody>
      <tr>
        <td colspan="2"><h4>Checkout form</h4></td>
      </tr>
      <tr>
        <td width="264"><p>Name</p></td>
        <td width="195" style="font-size: 18px"><input type="text" name="txtName" id="txtName" autofocus required></td>
      </tr>
      <tr>
        <td><p>Email</p></td>
        <td style="font-size: 18px"><input type="email" name="txtEmail" id="txtEmail" autofocus required></td>
      </tr>
      <tr>
        <td><p>Login Password</p></td>
        <td style="font-size: 18px"><input type="password" name="txtPassword" id="txtPassword" required></td>
      </tr>
      <tr>
        <td><p>Date</p></td>
        <td style="font-size: 18px"><input type="date" name="txtDate" id="txtDate" required></td>
      </tr>
      <tr>
        <td><p>Shipping Address</p></td>
        <td style="font-size: 18px"><p>
          <input type="text" name="txtline1" id="txtline1" placeholder="Street Address" required>
        </p>
          <br>
        <p>
          <input type="text" name="txtline2" id="txtline2" placeholder="Street Address Line 2">
        </p><br>
        <p>
          <input type="text" name="txtline3" id="txtline3" placeholder="City" required>
          <input type="text" name="txtline4" id="txtline4" placeholder="State/Province" required>
        </p>
        <p><br>
          <input type="text" name="txtline5" id="txtline5" placeholder="Postal Zip Code" required>
        </p>
        <p>          <br>
        </p></td>
      </tr>
      <tr>
        <td><p>Phone Number</p></td>
        <td style="font-size: 18px"><input type="tel" name="tel" id="tel" required></td>
      </tr>
      <tr>
        <td><p>What is the best way to keep in touch with you</p></td>
        <td style="font-size: 18px"><p>
          <input type="radio" name="radiobtn" id="radio" value="radio">
          Phone
        </p>
        <p>
          <input type="radio" name="radiobtn" id="radio2" value="radio2">
          Text
        </p>
        <p>
          <input type="radio" name="radiobtn" id="radio3" value="radio3">
          Email
        </p></td> 
        <p>Text</p><br>
      </tr>
      <tr>
        <td><input type="text" name="txtDisabled" id="txtDisabled" disabled value="Check information"/>&nbsp;</td>
        <td style="font-size: 18px"><input type="text" name="txtReadOnly" id="txtReadOnly" readonly value="Fill the required fields"/>
			&nbsp;</td>
      </tr>
      <tr>
        <td><p>Book Order</p></td>
        <td style="font-size: 18px"><p>
          Book Title</p>
          <p>&nbsp;</p>
          <p>
  <textarea name="textarea" id="textarea" required></textarea>
          </p>
          <p><br>
            Quantity</p>
          <p>&nbsp;</p>
          <p>
            <input type="number" name="txtRange" id="txtRange" max="20" min="1" />
          </p>
          <p>&nbsp;</p>
          <p>ISBM</p>
          <p>&nbsp;</p>
          <p>
            <input type="text" name="txtISBM" id="txtISBM" placeholder="ISBM code" autocomplete="on" required>
          </p></td>
      </tr>
      <tr>
        <td><p>Genere of the Book</p></td>
        <td style="font-size: 18px"><select name="select" id="select">
            <option value="Fantasy">Fantasy</option>
            <option value="Religion">Religion</option>
            <option value="Romance Novel">Romance</option>
            <option value="Science Fiction">Science Fiction</option>
            <option value="Mystery">Mystery</option>
            <option value="Historical">Historical</option>
            <option value="Poetry">Poetry</option>
            <option value="Thriller">Crime and Thriller</option>
            <option value="Biography">Biography</option>
            <option value="Fairy Tale">Fairy Tale</option>
            <option value="Poetry">Poetry</option>
			<option value="Academic and Educational">Academic and Educational</option>
        </select></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td style="font-size: 18px"><p>
          <input type="checkbox" name="checkbox" id="checkbox">
          Do you need updates about our books</p>
          <p>&nbsp; </p>
        <p>
          <input type="checkbox" name="checkbox2" id="checkbox2">
          Would you like to get information about monthly special books
        </p>
        <p>&nbsp;</p>
        <p>
          <input type="checkbox" name="checkbox3" id="checkbox3">
        Do you want to get a premium member ship of the store</p></td>
      </tr>
      <tr>
        <td style="text-align: center"><input type="reset" name="reset" id="reset" value="Reset"></td>
        <td style="font-size: 18px; text-align: center;"><input type="submit" name="submit" id="submit" value="Submit" >
		  		 <script type="text/javascript">
    		document.getElementById("submit").onclick = function () {
        		alert('Your order has been placed successfully');
				
    		};
</script>
		  
		  
		  
		  </td>
      </tr>
    </tbody>
  </table>
<p>&nbsp;</p>
<h6>&nbsp;</h6>
<h6>
  Thank you for shopping with RAINBOW books.
  <br>See you again..
</h6>
<p1></p1>
<p>&nbsp;</p>
	
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
</form>
</body>
</html>
