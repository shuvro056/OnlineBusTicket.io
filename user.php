 
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	
</head>
<body>
	<div class="header">
	 
		<div class="mid">
		<hr>
		 
			<div class="logo">
				<img src="images/logo.png" alt="" />
			</div>
			<div class="menu">
			
			 
				<ul>
					<li>
						<a href="index.php">
							<i class="fa fa-home" style="font-size:19px;margin-right:3px;"></i>Home
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-bus" style="font-size:19px;margin-right:3px;"></i>
							About Bus
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-phone" style="font-size:19px;margin-right:3px;"></i>
							Contact
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-hotel" style="font-size:19px;margin-right:3px;"></i>
							Hotel
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-commenting" style="font-size:19px;margin-right:3px;"></i>
							Complain Box
						</a>
					</li>
					<li><a href="#">
					<i class="fa fa-user" style="font-size:19px;margin-right:3px;"></i>
					Admin</a></li>
				</ul>
			</div>
			<hr>
			<br>
			<br>
			<br>
		</div>
		<h1 style="text-align:center">Admin login</h1>
	</div>
	<!--<div class="slider">
		<div class="mid">
			<div class="slider_cont">
				<img src="images/1.jpg" alt="" />
				<img src="images/2.jpg" alt="" />
				<img src="images/3.jpg" alt="" />
				<img src="images/4.jpg" alt="" />
			</div>
		</div>
	</div>!-->
	<div class="form">
		<div class="mid">
				<div class="form_left">
<?php
require("config.php");
 if(ISSET($_POST['submit'])) 
	 {
		 $username=$_POST['username'];
		 $password=$_POST['password'];
		// echo $username." ".$password;
		$sql = "SELECT id FROM users WHERE username = '".$username."' and password='".$password."'";
		$query= mysqli_query($con,$sql) ;
		if(mysqli_num_rows($query)==1){
			//login success
			$data=mysqli_fetch_array($query,1);
			
			$_SESSION ['id']=$data['id'];
			header("location:admin.php");
		}
		else
		{	
		}
	 }
  ?>
<form action="" method="POST" name="us" onsubmit="return validate()">
	Username:<br>
		<input type="text" name="username" placeholder="Username"> <br><br>
	Password:<br>
		<input type="password" name="password" placeholder="Password"> <br><br>

		<input type="submit" name="submit" value="login">
<table>
</table>
</form>
<br>
<br> 
		</div>
	</div>
	</div>
	<div class="comment_purpose">	 
	</div>
	<div class="company">
		<div class="mid">
			<div class="bus_operator">
				<h3>Available Bus Operators</h3>
		<hr />
			<div class="box">
				<p>.R Travels,
					Agomony Express,
					Akota Transport,
					Ena Transport (Pvt) Ltd,
					Green Line Paribahan,
					S.R Travels (Pvt) Ltd.
					
					</p>
			</div>
			<div class="box">
				<p>
					Hanif Enterprise,
					HIMACHOL EXPRESS,
					Manik Express,
					Nabil Paribahan,
					Relax Transport Ltd.
					S A Travels (Pvt) Ltd.
					S.B Super Deluxe,
				</p>
			</div>
			<div class="box">
				<p>
					Sheba Green Line,
					Shohagh Paribahan,
					Shyamoli Paribahan,
					Soudia Air Con,
					Star Line Special Ltd.
					Tisha Group,
					
				</p>
			</div>
		</ul>
			</div>
		</div>
	</div>
	
	<div class="social">
		<div class="mid">
			<hr />
			<div class="icon">
			<h3>Connect with Us</h3>
				<ul>
					<li>
						<a target="" href="#">
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


























