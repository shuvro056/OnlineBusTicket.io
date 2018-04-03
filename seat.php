 
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<script type="text/javascript" src="script2.js">
 </script>
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
		</div>
		<h1 style="text-align:center"></h1>
	</div>
	<div class="form">
		<div class="mid">
				<div class="form_left">
  <?php
	include "db.php";
	if ( isset($_GET['buy'] ) && isset($_GET['sid']) ){
	$sid = $_GET['sid'];
	//$jdate = $_GET['jdate'];
		$sql = "SELECT total_seat,available_seat FROM schedule WHERE schedule_id = '".$sid."'";
			$dave=mysqli_query($con,$sql) or die(mysqli_error());
	 while($row=mysqli_fetch_assoc($dave)){
		 //echo "total seat";
		 //echo $row['total_seat'];
		 $k = $row['total_seat'];
		// echo $k;
		 echo '<br>';
		  //echo "available seat";
		 $m= $row['available_seat'];
		 //echo $m;	 
	 } 
	 ?>
	<form action="printtkt.php" method="GET" name="spage">
	Select Seat :<br>
	 <select type="text" name="seat">
	 <option value="-1" selected>Select here</option>
	 <option value="1">1</option>
	 <option value="2">2</option>
	 <option value="3">3</option>
	 <option value="4">4</option>
	 <option value="5">5</option>
	 <option value="6">6</option>
	 <option value="7">7</option>
	 <option value="8">8</option>
	 <option value="9">9</option>
	 <option value="10">10</option>
	 </select>
	<br><br>
		
	First Name :
	<input type ="text" name ="fname"> <br><br>
	
	Last Name:
	
	<input type ="text" name ="lname"> <br><br>
	Contact Number:
	
	<input type ="text" name ="contact"> <br><br>
	<input type='hidden' name='sid' value='<?php echo $sid;?>'>
	<input type="submit" name="submit">
</form>
	<?php 
	} else if( isset($_GET['submit'] ) && isset($_GET['sid']) && isset($_GET['seat']) ){
	//var_dump($_GET);
	}
	else 
	{
		echo "<a href='#'>PLS Select a bus  From previous page</a>";	
	}	
    ?>
		</div>
	</div>
		<div class="comment_purpose">
		 
		 <img src="images/seat.png"  style="width:400px;height:500px;">
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