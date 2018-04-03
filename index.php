<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />  
	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" /> 
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<style>
    h1 {color:orangered;}
   </style>
   <style>
   .mySlides {display:none;}
   </style>
</head>
<body>
<h1 align="center">ONLINE BUS TICKET BOOKING</h1>
       <!--MainMenu-->
	<div class="header">
		<div class="mid">
			<div class="logo">
				<img src="images/logo.png" alt="" /> 
			</div>
			<div class="menu">
				<ul>
					<li>
					
						<a href="index.php"> 
							<i class="fa fa-home" style="font-size:19px;margin-right:3px;"></i>  
							Home
						</a>
					</li>
					
					<!--<li>
					
						<a href="index.php">
							<i class="fa fa-home" style="font-size:19px;margin-right:3px;"></i>
							hhhh
						</a>
					</li>-->
					<li>
						<a href="about.html">
							<i class="fa fa-bus" style="font-size:19px;margin-right:3px;"></i>
							 About Bus
						</a>
					</li>
					<li>
						<a href="contact.html"> 
							<i class="fa fa-phone" style="font-size:19px;margin-right:3px;"></i>
							Contact
						</a>
					</li>
					<li>
						<a href="hotel.php">
							<i class="fa fa-hotel" style="font-size:19px;margin-right:3px;"></i>
						   Hotel
						</a>
					</li>
					<li>
						<a href="complainbox.php">
							<i class="fa fa-commenting" style="font-size:19px;margin-right:3px;"></i>
							Complain Box
						</a>
					</li>
					<li><a href="user.php">
					<i class="fa fa-user" style="font-size:19px;margin-right:3px;"></i>
					Admin</a></li>
				</ul>
			</div>
			<hr/>
		</div>
	</div>
	<!--End MainMenu-->
	<marquee><h2>Welcome To Online Bus Ticket Booking management system  Hotline 01749-147777 01750-782035 01919-044500</h2></marquee>
	<div class="form">
		<div class="mid">
			<div class="form_left">
				 <?php
	
						include "db.php";
						include "booked.php"
	
                ?>
			</div>
			<div class="form_right">
			   <div>
                    <div class="w3-content w3-section" style="max-width:500px">
                    <img class="mySlides" src="bus.jpg" style="width:550px">
                    <img class="mySlides" src="2.jpg" style="width:550px">
                    <img class="mySlides" src="3.jpg" style="width:550px">
                    <img class="mySlides" src="4.jpg" style="width:550px">
                    <img class="mySlides" src="5.jpg" style="width:550px">
               </div>
   
            <script>
                   var myIndex = 0;
                   carousel();
                   function carousel(){
                   var i;
                   var x = document.getElementsByClassName("mySlides");
                   for (i = 0; i < x.length; i++) {
                   x[i].style.display = "none";
                   }
                  myIndex++;
                  if (myIndex > x.length) {myIndex = 1}
                  x[myIndex-1].style.display = "block";
                  setTimeout(carousel, 2000); // Change image every 2 seconds
                  }
           </script>
           </div>	
		   </div>
		</div>
	</div>
	
	<div class="social">
		<div class="mid">
			<hr/>
			<div class="icon">
			<h3>Connect with Us</h3> 
				<ul>
					<li>
						<a target="" href="www.facebook.com">
							<i class="fa fa-facebook-square" style=""></i>
						</a>
					</li>
					<li>
						<a target="" href="#">
							<i class="fa fa-twitter"></i>
						</a>		
					</li>
					<li>
						<a rel="publisher" target="" href="#">
						<i class="fa fa-google-plus-square"></i>
						</a>
					</li>
				</ul>
			</div>
			<div class="footer">
			<p>Copyright @Own idea,©W3Schools,@Google etc</p>
		</div>
		</div>		
	</div>
</body>
</html>