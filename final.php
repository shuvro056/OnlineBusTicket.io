  
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Final Page</title>
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
					<li><a href="user.php">
					<i class="fa fa-user" style="font-size:19px;margin-right:3px;"></i>
					Admin</a></li>
				</ul>
			</div>
			<hr>  
			<br>
			<br>
			<br>
		</div><br>
		<br>
		<h2 style="text-align:center">Seat booked successfull</h2>
			<h2 style="text-align:center">For payment 01749147777(Bkash)</h2>
		<br>
		<br>
	</div>
	<div class="form">
		<div class="mid">
				<div class="form_left">
				 
   <form method="GET" action="">
    <?php
	        include "db.php"; 
			$fname = $_GET['fname'];
			$lname = $_GET['lname'];
			$contact = $_GET['contact'];
			$seat =$_GET['seat'];
			$sid=$_GET['sid'];
			$jdate=$_GET['jdate'];
			$prc=$_GET['prc'];
		$sql = 'INSERT INTO booked (`schedule_id`, `customer_name` ,`last_name`,`contact`,`quantity`,`booked_date`,`payable`) VALUES ("'.$sid.'", "'.$fname.'", "'.$lname.'", "'.$contact.'", "'.$seat.'","'.$jdate.'","'.$prc.'")';
			$result 		= $con->query($sql);
		if(mysqli_insert_id($con)>0){
			//echo "Success";
		} else {
			echo "failed";
		}
     ?>
		<input type='hidden' name='fname' value='<?php echo $fname;?>'>
		<input type='hidden' name='lname' value='<?php echo $lname;?>'>
		<input type='hidden' name='contact' value='<?php echo $contact;?>'>
		<input type='hidden' name='seat' value='<?php echo $seat;?>'>
		<input type='hidden' name='sid' value='<?php echo $sid;?>'>
		<input type='hidden' name='jdate' value='<?php echo $jdate;?>'>
		<input type='hidden' name='prc' value='<?php echo $prc;?>'>
		</form>
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