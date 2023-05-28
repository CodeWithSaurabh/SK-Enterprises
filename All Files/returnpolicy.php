<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Return & Refund policies</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="CSS/Style.css">
  	<script type="text/javascript" src="js/javascript.js"></script>  
  	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<header class="header">
		<<a href="Home.php" class="logo"><img src="images/black-logo.png" alt="Company LOGO" ></a>
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
    
    <!-- return policy -->
    <div class="policy">
    <ul>
        <h2>Return and refund policy</h2>
        <p>Thanks for shopping at SGOC.</p>
        <p>If you are not entirely satisfied with your purchase, we're here to help.</p>
        <p>This scheme is provided by our Company under this policy in terms of which the option of exchange, replacement and/ or 
            refund is offered by the our Company to you. For all products, the returns/replacement policy provided on the product page 
            shall prevail over the general returns policy. Do refer the respective item's applicable return/replacement policy on the 
            product page for any exceptions to this returns policy.</p>
        <p>If you’re looking to return or exchange your order for whatever reason, we're here to help! We offer free returns or 
            exchanges within 10 days of receiving your order. You can return your product for store credit, a different product, or a 
            refund to the original payment method.</p>
        <h3>Return</h3>
        <li>Visit the <a href="Trackyourorder.html">Online Return Center</a> to create a return</li>
        <li>For Return mail out your item within 10 days from the receipt of original order.</li>
        <li>Item cannot be returned after 10 days from the recipt of original order.</li>
        <li>To be eligible for a return. Your item must be unused and in the same condition that you received it.</li>
        <li>Your item must be in the original packaging.</li>
        <li>We accept return, if the product shipped with defects in carftsmanship or material.</li>
        <li>Your item needs to have the recipt proof of purchase.</li>
        <li>Discounted items are final and cannot be returned or exchanged</li>
        <h3>No Exchange Policy</h3>
        <li>We do not accept orders or items for exchange. If you need a different size, color or product please return 
            your item(s) for a refund and place a new order at your convenience. Placing the new order now just ensures 
            that you will receive it quickly, and that it won’t go out of stock.</li>
        <h3>Refunds</h3>
        <li>Once we receive your item, we will inspect it and notify you that we have received your returned item. We will immediately 
            notify you on the status of your refund after inspecting the item.</li>
        <li>If your return is approved, we will initiate a refund to your credit card (or original method of payment).</li>
        <li>You will receive the credit within a certain amount of days, depending on your card issuer's policies.</li>
        <h3>Shipping</h3>
        <li>You will be responsible for paying for your own shipping costs for returning your item. Shipping costs are nonrefundable.</li>
        <li>If you receive a refund, the cost of return shipping will be deducted from your refund.</li>
        <h3>Contact Us</h3>
        <li class="forgapping">If you have any questions on how to return your item to us, <a href="contact.html">contact us</a>.</li>
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