 
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Update</title>
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
		</div>
		<h1 style="text-align:center">Update Bus information</h1>
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
	include "db.php";
	if ( isset($_POST['submit']) ) {
		$class = $_POST['class'];
		$name  = $_POST['name'];
		$deptime  = $_POST['deptime'];
		$tseat  = $_POST['tseat'];
		$avseat  = $_POST['avseat'];
		$sfrom  = $_POST['sfrom'];
		$destin  = $_POST['destin'];
		$jdate  = $_POST['jdate'];
		$price = $_POST['price'];
		//var_dump($_POST); die();
		$sql 			= 'UPDATE INTO schedule (`class`, `name` ,`departure_time`,`total_seat`,`available_seat`,`start_from`,`destination`,`journey_date`,`price`) VALUES ("'.$class.'", "'.$name.'", "'.$deptime.'", "'.$tseat.'", "'.$avseat.'", "'.$sfrom.'", "'.$destin.'", "'.$jdate.'","'.$price.'")';
		$result 		= $con->query($sql);
		if(mysqli_insert_id($con)>0){
			echo "Success";
		} else {
			echo "failed";
		}
		// echo '<pre>'; print_r($sql); print_r($result); die();
	} 
    ?>
		<form action="" method="POST" name="ad" onsubmit="return adb()">
					
		<label for="1">Bus Class</label>
		<input type="text" name="class"><br></input><br>
			<label for="2">Bus Name</label>
		<input type="text" name="name"><br></input><br>
			<label for="3">Departure time</label>
		<input type="time" name="deptime"></input><br>
			<label for="4">Total seat</label>
		<input type="number" name="tseat"></input><br>
			<label for="5">Available seat</label>
		<input type="number" name="avseat"></input><br>
			<label for="6">From</label>
		<input type="text" name="sfrom"></input><br>
			<label for="7">To</label>
		<input type="text" name="destin"></input><br>
			<label for="8">Ticket price</label>
		<input type="number" name="price"></input><br>
			<label for="9">Journey date</label>
		<input type="date" name="jdate"></input><br>
		<input type="submit" name="submit">
		<br>
		<br>
		</form>
	<ul id="menu">
   <li><a href="logout.php">Logout</a></li>
   <br>
    <br>
     </ul> 
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