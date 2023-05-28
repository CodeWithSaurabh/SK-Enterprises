<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Service & Repair</title>
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

    <!-- Service repair page -->
    <div class="RServicepolicy">
        <ul>
            <h2>Service & Repairs</h2>
            <p class="Servicepolicy">The health and safety of our employees, customers, and community is our top priority. Due to our 
                COVID-19 procedures, we are taking email via our contact us form. The Service & Repairs page has been updated with 
                additional information that might answer your question. If not, then please contact us via the Contact Us form link 
                below. Thank you for your patience and support.
            </p>
            <h3>REPAIR POLICY</h3>
            <a href="repair.html">Click here</a> for repair our Products.
            <p>Your product has a warranty which covers manufacturing defects in workmanship and materials. Our warranty does not 
                cover repairs resulting from carrier damage, misuse or neglect of the product, normal wear and tear, or repairs beyond
                the warranty period.
            </p>
            <p>For warranty repair evaluation, your product will need to be evaluated by our Authorized Repair Center. Please 
                <strong>note</strong> any shipping costs to the repair center will be your responsibility.
            </p>
            <p>The Authorized Repair Center will make the final determination on the status of the product with the possible following
                outcomes:
            </p>
            <li>If the product is repairable and covered under warranty, the product will be repaired at Saurabh trader's expense and 
                returned to you.
            </li>
            <li>If the product is not repairable and is covered under warranty, you will be contacted via email in regards to receiving 
                warranty replacement at no cost to you.</li>
            <li>If the product is repairable and not covered under warranty, you may either have the product returned to you un-repaired,
                or have the product repaired at your own expense. This will be communicated to you by the Authorized Repair Center via 
                email.
            </li>
            <li>If the product is not repairable and not covered under warranty, you can elect to have the Authorized Repair Center 
                send the product back to you un-repaired, or you may ask the Authorized Repair Center to dispose of the product.
            </li>
            <p>When creating your repair ticket, your options of getting your product to the authorized repair center are below:</p>
            <p>You may choose to ship or personally bring your product to the authorized repair center. If you select to ship it to the
                repair center, we recommend using a carrier that will provide you with a tracking number.
            </p>
            <p>OR</p>
            <p>You may choose to personally bring your product to a Company Store and the Store will be happy to ship this to the rpair 
                center for you at a a small fee:
            </p>
            <li>&#x20B9;100 for piece under 26"</li>
            <li>&#x20B9;150 for 26" or larger</li>
        </ul>
    </div>

    <!-- Offer's and latest update -->
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