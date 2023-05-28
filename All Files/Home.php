<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  	<title>SK Enterprises</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="CSS/Style.css">
  	<script type="text/javascript" src="js/javascript.js"></script>  
  	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<header class="header">
		<a href="Home.php" class="logo"><img src="images/black-logo.png" alt="Company LOGO" ></a>
		<input type="checkbox" name="" id="">
		<div class="navbar-menu">
		    <a href="Home.php">HOME</a>
            <div class="dropdownproduct">
                <a class="dropdownproductbutton">PRODUCT</a>
                <div class="dropdown-productcontent">
                  	<a href="luggage.php">LUGGAGE</a>
                  	<a href="bag.php">SCHOOL BAG</a>
                  	<a href="belt.php">BELT</a>
                  	<a href="purse.php">PURSE</a>
                </div>
            </div>
            <a href="about.php">ABOUTUS</a>
			<a href="warranty.php">WARRANTY</a>
		  	<a href="contact.php">CONTACTUS</a>
		  	<a href="Products/Addtocartandbuy.php" id="for-right-side"><i class="fa fa-shopping-cart" title="Cart"></i></a>
			<a href="logout.php" style='padding:0; background:transparent;' id="logout">
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
			<a href="Products/Addtocartandbuy.php" class="for-right-side"><i class="fa fa-shopping-cart" ></i></a>
		</span> 
		<span class="menu-icon">&#9776;</span>
        <span class="close-icon">&#x2716;</span>
	</header>

	<!-- Image Slider -->
    <div class="slider">
		<div class="slides">
			<input type="radio" name="radio-btn" id="radio1">
		  	<input type="radio" name="radio-btn" id="radio2">
		  	<input type="radio" name="radio-btn" id="radio3">
		  	<input type="radio" name="radio-btn" id="radio4">
		  	<div class="slide first">
				<img src="images/1.jpg" alt="Image">
		  	</div>
		  	<div class="slide">
				<img src="images/2.jpg" alt="Image">
		  	</div>
		  	<div class="slide">
				<img src="images/3.jpg" alt="Image">
		  	</div>
		  	<div class="slide">
				<img src="images/4.jpg" alt="Image">
		  	</div>
		  	<div class="navigation-auto">
				<div class="auto-btn1"></div>
				<div class="auto-btn2"></div>
				<div class="auto-btn3"></div>
				<div class="auto-btn4"></div>
		  	</div>
		</div>
		<div class="navigation-manual">
		  	<label for="radio1" class="manual-btn"></label>
		  	<label for="radio2" class="manual-btn"></label>
		  	<label for="radio3" class="manual-btn"></label>
		  	<label for="radio4" class="manual-btn"></label>
		</div>
	</div>

	<!-- Square Picture --> 
	<div class="squarepics">
		<div class="firstsquarepic">
			<div class="squarepic">
				<img src="images/square1home.jpg" alt="Picture">
				<h1>LUGGAGE</h1>
				<a href="luggage.php">Shop now</a>
			</div>
			<div class="squarepic">
				<img src="images/square2home.jpg" alt="Picture">
				<h1>DISNEY AND KIDS</h1>
				<a href="luggage.php">Shop now</a>
			</div>
		</div>
		<div class="firstsquarepic">
			<div class="squarepic">
				<img src="images/square3home.jpg" alt="Picture">
				<h1>LIFE IS GOD</h1>
				<a href="luggage.php">Shop now</a>
			</div>
			<div class="squarepic">
				<img src="images/square4home.jpg" alt="Picture">
				<h1>LUGGAGE SETS</h1>
				<a href="luggage.php">Shop now</a>
			</div>
		</div>
	</div>

	<!-- Shop collection -->
	<div class="mainheading">
		<h2>Shop Collections</h2>
		<p>Select from the premium product and save plenty money</p>
	</div>
    <section class="section promotion">
		<div class="promotion-layout container">
		  	<div class="promotion-item">
				<img src="./images/hometrolly.jpg" alt="Picture of trolly">
				<div class="promotion-content">
			  		<h3>Luggage</h3>
			   		<a href="luggage.php">SHOP NOW</a>
				</div>
		  	</div>
		  	<div class="promotion-item">
				<img src="./images/homebag.JPG" alt="Picture of bag">
				<div class="promotion-content">
			  		<h3>School Bag</h3>
			  		<a href="bag.php">SHOP NOW</a>
				</div>
		  	</div>
		  	<div class="promotion-item">
				<img src="./images/homebelts.jpg" alt="Picture of Belt">
				<div class="promotion-content">
			  		<h3>Belt</h3>
			  		<a href="belt.php">SHOP NOW</a>
				</div>
		  	</div>
		  	<div class="promotion-item">
				<img src="./images/homepurses.jpg" alt="Picture of purse">
				<div class="promotion-content">
			  		<h3>Purse</h3>
			  		<a href="purse.php">SHOP NOW</a>
				</div>
		  	</div>
		  	<div class="promotion-item">
				<img src="./images/homeladies.jpg" alt="Ladies purse">
				<div class="promotion-content">
			  		<h3>Ladies purse</h3>
			  		<a href="purse.php">SHOP NOW</a>
				</div>
		  	</div>
		  	<div class="promotion-item">
				<img src="./images/luggage6.jpg" alt="Picture of Dafal" id="for-maintain-height">
				<div class="promotion-content">
			  		<h3>Dafal</h3>
			  		<a href="luggage.php">SHOP NOW</a>
				</div>
		  	</div>
		</div>
	</section>

	<!-- Off. in product -->
	<section class="hghlgtprodct">
		<div class="homeproduct">
			<img src="images/homebigproduct.jpeg" alt="Image">
		</div>
		<div class="homeproduct1">
			<h2>60% OFF</h2>    
			<h1>Wildcarft Large 40 L Backpack Colossal  (Black, Orange)</h1>
			<p>Offer is vaild for 2 days</p>
			<p>Price reflect Discount</p><br><br>
			<a href="Products/bag6.php">Order now &nbsp;&rarr;</a>
		</div>
	</section>

	<!-- Somedetail -->
	<div class="featureofhome">
		<div class="info">
			<i class='fas fa-truck'></i>
			<h2>Free Shipping</h2>
			<p>Orders of &#x20B9;1000 or more qualify for free standard shipping, no code needed. Need it sooner? Choose expedited or priority.</p>
		</div>
		<div class="info">
			<i class="fa fa-get-pocket"></i>
			<h2>Quality & Durability</h2>
			<p>All products are tested for strength, durability and performance based on the demands of frequent travelers.</p>
		</div>
		<div class="info">
			<i class='fas fa-lock'></i>
			<h2>Secure Shopping</h2>
			<p>All orders and personal info on or site are transmitted through a secure server using Secure Socket Layering (SSL).</p>
		</div>
	</div>

	<!-- Offer's and latest -->
	<div class="emailbox">
		<h2>Sign up for Email and get access to exclusive offers & the latest updates!</h2>
		<form action="email.php" method="POST">
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
  	 				<li><a href="Home.php">Home</a></li>
  	 				<li><a href="about.php">About Us</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="socialcompliance.php">Social Compliance</a></li>
					<li><a href="warranty.php">Warranty</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col" id="footer-col">
  	 			<h4>Product</h4>
  	 			<ul>
  	 				<li><a href="luggage.php">Luggage</a></li>
  	 				<li><a href="bag.php">School Bag</a></li>
  	 				<li><a href="belt.php">Belt</a></li>
  	 				<li><a href="purse.php">Purse</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col" >
  	 			<h4>Get Help</h4>
  	 			<ul>	
  	 				<li><a href="trackyourorder.php">Track your order</a></li>
					<li><a href="care.php">Product Care & Cleaning</a></li>
					<li><a href="complaint.php">Compliance Information</a></li>
					<li><a href="service.php">Service & Repair</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Policies</h4>
				<ul>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="returnpolicy.php">Return policy</a></li>
					<li><a href="accessibility.php">Accessibility Statement</a></li>
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