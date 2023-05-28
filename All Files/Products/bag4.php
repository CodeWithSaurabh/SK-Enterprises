<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Darzo 1008 nazzes sb Waterproof school bag</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="../CSS/Style.css">
  	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<header class="header">
		<a href="../Home.php" class="logo"><img src="../images/black-logo.png" alt="Company LOGO" ></a>
		<input type="checkbox" name="" id="">
		<div class="navbar-menu">
		    <a href="../Home.php">HOME</a>
            <div class="dropdownproduct">
                <a class="dropdownproductbutton">PRODUCT</a>
                <div class="dropdown-productcontent">
                  	<a href="../luggage.php">LUGGAGE</a>
                  	<a href="../bag.php">SCHOOL BAG</a>
                  	<a href="../belt.php">BELT</a>
                  	<a href="../purse.php">PURSE</a>
                </div>
            </div>
            <a href="../about.php">ABOUTUS</a>
			<a href="../warranty.php">WARRANTY</a>
		  	<a href="../contact.php">CONTACTUS</a>
		  	<a href="../Products/Addtocartandbuy.php" id="for-right-side"><i class="fa fa-shopping-cart" title="Cart"></i></a>
			<a href="../logout.php" style='padding:0; background:transparent;' id="logout">
				<div class="hlogout"><i class="fa fa-sign-out" title="Log out"></i></div>
				<div class="ulogout">Log out</div> 
			</a>
			<div class="navbar-icon">
				<div class="icon-of-navbar">
					<i class="fa fa-bars"></i>
				</div>
			</div>
		</div> 
		<span class="for-right-side">
			<a href="../Products/Addtocartandbuy.php" class="for-right-side"><i class="fa fa-shopping-cart" ></i></a>
		</span> 
		<span class="menu-icon">&#9776;</span>
        <span class="close-icon">&#x2716;</span>
	</header>

    <!-- Bag 4 -->
    <form  action="cart_manage.php" method="POST" class="product-detail">
        <div class="row1">
            <div class="col1">
                <img src="../images/bag5.jpeg"  id="product-img" alt="Product image">
                <div class="small-product-img">
                    <div class="small-col-img">
                        <img src="../images/bag5.jpeg" alt="product-img" class="small-col">
                    </div>
                    <div class="small-col-img">
                        <img src="../images/bag5(b).jpeg" alt="product-img" class="small-col">
                    </div>
                    <div class="small-col-img">
                        <img src="../images/bag5(c).jpeg" alt="Product image" class="small-col">
                    </div>
                </div>
                <div  class="cart-1">
                    <button  name="cart"  >Add to cart</button>
                    <input type="hidden" name="item_name" value="Darzo 1008_SB Waterproof">
                    <input type="hidden" name="price" value="319">
                    <a href="../payment.php">Buy now</a>
                </div>
            </div>
            <div class="col1" id="col1">
                <h1>15.6 inch Expandable Laptop Backpack  (Black)</h1>
                <div class="product-rating">
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <p>0 ratings</p>
                </div>
                <hr>
                <h3>M.R.P.:&nbsp; <del> &#8377;999</del></h3>
                <h2>Deal Price:	&#8377;319</h2>
                <h3>You Save:	&#8377;680 (68%)</h3>
                <p>1 Year Warranty <a href="../warranty.php" class="know-more">Know More</a></p>
                <h4>In  Stock.</h4>
                <p>Buy two 2 and get Free Shipping</p>
                <h3 class="heading-detail">Product Detail :-</h3>
                <ul>
                    <li>Type - Backpack</li>
                    <li>Trolley Support - No</li>
                    <li>Laptop Sleeve - YES</li>
                    <li>With Rain Cover - YES</li>
                    <li>Color - Red</li>
                    <li>Number of Compartments - 4</li>
                    <li>Capacity - 40 L</li>
                    <li>Dimensions - W x H: 12 x 16 inch</li>
                </ul>
            </div>
        </div>
    </div>
