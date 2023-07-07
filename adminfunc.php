<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
	
	
	
</head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="Public/css/register.css">
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
	
<tr>
    <td height="215" colspan="2"><form action="" method="post">
      ;
      <table width="406" border="0" align="center">
      <tr>
        <td colspan="2"><h4>Admin Functionalities</h4></td>
        </tr>
      <tr>
        <td width="146"><p>Book ID</p></td>
        <td width="227"><p>&nbsp;
          </p>
          <p>
            <input type="text" name="bookid" id="bookid" required/>
          </p>
          <p>&nbsp; </p></td>
      </tr>
      <tr>
        <td>Title</td>
        <td><p>&nbsp;
          </p>
          <p>
            <input type="text" name="title" id="title" required />
          </p>
          <p>&nbsp; </p></td>
      </tr>
      <tr>
        <td><p>Price</p></td>
        <td><p>&nbsp;
          </p>
          <p>
            <input type="text" name="price" id="price" required />
          </p>
          <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td><p>&nbsp;</p>
          <p>Description</p>
          <p>&nbsp;</p></td>
        <td><input type="text" name="des" id="des" required /></td>
      </tr>
      <tr>
        <td><p>&nbsp;</p>
          <p>Author</p>
          <p>&nbsp;</p></td>
        <td><input type="text" name="author" id="author" required /></td>
      </tr>
		        <tr>
        <td><p>&nbsp;</p>
          <p>Admin ID</p>
          <p>&nbsp;</p></td>
        <td><input type="text" name="adminid" id="adminid" required /></td>
      </tr>
      <tr>
        <td><p>&nbsp;</p>
          <p>Category ID</p>
          <p>&nbsp;</p></td>
        <td><input type="text" name="catid" id="catid" required /></td>
      </tr>
      <tr>
        <td colspan="2"><blockquote>
        
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <p>
               <input name="btnadd" type="submit" class="button" id="btnadd" value="ADD" />
				 <input name="btnupdate" type="submit" class="button" id="btnupdate" value="UPDATE" />
				 <input name="btndelete" type="submit" class="button" id="btndelete" value="DELETE" />

             </p>
         
        </blockquote></td>
        </tr>
    </table>
    </form>
    </td>
  </tr>	

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
<?php
	if(isset($_POST["btnadd"]))
	{
		$bookid = $_POST["bookid"];
		$title = $_POST["title"];
		$price = $_POST["price"];
		$des = $_POST["des"];
		$author = $_POST["author"];
		$adminid = $_POST["adminid"];
		$catid = $_POST["catid"];
		
		$con = mysqli_connect("localhost","root","","rainbowbooks");
					
				if(!$con)
				{
					die("Cannot connect our DB Seaver");
				}
		
		$sql = "INSERT INTO `books`(`bookID`, `title`, `price`, `description`, `author`, `adminID`, `catID`) VALUES ('".$bookid."', '".$title."', '".$price."', '".$des."', '".$author."', '".$adminid."', '".$catid."');";
		
		
		
		 mysqli_query($con,$sql);
		
		if(!$sql)
		{
			echo "Query does not work.".mysqli_error($con);die;
		}
		else
		{
    		echo "Data successfully added";	
		}
		

	
	}
	
		if(isset($_POST["btnupdate"]))
	{
		$bookid = $_POST["bookid"];
		$title = $_POST["title"];
		$price = $_POST["price"];
		$des = $_POST["des"];
		$author = $_POST["author"];
		$adminid = $_POST["adminid"];
		$catid = $_POST["catid"];
		
		$con = mysqli_connect("localhost","root","","rainbowbooks");
					
				if(!$con)
				{
					die("Cannot connect our DB Seaver");
				}
			
		$sql = "UPDATE books SET bookID = 'ISBM-0000047',tile = 'Test',price = 'RS780',description = 'test',author = 'test',adminID = 'admin',catID = '20221' WHERE bookID=ISBM-0000047 ";
 
			mysqli_query($conn,$sql);
			if(!$sql)
			{
    			echo "Query does not work.".mysqli_error($con);die;
			}
			else
			{
    			echo "Data successfully updated";
			}	
			
		}
	
			if(isset($_POST["btndelete"]))
	{
		$bookid = $_POST["bookid"];
		$title = $_POST["title"];
		$price = $_POST["price"];
		$des = $_POST["des"];
		$author = $_POST["author"];
		$adminid = $_POST["adminid"];
		$catid = $_POST["catid"];
		
		$con = mysqli_connect("localhost","root","","rainbowbooks");
					
				if(!$con)
				{
					die("Cannot connect our DB Seaver");
				}
			
    $sql = "DELETE FROM books WHERE bookID='" . $_GET["bookID"] . "'";
 
    if (mysqli_query($con, $sql)) {
 
        echo "Record deleted successfully";
 
    } else {
     
        echo "Error deleting record: " . mysqli_error($con);
    }
    mysqli_close($conn);
	}
	
?>	
</html>