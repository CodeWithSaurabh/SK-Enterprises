<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Cart</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="../CSS/Style.css">
  	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .mainofemail{
            margin-top:10%;
        }
    </style>
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
    
    <!-- Shopping Cart -->
    <h2 class="shopcart">Shoping Cart</h2>
    <form method="POST" action="cart_manage.php"  >
        <table  width="80%" id="tab" >
            <tr class="tableth">
                <th class="hide">  Seriel no.  </th>
                <th class="for-more-width">Name </th>
                <th>Price</th>
                <th name="sn" class="qty" >Quantity   </th>
                <th> Remove </th>
                <th><span>Item Total Amount</span><span id="hide">Total</span></th> 
            </tr> 
            
            <?php
            if(isset($_SESSION['cart5']))
            {
            foreach($_SESSION['cart5'] as $key =>$value)
            { 
            $sr=$key+1;
         
            echo"
            <tr align='center'>
            <td class='hide'>$sr</td>           
            <td class='left'>$value[item_name]</td>
            <td class='left' style='text-align: center;'>$value[price] <input type='hidden' class='iprice'  name='price' value=$value[price]>
            </td>
            <td><form  action='cart_manage.php' method='POST'>  
            <input type='number' name='quant' class='iquantity' onchange='this.form.submit()' align='center' min='1'value='$value[quantity]' max='10' placeholder='1'  > 
            <input type='hidden' name='price' value=$value[price] >
            </form></td>
            </td>
            <td> 
            <form  action='cart_manage.php' method='POST' class='btn1' >  
            <button  name='remove' style='border:none;cursor:pointer;'><i class='fa fa-close' style='color:red;'></i>
            </button>  
            <input type='hidden' name='price' value=$value[price] >
            </form></td>
            <td  class='total'; name='tf' class='btn4'>  </td>
            </tr>";
            }
            }
            ?>
        </table>
        <table class="era">
            <tr>
                <td id="gtotal"></td>
                <td style="float:right;">Total &#8377; </td>
            </tr>
        </table>
        <table class="cp">
            <tr>
                <td>
                    <form action="" method="post">
                        <button name="checkout" class='paycart'>
                            Continue Shopping    
                        </button>
                    </form>
                </td>
                <td>
                    <a href='../payment.php' class='paycart'>
                        Pay now
                    </a>
                </td>
            </tr>
        </table>
    </form>

    <!-- Java Script -->
    <script>
    var anj=0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity');
    var total=document.getElementsByClassName('total');
    var gtotal= document.getElementById('gtotal');
   
    function  subtotal()
    {
    anj=0;
    for(i=0;i<iprice.length;i++)
    {
        total[i].innerText=(iprice[i].value)*(iquantity[i].value);
        anj=anj+(iprice[i].value)*(iquantity[i].value);
    }
    total.innerText=anj;
    gtotal.innerText=anj;
    }
    subtotal();
    </script>


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

<!-- PHP -->
<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'myownproject')or die('plz check');
if(isset($_POST['checkout']))
{

   $query="INSERT INTO `cart`(`item_name`, `price`, `quantity`) VALUES (?,?,?)";
$stmt=mysqli_prepare($con,$query);
if($stmt)
{
    mysqli_stmt_bind_param($stmt,"sii",$item_name,$price,$quantity); 

    foreach($_SESSION['cart5'] as $key =>$value)
    {
        $item_name=$value['item_name'];
        $price=$value['price'];
        $quantity=$value['quantity'];
        mysqli_stmt_execute($stmt);
    }
    // unset($_SESSION['cart5']);
    ?>
        <script>
            
            alert(" Thankyou ");
            window.location.href='../Home.php';
           
        </script>
        <?php
}
else{
    echo"error";
}

}
?>