</form>
    <script>
        var fullImage = document.getElementById('product-img');
        var smallImage = document.getElementsByClassName('small-col');

        smallImage[0].onclick = function (){
            fullImage.src = smallImage[0].src;
        }
        smallImage[1].onclick = function (){
            fullImage.src = smallImage[1].src;
        }
        smallImage[2].onclick = function (){
            fullImage.src = smallImage[2].src;
        }
    </script>

    <!-- Related product -->
    <div class="product-detail">
        <div class="row1 row-2">
            <h2>Related Products</h2>
            <a href="../bag.php">view More</p></a> 
        </div>
    </div>
    <div class="product-detail">
        <div class="row1 row-1">
            <div class="col-4">
                <img src="../images/bag2.jpeg" alt="bag">
                <h4>Kids School bag</h4>
                <div class="rating">
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>&#8377;259</p>
            </div>
            <div class="col-4">
                <img src="../images/bag1.jpeg" alt="bag">
                <h4>Wildcraft Backpack</h4>
                <div class="rating">
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>&#8377;1,209</p>
            </div>
            <div class="col-4">
                <img src="../images/bag3.jpeg" alt="bag">
                <h4>Elephant soft bag</h4>
                <div class="rating">
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>&#8377;249</p>
            </div>
            <div class="col-4">
                <img src="../images/bag4.jpeg" alt="bag">
                <h4>Barfie Design bag</h4>
                <div class="rating">
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>&#8377;329</p>
            </div>
        </div>  
    </div>

    <!-- Offer's and latest -->
	<div class="emailbox">
		<h2>Sign up for Email and get access to exclusive offers & the latest updates!</h2>
		<form action="../email.php" method="POST">
			<input type="email" name="email1" placeholder="&#9993 Email" required>
			<button type="submit" ><span id="for-hiding">Submit</span><span class="right-arrow"><i class="arrow right"></i></span> </button>
		</form>
	</div>

	<!-- Footer -->
	<footer class="footer">
  	    <div class="container">
  	 		<div class="footer-col">
  	 			<h4 class="increase-width">Quick Link</h4>
  	 			<ul>
  	 				<li><a href="../Home.php">Home</a></li>
  	 				<li><a href="../about.php">About Us</a></li>
					<li><a href="../contact.php">Contact Us</a></li>
					<li><a href="../socialcompliance.php">Social Compliance</a></li>
					<li><a href="../warranty.php">Warranty</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col" id="footer-col">
  	 			<h4>Product</h4>
  	 			<ul>
  	 				<li><a href="../luggage.php">Luggage</a></li>
  	 				<li><a href="../bag.php">School Bag</a></li>
  	 				<li><a href="../belt.php">Belt</a></li>
  	 				<li><a href="../purse.php">Purse</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col" >
  	 			<h4>Get Help</h4>
  	 			<ul>	
  	 				<li><a href="../trackyourorder.php">Track your order</a></li>
					<li><a href="../care.php">Product Care & Cleaning</a></li>
					<li><a href="../complaint.php">Compliance Information</a></li>
					<li><a href="../service.php">Service & Repair</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Policies</h4>
				<ul>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="../returnpolicy.php">Return policy</a></li>
					<li><a href="../accessibility.php">Accessibility Statement</a></li>
				</ul>
  	 		</div>
  	 	</div>
  	</footer>
  	<div class="fbinsta">
		<div class="coprght">
			<ul>
				<li>&#169;2020-2021. All rights reserved.</li>
				<li><strong>Design by</strong> <i>Saurabh Kumar</i></li>
			</ul>
			<div class="returntohome">
				<a href="#">&#8593;</a> 
			</div>	
		</div>
	    <div class="sfbinsta">
	        <a href="https://m.facebook.com/login.php" class="fa fa-facebook"></a>
	        <a href="https://mobile.twitter.com/login" class="fa fa-twitter"></a>
	        <a href="https://www.youtube.com/" class="fa fa-youtube"></a>
	        <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
	        <a href="https://in.linkedin.com/" class="fa fa-linkedin"></a>
	    </div>
 	</div>
</body>
</html>